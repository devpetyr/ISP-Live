<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\AgentModel;
use App\Models\AirportDetailsStdAppFormModel;
use App\Models\CardholderDetailsStdAppFormModel;
use App\Models\CityModel;
use App\Models\CountryModel;
use App\Models\ImageStdAppFormModel;
use App\Models\ProgramModel;
use App\Models\StudentApplicationFormModel;
use App\Models\EmergencyDetailsStdAppFormModel;
use App\Models\SchoolDetailsStdAppFormModel;
use App\Models\ElectronicFormStdAppFormModel;
use App\Models\CreditCardDetailsStdAppFormModel;
use App\Models\OtherDetailsStdAppFormModel;
use App\Models\RequestedAgencyStdAppFormModel;
use App\Models\FeeDetailsStdAppFormModel;
use App\Models\StateModel;
use App\Models\StudentDetailsStdAppFormModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class StudentDashboardController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }
//    public function get_country_state(Request $request)
//    {
//        $states = StateModel::where('country_id',$request->country_id)->all('id','name');
//        return response()->json(['data' => $states, 'status'=> 1 ,'message' => 'Successful']);
//    }

    public function application_form()
    {
        $agencies = AgentModel::where('status', 1)->get();
//        $countries = CountryModel::orderBy('name', 'Asc')->get(['id', 'name']);
//        $states = StateModel::orderBy('name', 'Asc')->get(['id', 'name']);
//        $cities = CityModel::orderBy('name', 'Asc')->get(['id', 'name']);

        if (Auth()->user()->application_submitted === 1) {
            $stdapp = StudentApplicationFormModel::where('user_id', auth()->user()->id)->first();
            if ($stdapp->status === 0) {
                return redirect()->route('web_home')->with('success', 'Please wait for admin approval');
            }
            if ($stdapp->status === 2) {
                return view('student.application-form.application_form', compact('agencies'))->with('success', 'Your Application Rejected');
            }
            if ($stdapp->status === 1) {
                return redirect()->route('web_home')->with('success', 'Please wait, admin will create your student dashboard');
            }
        }
        return view('student.application-form.application_form', compact('agencies'));
//        return view('student.application-form.application_form', compact('agencies', 'countries', 'states', 'cities'));
    }

    public function application_form_submit(Request $request)
    {
       $data =  $request->validate([
//            'payment_method' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            // 'country_of_permanent_residence' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'student_email_1' => 'required',
            'using_agent' => 'required',
            'emergency_contact_first_name' => 'required',
            'emergency_contact_last_name' => 'required',
            'emergency_contact_phone_number' => 'required',
            'emergency_contact_relation' => 'required',
            'emergency_contact_email' => 'required',
            'school_you_attend' => 'required',
            // 'school_state' => 'required',
            'length_of_stay' => 'required',
            'date_that_i_need_to_move_to_my_homestay' => 'required',
            'what_is_your_english_level' => 'required',
            'do_you_smoke' => 'required',
            'meal_option' => 'required',
            'food_restrictions' => 'required',
            'do_you_accept_children_under_8_years_in_host_home' => 'required',
            'are_you_allergic_to_animals' => 'required',
            'will_you_have_a_car' => 'required',
            'major_field_of_study' => 'required',
            'specific_needs' => 'required',
            'hobbies_and_interest' => 'required',
            'describe_your_family' => 'required',
            'have_you_traveled_abroad_before' => 'required',
            'medical_information' => 'required',
            'placement_fee' => 'required',
            'monthly_service_fee' => 'required',
            'airport_pickup_fee' => 'required',
            'deposit_fee' => 'required',
            'late_fee' => 'required',
            'student_name_1' => 'required',
            'cardholder_first_name' => 'required',
            'cardholder_last_name' => 'required',
            'cardholder_email' => 'required',
            'cardholder_street_address_line_1' => 'required',
            // 'cardholder_city' => 'required',
            'cardholder_zipcode' => 'required',
            // 'cardholder_country' => 'required',
            'credit_card_type' => 'required',
            'name_on_card' => 'required',
            'card_number' => 'required',
            'card_exp_date' => 'required',
            'student_electronic_signature_1' => 'required',
            'student_name_2' => 'required',
            'cardholder_electronic_signature' => 'required',
            'cardholder_name' => 'required',
            'cardholder_date' => 'required',
            'agree' => 'required',
            'student_electronic_signature_2' => 'required',
            'student_electronic_signature_date_2' => 'required',
        ]);
        $user = User::where('id', Auth::user()->id)->where('application_submitted', 1)->first();
        if ($user) {
            return redirect()->route('login')->with('failed', 'Your application already submitted please wait for admin approval !');
        } else {
            if ($request->agree !== "yes") {
                return back()->with('error', 'Please Agree Form');
            }

            /***program details start*/
            $program = new ProgramModel();
            $program->user_id = Auth::user()->id;
            $program->program = $request->program;
            $program->save();
            /***program details ends*/

            /** Student Form Details 1 start*/
            $std_details = new StudentDetailsStdAppFormModel();
            $std_details->first_name = $request->first_name;
            $std_details->last_name = $request->last_name;
            $std_details->dob = Carbon::parse($request->dob);
            if ($request->gender == "Male" || $request->gender == "Female") {
                $std_details->gender = $request->gender;
            }
            if ($request->gender == "Other") {
                $std_details->gender = $request->gender;
                $std_details->other_gender = $request->other_gender;
            }
            $std_details->country_of_permanent_residence = $request->country_of_permanent_residence;
            $std_details->address1 = $request->address1;
            $std_details->address2 = $request->address2;
            $std_details->address3 = $request->address3;
            $std_details->city = $request->city;
            $std_details->state = $request->state;
            $std_details->zip_code = $request->zip_code;
            $std_details->country = $request->country;
            $std_details->phone_number = $request->phone_number;
            $std_details->wechat_whatsapp = $request->wechat_whatsapp;
            $std_details->student_email_1 = $request->student_email_1;
            $std_details->status = 1;
            $std_details->save();
            /** Student Form Details 1 end*/


            /** Emergency Form start*/
            $emergency_details = new EmergencyDetailsStdAppFormModel();
            $emergency_details->emergency_contact_first_name = $request->emergency_contact_first_name;
            $emergency_details->emergency_contact_last_name = $request->emergency_contact_last_name;
            $emergency_details->emergency_contact_phone_number = $request->emergency_contact_phone_number;
            $emergency_details->emergency_contact_relation = $request->emergency_contact_relation;
            $emergency_details->emergency_contact_email = $request->emergency_contact_email;
            $emergency_details->status = 1;
            $emergency_details->save();
            /** Emergency Form end*/


            /** School Form start*/
            $school_details = new SchoolDetailsStdAppFormModel();
            $school_details->school_you_attend = $request->school_you_attend;
            $school_details->school_name_not_in_list = $request->school_name_not_in_list;
            $school_details->school_city = $request->school_city;
            $school_details->school_state = $request->school_state;
            $school_details->length_of_stay = $request->length_of_stay;
            $school_details->status = 1;
            $school_details->save();
            /** School Form end*/


            /** Airport Form Details start*/
            $airport_details = new AirportDetailsStdAppFormModel();
            $airport_details->arrival_date = $request->arrival_date;
            $airport_details->arrival_airport = $request->arrival_airport;
            $airport_details->arrival_flight_number = $request->arrival_flight_number;
            $airport_details->flight_type = $request->flight_type;
            $airport_details->arrival_airline = $request->arrival_airline;
            $airport_details->airport_arrival_time = $request->airport_arrival_time;
            $airport_details->status = 1;
            $airport_details->save();
            /** Airport Form Details end*/


            /** Cardholder Form Details start*/
            $cardholder_details = new CardholderDetailsStdAppFormModel();
            $cardholder_details->cardholder_first_name = $request->cardholder_first_name;
            $cardholder_details->cardholder_last_name = $request->cardholder_last_name;
            $cardholder_details->cardholder_email = $request->cardholder_email;
            $cardholder_details->cardholder_street_address_line_1 = $request->cardholder_street_address_line_1;
            $cardholder_details->cardholder_street_address_line_2 = $request->cardholder_street_address_line_2;
            $cardholder_details->cardholder_street_address_line_3 = $request->cardholder_street_address_line_3;
            $cardholder_details->cardholder_city = $request->cardholder_city;
            $cardholder_details->cardholder_state = $request->cardholder_state;
            $cardholder_details->cardholder_zipcode = $request->cardholder_zipcode;
            $cardholder_details->cardholder_country = $request->cardholder_country;
            $cardholder_details->status = 1;
            $cardholder_details->save();
            /** Cardholder Form Details end*/


            /** CreditCard Form Details start*/
            $creditcard_details = new CreditCardDetailsStdAppFormModel();
            $creditcard_details->credit_card_type = $request->credit_card_type;
            $creditcard_details->name_on_card = $request->name_on_card;
            $creditcard_details->card_number = $request->card_number;
            $creditcard_details->card_exp_date = $request->card_exp_date;
            $creditcard_details->status = 1;
            $creditcard_details->save();
            /** CreditCard Form Details end*/


            /** Electronic Form Details start*/
            $electronic_details = new ElectronicFormStdAppFormModel();

            //Student Electronic Form Details
            $electronic_details->student_electronic_signature_1 = $request->student_electronic_signature_1;
            $electronic_details->student_name_2 = $request->student_name_2;
            $electronic_details->student_electronic_signature_date_1 = $request->student_electronic_signature_date_1;

            //Cardholder Electronic Form Details
            $electronic_details->cardholder_electronic_signature = $request->cardholder_electronic_signature;
            $electronic_details->cardholder_name = $request->cardholder_name;
            $electronic_details->cardholder_date = $request->cardholder_date;

            //Student Electronic Form Details 2
            $electronic_details->student_electronic_signature_2 = $request->student_electronic_signature_2;
            $electronic_details->student_electronic_signature_date_2 = $request->student_electronic_signature_date_2;

            //Parent Electronic Form Details
            $electronic_details->parent_electronic_signature_1 = $request->parent_electronic_signature_1;
            $electronic_details->parent_electronic_signature_date_1 = $request->parent_electronic_signature_date_1;
            $electronic_details->status = 1;
            $electronic_details->save();

            /** Electronic Form Details End*/


            /** Other Details Form Start*/
            $other_details = new OtherDetailsStdAppFormModel();
            $other_details->date_that_i_need_to_move_to_my_homestay = $request->date_that_i_need_to_move_to_my_homestay;
            $other_details->what_is_your_english_level = $request->what_is_your_english_level;
            $other_details->do_you_smoke = $request->do_you_smoke;
            $other_details->meal_option = $request->meal_option;
            $other_details->food_restrictions = $request->food_restrictions;
            $other_details->do_you_accept_children_under_8_years_in_host_home = $request->do_you_accept_children_under_8_years_in_host_home;
            $other_details->are_you_allergic_to_animals = $request->are_you_allergic_to_animals;
            $other_details->if_yes_please_indicate_animal = $request->if_yes_please_indicate_animal;
            $other_details->will_you_have_a_car = $request->will_you_have_a_car;
            $other_details->major_field_of_study = $request->major_field_of_study;
            $other_details->specific_needs = $request->specific_needs;
            $other_details->hobbies_and_interest = $request->hobbies_and_interest;
            $other_details->describe_your_family = $request->describe_your_family;
            $other_details->have_you_traveled_abroad_before = $request->have_you_traveled_abroad_before;
            $other_details->medical_information = $request->medical_information;
            $other_details->status = 1;
            $other_details->save();
            /** Other Details Form End*/


            /** Fee Form Details start*/
            $fee_details = new FeeDetailsStdAppFormModel();
            $fee_details->placement_fee = $request->placement_fee;
            $fee_details->monthly_service_fee = $request->monthly_service_fee;
            $fee_details->airport_pickup_fee = $request->airport_pickup_fee;
            $fee_details->deposit_fee = $request->deposit_fee;
            $fee_details->late_fee = $request->late_fee;
            $fee_details->status = 1;
            $fee_details->save();
            /** Fee Form Details end*/
            if (!$std_details->save() || !$emergency_details->save() || !$school_details->save() || !$airport_details->save() || !$cardholder_details->save() || !$creditcard_details->save() || !$electronic_details->save() || !$other_details->save() || !$fee_details->save()) {
                dd(!$std_details->save(), !$emergency_details->save(), !$school_details->save(), !$airport_details->save(), !$cardholder_details->save(), !$creditcard_details->save(), !$electronic_details->save(), !$other_details->save(), !$fee_details->save());
            }


            /** Student Application Main Form Start*/

            $std_application = new StudentApplicationFormModel();


            $std_application->user_id = Auth::user()->id;

//            $std_application->payment_method = $request->payment_method;
            $std_application->payment_method = '-';

            /** Student Form Details 1 start*/
            $std_application->student_form_details_id = $std_details->id; //Table `1` id
            /** Student Form Details 1 end*/

            /** Student Form program start*/
            $std_application->program_id = $program->id; //Table `1` id
            /** Student Form program end*/

            $std_application->using_agent = $request->using_agent;

            if ($request->using_agent == "yes") {
                /** Agent Form*/
                if (!$request->agency_name_not_on_the_list) {
                    $std_application->agency_id = $request->agency_name;
                } else {
                    $requested_agency = new RequestedAgencyStdAppFormModel();
                    $requested_agency->agency_name = $request->agency_name_not_on_the_list;
                    $requested_agency->agency_contact_person = $request->agency_contact_person;
                    $requested_agency->agency_street_address_1 = $request->agency_street_address_1;
                    $requested_agency->agency_street_address_2 = $request->agency_street_address_2;
                    $requested_agency->agency_street_address_3 = $request->agency_street_address_3;
                    $requested_agency->agency_city = $request->agency_city;
                    $requested_agency->agency_state = $request->agency_state;
                    $requested_agency->agency_zip_code = $request->agency_zip_code;
                    $requested_agency->agency_country = $request->agency_country;
                    $requested_agency->agency_phone_number = $request->agency_phone_number;
                    $requested_agency->agent_email = $request->agent_email;
                    $requested_agency->status = 1;
                    $requested_agency->save();

                    /** Emergency Form start*/
                    $std_application->requested_agency_id = $requested_agency->id; //Table `9` id
                    /** Emergency Form end*/
                }
            }

            /** Emergency Form start*/
            $std_application->emergency_details_id = $emergency_details->id; //Table `2` id
            /** Emergency Form end*/

            /** School Form start*/
            $std_application->school_form_details_id = $school_details->id; //Table `3` id
            /** School Form end*/

            /** Other Details Form Start*/
            $std_application->other_details_id = $other_details->id; //Table `8` id
            /** Other Details Form End*/

            $std_application->request_for_airport_pickup_driver = $request->request_for_airport_pickup_driver;
            if ($request->request_for_airport_pickup_driver == "yes") {
                $std_application->number_of_people_needing_driver = $request->number_of_people_needing_driver;
            }


            /** Airport Form Details start*/
            $std_application->airport_details_id = $airport_details->id; //Table `4` id
            /** Airport Form Details end*/

            /** Fee Form Details start*/
            $std_application->fee_details_id = $fee_details->id; //Table `10` id
            /** Fee Form Details end*/


            /** Cardholder Form Details start*/
            $std_application->student_name_1 = $request->student_name_1;
            $std_application->cardholder_details_id = $cardholder_details->id; //Table `5` id
            /** Cardholder Form Details end*/

            /** CreditCard Form Details start*/
            $std_application->creditcard_details_id = $creditcard_details->id; //Table `6` id
            /** CreditCard Form Details end*/

            /** Electronic Form Details start*/
            $std_application->electronic_form_id = $electronic_details->id; //Table `7` id
            /** Electronic Form Details End*/


            /** Student Form Details 2*/
            $std_application->student_name_3 = $request->student_name_3;
            $std_application->student_email_2 = $request->student_email_2;


            /** Agree Form*/
            $std_application->agree = $request->agree;

            $std_application->status = 0;
            $std_application->save();

            /** student_photographs start*/
            $images = $request->file('student_photographs');
            if ($images) {
                $imageData = [];
                foreach ($images as $key => $image) {
                    /** Make a new filename with extension */
                    $filename = time() . rand(1111111111, 9999999999) . '.' . $image->getClientOriginalExtension();

                    /**
                     * Get real image path using
                     * @class Intervention\Image\Facades\Image
                     */
                    $img = Image::make($image->getRealPath());

                    /** Set image dimension to conserve aspect ratio */
                    $img->fit(300, 300);

                    /** Get image stream to store the image else the tmp file will be stored */
                    $img->stream();

                    /** Make a new filename with extension */
                    File::put(public_path('student/application/') . $filename, $img);

                    /** Store a new images for products */
                    $storeImage = new ImageStdAppFormModel();
                    $storeImage->name = $filename;
                    $storeImage->std_app_form_id = $std_application->id;
                    $storeImage->status = 1;
                    try {
                        $storeImage->save();
                    } catch (Throwable $ex) {
                        report($ex);
                    }
                }
                /** student_photographs end*/
            }

            /** Student Application Main Form End*/
            if ($std_application->save()) {
                $user = User::where('id', Auth::user()->id)->where('status',1)->first();
                $user->application_submitted = 1;
                $user->save();
                return redirect()->route('web_home')->with('success', 'Student application form submitted successfully, Please wait for admin approval');
            } else {
                return back()->with('error', 'Student application form submission unsuccessfully');
            }
        }
    }
}


