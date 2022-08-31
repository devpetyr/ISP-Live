<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\AgentModel;
use App\Models\CityModel;
use App\Models\CountryModel;

//use App\Models\ProgramModel;
//use App\Models\AirportDetailsStdAppFormModel;
//use App\Models\CardholderDetailsStdAppFormModel;
//use App\Models\ImageStdAppFormModel;
//use App\Models\StudentApplicationFormModel;
//use App\Models\AgreementDetailsStdAppFormModel;
//use App\Models\EmergencyDetailsStdAppFormModel;
//use App\Models\SchoolDetailsStdAppFormModel;
//use App\Models\ElectronicFormStdAppFormModel;
//use App\Models\CreditCardDetailsStdAppFormModel;
//use App\Models\OtherDetailsStdAppFormModel;
//use App\Models\RequestedAgencyStdAppFormModel;
//use App\Models\FeeDetailsStdAppFormModel;
//use App\Models\StudentDetailsStdAppFormModel;

use App\Models\SafStudentBasicInformationModel;
use App\Models\SafStudentInformationModel;
use App\Models\SafAgentInformationModel;
use App\Models\SafOtherInformationModel;
use App\Models\SafMedicalInformationModel;
use App\Models\SafAirportInformationModel;
use App\Models\SafPaymentInformationModel;
use App\Models\SafAgreementInformationModel;

use App\Models\StateModel;
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

    /** New */
    public function new_application_form()
    {
        $agencies = AgentModel::where('status', 1)->get();
        return view('student.application-form.new-application-form', compact('agencies'));
    }

    public function new_application_form_submit(Request $request)
    {

        $request->validate([

//           Student Basic information
            "program" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "dob" => "required",
            "age" => "required",
            "gender" => "required",
            "country_of_permanent_residence" => "required",
            "passport_number" => "required",
            "passport_exp" => "required",
            "student_profile_photo" => "required",

            // Using Agent
            "using_agent" => "required",

            // Application Form Terms And Condition accepting
            "agree" => "required",

//            Student Information
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

//            Agent Information

            "agency_name" => "required_if:using_agent,yes",
//            "agency_name_not_on_the_list" => "required",
            "agency_contact_person" => "required_if:using_agent,yes",
            "agent_phone_number" => "required_if:using_agent,yes",
            "agent_email" => "required_if:using_agent,yes",
            "agent_wechat_number" => "required_if:using_agent,yes",
            "agent_line_number" => "required_if:using_agent,yes",
            "agent_whatsapp_number" => "required_if:using_agent,yes",

//            Other Information
            "specific_needs" => "required",
            "hobbies_and_interest" => "required",
            "describe_your_personality" => "required",
            "describe_your_family" => "required",
            "describe_your_travel_experience" => "required",
            "write_greeting_to_host" => "required",

//            Medical Information
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

//            Airport Information
            "request_for_airport_pickup_driver" => "required",
            "number_of_people_needing_driver" => "required_if:request_for_airport_pickup_driver,yes",
            "arrival_date" => "required",
            "airport_arrival_time" => "required",
            "flight_type" => "required",
            "arrival_airport" => "required",
            "arrival_airline" => "required",
            "arrival_flight_number" => "required",

//            Payment Information
            "payment_method" => "required",
//            "card_holder_student_first_name" => "required",
//            "card_holder_student_last_name" => "required",
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
            "placement_fee" => "required",
            "late_fee" => "required",
            "deposit_fee" => "required",
            "airport_pickup_fee" => "required",

//            Agreement Information
            "fees_agreement" => "required",
            "contract_period_agreement" => "required",
            "payments_agreement" => "required",
            "deposit_agreement" => "required",
            "meal_plans_agreement" => "required",
            "student_faq_sheet_agreement" => "required",
            "airport_pickup_agreement" => "required",
            "transportation_agreement" => "required",
            "host_possessions_agreement" => "required",
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


        ], [
            'if_yes_please_indicate_animal.required_if' => 'Please indicate animal',
            'agency_name.required_if' => 'Agency name field is required',
            'agency_contact_person.required_if' => 'Agency contact person field is required',
            'agent_phone_number.required_if' => 'Agent phone number field is required',
            'agent_email.required_if' => 'Agent email field is required',
            'agent_wechat_number.required_if' => 'Agent wechat number field is required',
            'agent_line_number.required_if' => 'Agent line number field is required',
            'agent_whatsapp_number.required_if' => 'Agent whatsapp number field is required',
            'if_no_please_explain_health.required_if' => 'Please explain health field is required',
            'if_yes_please_explain_medical_allergies.required_if' => 'Please explain medical allergies field is required',
            'if_yes_please_explain_medication.required_if' => 'Please explain medication field is required',
            'if_yes_please_explain_reason_of_psychiatrist.required_if' => 'Please explain reason of psychiatrist field is required',
            'number_of_people_needing_driver.required_if' => 'Number of people needing driver field is required',
        ]);

        $user = User::where('id', Auth::user()->id)->where('application_submitted', 1)->first();
        if ($user) {
            return redirect()->route('login')->with('failed', 'Your application already submitted please wait for admin approval !');
        } else {
            if ($request->agree !== "yes") {
                return back()->with('error', 'Please Agree Form');
            }


            /** Main Form SafStudentBasicInformationModel Table 1 Start*/
            $bsc_details = new SafStudentBasicInformationModel();
            $bsc_details->user_id = Auth()->user()->id;
            $bsc_details->program = $request->program;
            $bsc_details->first_name = $request->first_name;
            $bsc_details->last_name = $request->last_name;
            $bsc_details->dob = $request->dob;
            $bsc_details->age = $request->age;
            $bsc_details->gender = $request->gender;
            $bsc_details->country_of_permanent_residence = $request->country_of_permanent_residence;
            $bsc_details->passport_number = $request->passport_number;
            $bsc_details->passport_exp = $request->passport_exp;
            $bsc_details->agree = $request->agree;
            $bsc_details->using_agent = $request->using_agent;


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
            }
            /** student_photographs end*/

            /** Store image for Student Profile Photo */
            $bsc_details->student_profile_photo = $filename;

            $bsc_details->status = 1;
            $bsc_details->save();
            /** Main Form SafStudentBasicInformationModel Table 1 End*/

            if ($bsc_details->save()) {
                /** SafStudentInformationModel Table 2 Start*/
                $std_details = new SafStudentInformationModel ();
                $std_details->saf_id = $bsc_details->id;
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

                /** SafStudentInformationModel Table 2 End*/

                /** SafAgentInformationModel Table 3 Start*/
                if ($request->using_agent == 'yes') {
                    $agent_details = new SafAgentInformationModel();
                    $agent_details->saf_id = $bsc_details->id;
                    $agent_details->agency_name = $request->agency_name;
                    $agent_details->agency_contact_person = $request->agency_contact_person;
                    $agent_details->agent_phone_number = $request->agent_phone_number;
                    $agent_details->agent_email = $request->agent_email;
                    $agent_details->agent_wechat_number = $request->agent_wechat_number;
                    $agent_details->agent_line_number = $request->agent_line_number;
                    $agent_details->agent_whatsapp_number = $request->agent_whatsapp_number;
                    $agent_details->status = 1;
                    $agent_details->save();

                }
                /** SafAgentInformationModel Table 3 End*/

                /** SafOtherInformationModel Table 4 Start*/
                $other_details = new SafOtherInformationModel();
                $other_details->saf_id = $bsc_details->id;
                $other_details->specific_needs = $request->specific_needs;
                $other_details->hobbies_and_interest = $request->hobbies_and_interest;
                $other_details->describe_your_personality = $request->describe_your_personality;
                $other_details->describe_your_family = $request->describe_your_family;
                $other_details->describe_your_travel_experience = $request->describe_your_travel_experience;
                $other_details->write_greeting_to_host = $request->write_greeting_to_host;
                $other_details->status = 1;
                $other_details->save();

                /** SafOtherInformationModel Table 4 End*/

                /** SafMedicalInformationModel Table 5 Start*/
                $medical_details = new SafMedicalInformationModel();
                $medical_details->saf_id = $bsc_details->id;
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
                $medical_details->save();

                /** SafMedicalInformationModel Table 5 End*/

                /** SafAirportInformationModel Table 6 Start */
                $airport_details = new SafAirportInformationModel();
                $airport_details->saf_id = $bsc_details->id;
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
                /** SafAirportInformationModel Table 6 End*/

                /** SafPaymentInformationModel Table 7 Start */
                $payment_details = new SafPaymentInformationModel();
                $payment_details->saf_id = $bsc_details->id;
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

                /** SafAgreementInformationModel Table 8 Start*/
                $agreement_details = new SafAgreementInformationModel();
                $agreement_details->saf_id = $bsc_details->id;
                $agreement_details->fees_agreement = $request->fees_agreement;
                $agreement_details->contract_period_agreement = $request->contract_period_agreement;
                $agreement_details->payments_agreement = $request->payments_agreement;
                $agreement_details->deposit_agreement = $request->deposit_agreement;
                $agreement_details->meal_plans_agreement = $request->meal_plans_agreement;
                $agreement_details->student_faq_sheet_agreement = $request->student_faq_sheet_agreement;
                $agreement_details->airport_pickup_agreement = $request->airport_pickup_agreement;
                $agreement_details->transportation_agreement = $request->transportation_agreement;
                $agreement_details->host_possessions_agreement = $request->host_possessions_agreement;
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
            } else {
                return back()->with('error', 'Please submit application again.');
            }

            if (!$std_details->save() || !$agent_details->save() || !$other_details->save() || !$medical_details->save() || !$airport_details->save() || !$payment_details->save() || !$agreement_details->save()) {
                dd(!$std_details->save(), !$agent_details->save(), !$other_details->save(), !$medical_details->save(), !$airport_details->save(), !$payment_details->save(), !$agreement_details->save());
            }

            if ($bsc_details->save()) {
                $user = User::where('id', Auth::user()->id)->where('status', 1)->first();
                $user->application_submitted = 1;
                $user->save();
                return redirect()->route('web_home')->with('success', 'Student application form submitted successfully, Please wait for admin approval');
            } else {
                return back()->with('error', 'Student application form submission unsuccessfully');
            }
        }
    }

    /** End */
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
        $data = $request->validate([
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
            // if ($request->gender == "Other") {
            //     $std_details->gender = $request->gender;
            //     $std_details->other_gender = $request->other_gender;
            // }
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
                $user = User::where('id', Auth::user()->id)->where('status', 1)->first();
                $user->application_submitted = 1;
                $user->save();
                return redirect()->route('web_home')->with('success', 'Student application form submitted successfully, Please wait for admin approval');
            } else {
                return back()->with('error', 'Student application form submission unsuccessfully');
            }
        }
    }
}