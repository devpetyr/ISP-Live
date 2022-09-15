<?php

namespace App\Http\Controllers\student;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\AgentModel;
use App\Models\CityModel;
use App\Models\CountryModel;

use App\Models\SafStudentBasicInformationModel;
use App\Models\SafStudentInformationModel;
use App\Models\SafAgentInformationModel;
use App\Models\SafOtherInformationModel;
use App\Models\SafMedicalInformationModel;
use App\Models\SafAirportInformationModel;
use App\Models\SafPaymentInformationModel;
use App\Models\SafAgreementInformationModel;
use App\Models\SafStatusModel;

use App\Models\StateModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class StudentApplicationController extends Controller
{

    /** New */
    public function application_form()
    {
        $Saf_BasicInfo = SafStudentBasicInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafStudentInfo = SafStudentInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafAgentInfo = SafAgentInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafOtherInfo = SafOtherInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafMedicalInfo = SafMedicalInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafAirportInfo = SafAirportInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafPaymentInfo = SafPaymentInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();
        $SafAgreementInfo = SafAgreementInformationModel::where('user_id', auth()->id())->orderby('id', 'DESC')->first();

        return view('student.application-form.new-application-form', compact('Saf_BasicInfo', 'SafStudentInfo', 'SafAgentInfo', 'SafOtherInfo', 'SafMedicalInfo', 'SafAirportInfo', 'SafPaymentInfo', 'SafAgreementInfo'));
    }

    public function saf_submit_1(Request $request)
    {
        $bsc_details = SafStudentBasicInformationModel::where('user_id', Auth::user()->id)->first();
        if ($bsc_details) {
            $validation = "";
        } else {
            $validation = "required";
        }
        $rules = array(
//           Student Basic information
            "program" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "dob" => "required",
            "age" => "required|numeric|min:1|digits_between:1,3",
            "gender" => "required",
            "country_of_permanent_residence" => "required",
            "passport_number" => "required",
            "passport_exp" => "required",
            "student_profile_photo" => $validation,
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section1')->withErrors($validator);
        }

        $user = User::where('id', Auth::user()->id)->where('application_submitted', 1)->first();
        if ($user) {
            return redirect()->route('web_home')->with('failed', 'Your application already submitted please wait for admin approval !');
        } else {

            if ($bsc_details) {
                $msg = 'updated successfully.';
            } else {
                $bsc_details = new SafStudentBasicInformationModel();
                $bsc_details->user_id = Auth()->user()->id;
                $msg = 'submitted successfully.';
            }

            $bsc_details->program = $request->program;
            $bsc_details->first_name = $request->first_name;
            $bsc_details->last_name = $request->last_name;
            $bsc_details->dob = $request->dob;
            $bsc_details->age = $request->age;
            $bsc_details->gender = $request->gender;
            $bsc_details->country_of_permanent_residence = $request->country_of_permanent_residence;
            $bsc_details->passport_number = $request->passport_number;
            $bsc_details->passport_exp = $request->passport_exp;


            /** student_photographs start*/
            $image = $request->file('student_profile_photo');
            if ($image) {
                $imageData = [];
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

                /** Store image for Student Profile Photo */
                $bsc_details->student_profile_photo = $filename;
            }
            /** student_photographs end*/

            $bsc_details->status = 1;
            $bsc_details->save();
        }

        if ($bsc_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section1 = 1;
            $saf_status->save();

            return redirect()->route('web_saf', '#Form-Section2-1')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_2_1(Request $request)
    {
        $rules = array(
            "student_address" => "required",
            "student_country" => "required",
            "student_address_zip_code" => "required",
            "father_name" => "required",
            "father_phone" => "required",
            "father_email" => "required",
            "mother_name" => "required",
            "mother_phone" => "required",
            "mother_email" => "required",
            "student_contact_phone_number" => "required",
            "student_contact_email" => "required",
            "student_contact_wechat_number" => "required",
            "student_contact_line_number" => "required",
            "student_contact_whatsApp_number" => "required",
            "emergency_contact_name" => "required",
            "emergency_contact_relation" => "required",
            "emergency_contact_phone_number" => "required",
            "emergency_contact_email" => "required",
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section2-1')->withErrors($validator);
        }

        $std_details = SafStudentInformationModel::where('user_id', Auth()->user()->id)->first();

        if ($std_details) {
            $msg = 'updated successfully.';
        } else {
            /** SafStudentInformationModel Table 2 Start*/
            $std_details = new SafStudentInformationModel ();
            $std_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $std_details->student_address = $request->student_address;
        $std_details->student_country = $request->student_country;
        $std_details->student_address_zip_code = $request->student_address_zip_code;
        $std_details->father_name = $request->father_name;
        $std_details->father_phone = $request->father_phone;
        $std_details->father_email = $request->father_email;
        $std_details->mother_name = $request->mother_name;
        $std_details->mother_phone = $request->mother_phone;
        $std_details->mother_email = $request->mother_email;
        $std_details->student_contact_phone_number = $request->student_contact_phone_number;
        $std_details->student_contact_email = $request->student_contact_email;
        $std_details->student_contact_wechat_number = $request->student_contact_wechat_number;
        $std_details->student_contact_line_number = $request->student_contact_line_number;
        $std_details->student_contact_whatsApp_number = $request->student_contact_whatsApp_number;
        $std_details->emergency_contact_name = $request->emergency_contact_name;
        $std_details->emergency_contact_relation = $request->emergency_contact_relation;
        $std_details->emergency_contact_phone_number = $request->emergency_contact_phone_number;
        $std_details->emergency_contact_email = $request->emergency_contact_email;
        $std_details->status = 1;
        $std_details->save();

        if ($std_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();

            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section2_1 = 1;
            $saf_status->save();
            return redirect()->route('web_saf', '#Form-Section2-2')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_2_2(Request $request)
    {
        $rules = array(
            "school_you_attend" => "required",
            "school_name_not_in_list" => "required",
            "school_city" => "required",
            "school_state" => "required",
            "major_field_of_study" => "required",
            "length_of_stay" => "required",
            "contract_start_date" => "required",
            "contract_end_date" => "required",
            "what_is_your_english_level" => "required",
            "do_you_accept_children_under_8_years_in_host_home" => "required",
            "are_you_allergic_to_animals" => "required",
            "if_yes_please_indicate_animal" => "required_if:are_you_allergic_to_animals,yes",
            "meal_option" => "required",
            "food_restrictions" => "required",
            "do_you_smoke" => "required",
            "will_you_have_a_car" => "required",
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section2-2')->withErrors($validator);
        }

        $std_details = SafStudentInformationModel::where('user_id', Auth::user()->id)->first();

        if ($std_details) {
            $msg = 'updated successfully.';
        } else {
            /** SafStudentInformationModel Table 2 Start*/
            $std_details = new SafStudentInformationModel ();
            $std_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $std_details->school_you_attend = $request->school_you_attend;
        $std_details->school_name_not_in_list = $request->school_name_not_in_list;
        $std_details->school_city = $request->school_city;
        $std_details->school_state = $request->school_state;
        $std_details->major_field_of_study = $request->major_field_of_study;
        $std_details->length_of_stay = $request->length_of_stay;
        $std_details->contract_start_date = $request->contract_start_date;
        $std_details->contract_end_date = $request->contract_end_date;
        $std_details->what_is_your_english_level = $request->what_is_your_english_level;
        $std_details->do_you_accept_children_under_8_years_in_host_home = $request->do_you_accept_children_under_8_years_in_host_home;
        $std_details->are_you_allergic_to_animals = $request->are_you_allergic_to_animals;
        $std_details->if_yes_please_indicate_animal = $request->if_yes_please_indicate_animal;
        $std_details->meal_option = $request->meal_option;
        $std_details->food_restrictions = $request->food_restrictions;
        $std_details->do_you_smoke = $request->do_you_smoke;
        $std_details->will_you_have_a_car = $request->will_you_have_a_car;
        $std_details->status = 1;
        $std_details->save();

        if ($std_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section2_2 = 1;
            $saf_status->save();

            return redirect()->route('web_saf', '#Form-Section3')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_3(Request $request)
    {
        $rules = array(
            "using_agent" => "required",
            "agency_name" => "required_if:using_agent,yes",
            "agency_contact_person" => "required_if:using_agent,yes",
            "agent_phone_number" => "required_if:using_agent,yes",
            "agent_email" => "required_if:using_agent,yes",
            "agent_wechat_number" => "required_if:using_agent,yes",
            "agent_line_number" => "required_if:using_agent,yes",
            "agent_whatsapp_number" => "required_if:using_agent,yes",

        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section3')->withErrors($validator);
        }

        $bsc_details = SafStudentBasicInformationModel::where('user_id', Auth::user()->id)->first();
        $agent_details = SafAgentInformationModel::where('user_id', Auth()->user()->id)->first();

        if (!$bsc_details) {
            return redirect()->route('web_saf', '#Form-Section1')->with('error', 'Please fill out the form');
        }

        /** SafAgentInformationModel Table 3 Start*/
        if ($request->using_agent == 'yes') {

            if ($agent_details) {
                $msg = 'updated successfully.';
            } else {
                $agent_details = new SafAgentInformationModel();
                $agent_details->user_id = Auth()->user()->id;
                $msg = 'submitted successfully.';
            }
            $agent_details->agency_name = $request->agency_name;
            $agent_details->agency_contact_person = $request->agency_contact_person;
            $agent_details->agent_phone_number = $request->agent_phone_number;
            $agent_details->agent_email = $request->agent_email;
            $agent_details->agent_wechat_number = $request->agent_wechat_number;
            $agent_details->agent_line_number = $request->agent_line_number;
            $agent_details->agent_whatsapp_number = $request->agent_whatsapp_number;
            $agent_details->status = 1;
            $agent_details->save();
        } else {
            if ($agent_details) {
                $agent_details->delete();
            }
            $msg = 'submitted successfully.';
        }
        $bsc_details->using_agent = $request->using_agent;
        $bsc_details->save();
        /** SafAgentInformationModel Table 3 End*/

        if ($bsc_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section3 = 1;
            $saf_status->save();
            return redirect()->route('web_saf', '#Form-Section4')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_4(Request $request)
    {
        $rules = array(
            "specific_needs" => "required",
            "hobbies_and_interest" => "required",
            "describe_your_personality" => "required",
            "describe_your_family" => "required",
            "describe_your_travel_experience" => "required",
            "write_greeting_to_host" => "required",

        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section4')->withErrors($validator);
        }
        $other_details = SafOtherInformationModel::where('user_id', Auth()->user()->id)->first();


        /** SafOtherInformationModel Table 4 Start*/
        if ($other_details) {

            $msg = 'updated successfully.';
        } else {
            $other_details = new SafOtherInformationModel();
            $other_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $other_details->specific_needs = $request->specific_needs;
        $other_details->hobbies_and_interest = $request->hobbies_and_interest;
        $other_details->describe_your_personality = $request->describe_your_personality;
        $other_details->describe_your_family = $request->describe_your_family;
        $other_details->describe_your_travel_experience = $request->describe_your_travel_experience;
        $other_details->write_greeting_to_host = $request->write_greeting_to_host;
        $other_details->status = 1;
        $other_details->save();

        /** SafOtherInformationModel Table 4 End*/

        if ($other_details->save()) {

            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section4 = 1;
            $saf_status->save();
            return redirect()->route('web_saf', '#Form-Section5')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_5(Request $request)
    {
        $medical_details = SafMedicalInformationModel::where('user_id', Auth()->user()->id)->first();
        if ($medical_details) {
            $validation = "";
        } else {
            $validation = "required";
        }
        $rules = array(
            "are_you_in_good_health" => "required",
            "if_no_please_explain_health" => "required_if:are_you_in_good_health,no",
            "do_you_have_medical_allergies" => "required",
            "if_yes_please_explain_medical_allergies" => "required_if:do_you_have_medical_allergies,yes",
            "do_you_take_medication" => "required",
            "if_yes_please_explain_medication" => "required_if:do_you_take_medication,yes",
            "under_care_of_psychiatrist_past_five_year" => "required",
            "if_yes_please_explain_reason_of_psychiatrist" => "required_if:under_care_of_psychiatrist_past_five_year,yes",
            "have_who_approved_vaccination" => "required",
            "vaccine_name" => "required",
            "dates_administered" => "required",
            "vaccine_card_photograph" => $validation,
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section5')->withErrors($validator);
        }


        /** SafMedicalInformationModel Table 5 Start*/
        if ($medical_details) {

            $msg = 'updated successfully.';
        } else {
            $medical_details = new SafMedicalInformationModel();
            $medical_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $medical_details->are_you_in_good_health = $request->are_you_in_good_health;
        $medical_details->if_no_please_explain_health = $request->if_no_please_explain_health;
        $medical_details->do_you_have_medical_allergies = $request->do_you_have_medical_allergies;
        $medical_details->if_yes_please_explain_medical_allergies = $request->if_yes_please_explain_medical_allergies;
        $medical_details->do_you_take_medication = $request->do_you_take_medication;
        $medical_details->if_yes_please_explain_medication = $request->if_yes_please_explain_medication;
        $medical_details->under_care_of_psychiatrist_past_five_year = $request->under_care_of_psychiatrist_past_five_year;
        $medical_details->if_yes_please_explain_reason_of_psychiatrist = $request->if_yes_please_explain_reason_of_psychiatrist;
        $medical_details->have_who_approved_vaccination = $request->have_who_approved_vaccination;
        $medical_details->vaccine_name = $request->vaccine_name;
        $medical_details->dates_administered = $request->dates_administered;
        $medical_details->status = 1;

        if ($request->file('vaccine_card_photograph')) {
            $file = $request->file('vaccine_card_photograph');
            $filename = time() . rand(9999, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('student/application'), $filename);
            $medical_details->vaccine_card_photograph = $filename;
        }
        $medical_details->save();


        /** SafMedicalInformationModel Table 5 End*/

        if ($medical_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section5 = 1;
            $saf_status->save();
            return redirect()->route('web_saf', '#Form-Section6')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_6(Request $request)
    {

        $rules = array(
            "request_for_airport_pickup_driver" => "required",
            "number_of_people_needing_driver" => "required_if:request_for_airport_pickup_driver,yes",
            "arrival_date" => "required",
            "airport_arrival_time" => "required",
            "flight_type" => "required",
            "arrival_airport" => "required",
            "arrival_airline" => "required",
            "arrival_flight_number" => "required",
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section6')->withErrors($validator);
        }

        $airport_details = SafAirportInformationModel::where('user_id', Auth()->user()->id)->first();

        /** SafAirportInformationModel Table 6 Start */
        if ($airport_details) {
            $msg = 'updated successfully.';
        } else {
            $airport_details = new SafAirportInformationModel();
            $airport_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $airport_details->request_for_airport_pickup_driver = $request->request_for_airport_pickup_driver;
        $airport_details->number_of_people_needing_driver = $request->number_of_people_needing_driver;
        $airport_details->arrival_date = $request->arrival_date;
        $airport_details->airport_arrival_time = $request->airport_arrival_time;
        $airport_details->flight_type = $request->flight_type;
        $airport_details->arrival_airport = $request->arrival_airport;
        $airport_details->arrival_airline = $request->arrival_airline;
        $airport_details->arrival_flight_number = $request->arrival_flight_number;
        $airport_details->status = 1;
        $airport_details->save();
        /** SafAirportInformationModel Table 6 End */

        if ($airport_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section6 = 1;
            $saf_status->save();

            return redirect()->route('web_saf', '#Form-Section7')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_7(Request $request)
    {

        $rules = array(
            "payment_method" => "required",
//            "card_holder_student_first_name" => "required", //will be dynamic
//            "card_holder_student_last_name" => "required", //will be dynamic
            "cardholder_first_name" => "required",
            "cardholder_last_name" => "required",
            "cardholder_address" => "required",
            "cardholder_city" => "required",
            "cardholder_state" => "required",
            "cardholder_zipcode" => "required",
            "cardholder_country" => "required",
            "cardholder_email" => "required",
            "credit_card_type" => "required",
            "name_on_card" => "required",
            "card_number" => "required",
            "card_cvc" => "required",
            "card_exp_date" => "required",

//            Won't' be required

//            "placement_fee" => "required",
//            "late_fee" => "required",
//            "deposit_fee" => "required",
//            "airport_pickup_fee" => "required",
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section7')->withErrors($validator);
        }

        $payment_details = SafPaymentInformationModel::where('user_id', Auth()->user()->id)->first();

        /** SafPaymentInformationModel Table 7 Start */
        if ($payment_details) {
            $msg = 'updated successfully.';
        } else {
            $payment_details = new SafPaymentInformationModel();
            $payment_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $payment_details->payment_method = $request->payment_method;
        $payment_details->cardholder_first_name = $request->cardholder_first_name;
        $payment_details->cardholder_last_name = $request->cardholder_last_name;
        $payment_details->cardholder_address = $request->cardholder_address;
        $payment_details->cardholder_city = $request->cardholder_city;
        $payment_details->cardholder_state = $request->cardholder_state;
        $payment_details->cardholder_zipcode = $request->cardholder_zipcode;
        $payment_details->cardholder_country = $request->cardholder_country;
        $payment_details->cardholder_email = $request->cardholder_email;
        $payment_details->credit_card_type = $request->credit_card_type;
        $payment_details->name_on_card = $request->name_on_card;
        $payment_details->card_number = $request->card_number;
        $payment_details->card_cvc = $request->card_cvc;
        $payment_details->card_exp_date = $request->card_exp_date;
        $payment_details->placement_fee = $request->placement_fee;
        $payment_details->late_fee = $request->late_fee;
        $payment_details->deposit_fee = $request->deposit_fee;
        $payment_details->airport_pickup_fee = $request->airport_pickup_fee;
        $payment_details->status = 1;
        $payment_details->save();
        /** SafPaymentInformationModel Table 7 End */

        if ($payment_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section7 = 1;
            $saf_status->save();

            return redirect()->route('web_saf', '#Form-Section8-1-1')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_8_1_1(Request $request)
    {

        $rules = array(
            "fees_agreement" => "required",
            "contract_period_agreement" => "required",
            "payments_agreement" => "required",
            "deposit_agreement" => "required",
            "meal_plans_agreement" => "required",
            "student_faq_sheet_agreement" => "required",
            "airport_pickup_agreement" => "required",
            "transportation_agreement" => "required",
            "host_possessions_agreement" => "required",
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section8-1-1')->withErrors($validator);
        }

        $agreement_details = SafAgreementInformationModel::where('user_id', Auth()->user()->id)->first();

        /** SafAgreementInformationModel Table 8 Start */
        if ($agreement_details) {
            $msg = 'updated successfully.';
        } else {
            $agreement_details = new SafAgreementInformationModel();
            $agreement_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $agreement_details->fees_agreement = $request->fees_agreement;
        $agreement_details->contract_period_agreement = $request->contract_period_agreement;
        $agreement_details->payments_agreement = $request->payments_agreement;
        $agreement_details->deposit_agreement = $request->deposit_agreement;
        $agreement_details->meal_plans_agreement = $request->meal_plans_agreement;
        $agreement_details->student_faq_sheet_agreement = $request->student_faq_sheet_agreement;
        $agreement_details->airport_pickup_agreement = $request->airport_pickup_agreement;
        $agreement_details->transportation_agreement = $request->transportation_agreement;
        $agreement_details->host_possessions_agreement = $request->host_possessions_agreement;
        $agreement_details->status = 1;
        $agreement_details->save();
        /** SafAgreementInformationModel Table 8 End */


        if ($agreement_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section8_1_1 = 1;
            $saf_status->save();

            return redirect()->route('web_saf', '#Form-Section8-1-2')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_8_1_2(Request $request)
    {

        $rules = array(
            "prohibited_activities_agreement" => "required",
            "medical_agreement" => "required",
            "request_for_host_change_agreement" => "required",
            "media_photo_release_agreement" => "required",
            "covid_19_protocol_for_students_agreement" => "required",
            "program_termination_agreement" => "required",
            "warranties_consent_agreement" => "required",
            "limitation_of_liability_agreement" => "required",
            "indemnification_agreement" => "required",
            "governing_law_agreement" => "required",
            "force_majeure_agreement" => "required",
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section8-1-2')->withErrors($validator);
        }

        $agreement_details = SafAgreementInformationModel::where('user_id', Auth()->user()->id)->first();

        /** SafAgreementInformationModel Table 8 Start*/
        if ($agreement_details) {
            $msg = 'updated successfully.';
        } else {
            $agreement_details = new SafAgreementInformationModel();
            $agreement_details->user_id = Auth()->user()->id;
            $msg = 'submitted successfully.';
        }
        $agreement_details->prohibited_activities_agreement = $request->prohibited_activities_agreement;
        $agreement_details->medical_agreement = $request->medical_agreement;
        $agreement_details->request_for_host_change_agreement = $request->request_for_host_change_agreement;
        $agreement_details->media_photo_release_agreement = $request->media_photo_release_agreement;
        $agreement_details->covid_19_protocol_for_students_agreement = $request->covid_19_protocol_for_students_agreement;
        $agreement_details->program_termination_agreement = $request->program_termination_agreement;
        $agreement_details->warranties_consent_agreement = $request->warranties_consent_agreement;
        $agreement_details->limitation_of_liability_agreement = $request->limitation_of_liability_agreement;
        $agreement_details->indemnification_agreement = $request->indemnification_agreement;
        $agreement_details->governing_law_agreement = $request->governing_law_agreement;
        $agreement_details->force_majeure_agreement = $request->force_majeure_agreement;
        $agreement_details->status = 1;
        $agreement_details->save();
        /** SafAgreementInformationModel Table 8 End */

        if ($agreement_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section8_1_2 = 1;
            $saf_status->save();

            return redirect()->route('web_saf', '#Form-Section8-2')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_8_2(Request $request)
    {
        $rules = array(
            "agree" => "required",
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('web_saf', '#Form-Section8-2')->withErrors($validator);
        }

        $bsc_details = SafStudentBasicInformationModel::where('user_id', Auth::user()->id)->first();

        /** Main Form SafStudentBasicInformationModel Table 1 Start */
        if ($bsc_details) {
            $bsc_details->agree = $request->agree;
            $bsc_details->status = 1;
            $bsc_details->save();
            $msg = 'Application Submitted Successfully.';
        } else {
            return redirect()->route('web_saf', '#Form-Section1')->with('error', 'Please fill out the form');
        }
        /** Main Form SafStudentBasicInformationModel Table 1 End */

        if ($bsc_details->save()) {
            $saf_status = SafStatusModel::where('user_id', Auth()->user()->id)->first();
            if (!$saf_status) {
                $saf_status = new SafStatusModel();
                $saf_status->user_id = Auth()->user()->id;
            }
            $saf_status->form_section8_2 = 1;
            $saf_status->save();

            if (!$saf_status->form_section1 == 1) {
                return redirect()->route('web_saf', '#Form-Section1')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section2_1 == 1) {
                return redirect()->route('web_saf', '#Form-Section2-1')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section2_2 == 1) {
                return redirect()->route('web_saf', '#Form-Section2-2')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section3 == 1) {
                return redirect()->route('web_saf', '#Form-Section3')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section4 == 1) {
                return redirect()->route('web_saf', '#Form-Section4')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section5 == 1) {
                return redirect()->route('web_saf', '#Form-Section5')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section6 == 1) {
                return redirect()->route('web_saf', '#Form-Section6')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section7 == 1) {
                return redirect()->route('web_saf', '#Form-Section7')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section8_1_1 == 1) {
                return redirect()->route('web_saf', '#Form-Section8-1-1')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section8_1_2 == 1) {
                return redirect()->route('web_saf', '#Form-Section8-1-2')->with('error', 'Please fill out the form');
            }
            if (!$saf_status->form_section8_2 == 1) {
                return redirect()->route('web_saf', '#Form-Section8-2')->with('error', 'Please fill out the form');
            }
            $user = User::where('id', Auth::user()->id)->where('status', 1)->first();
            $user->application_submitted = 1;
            $user->save();
            return redirect()->route('web_home')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }
    /** End */
}