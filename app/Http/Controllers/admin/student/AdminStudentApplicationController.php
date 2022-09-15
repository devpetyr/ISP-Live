<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

use Illuminate\Support\Facades\
{
    Auth,
    File,
    Schema,
    Validator
};
use App\Models\
{
    SafStudentBasicInformationModel,
    SafStudentInformationModel,
    SafAgentInformationModel,
    SafOtherInformationModel,
    SafMedicalInformationModel,
    SafAirportInformationModel,
    SafPaymentInformationModel,
    SafAgreementInformationModel,
    SafStatusModel,
    User
};


class AdminStudentApplicationController extends Controller
{
    public function saf_submit_1(Request $request, $user_id)
    {
        $bsc_details = SafStudentBasicInformationModel::where('user_id', $user_id)->first();
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section1')->withErrors($validator);
        }

        if ($bsc_details) {
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

            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }
        /** Main Form SafStudentBasicInformationModel Table 1 End*/


        if ($bsc_details->save()) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section1')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_2_1(Request $request, $user_id)
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section2-1')->withErrors($validator);

        }

        $std_details = SafStudentInformationModel::where('user_id', $user_id)->first();

        if ($std_details) {
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
            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }

        if ($std_details->save()) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section2-1')->with('success', $msg);

        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_2_2(Request $request, $user_id)
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section2-2')->withErrors($validator);
        }

        $std_details = SafStudentInformationModel::where('user_id', $user_id)->first();

        if ($std_details) {
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
            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }
        if ($std_details->save()) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section2-2')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_3(Request $request, $user_id)
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section3')->withErrors($validator);
        }

        $bsc_details = SafStudentBasicInformationModel::where('user_id', $user_id)->first();
        $agent_details = SafAgentInformationModel::where('user_id', $user_id)->first();

        if (!$bsc_details) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section1')->with('error', 'This form need to be completed');
        }

        /** SafAgentInformationModel Table 3 Start*/
        if ($request->using_agent == 'yes') {
            $bsc_details->using_agent = $request->using_agent;
            $bsc_details->save();
            if ($agent_details) {
                $agent_details->agency_name = $request->agency_name;
                $agent_details->agency_contact_person = $request->agency_contact_person;
                $agent_details->agent_phone_number = $request->agent_phone_number;
                $agent_details->agent_email = $request->agent_email;
                $agent_details->agent_wechat_number = $request->agent_wechat_number;
                $agent_details->agent_line_number = $request->agent_line_number;
                $agent_details->agent_whatsapp_number = $request->agent_whatsapp_number;
                $agent_details->status = 1;
                $agent_details->save();
                $msg = 'updated successfully.';
            } else {
                return redirect()->route('admin_student_applications')->with('error','No record found');
            }
        } else {

            $bsc_details->using_agent = $request->using_agent;
            $bsc_details->save();

            if ($agent_details) {
                $agent_details->delete();
            }
            $msg = 'updated successfully.';
        }
        /** SafAgentInformationModel Table 3 End*/

        if ($bsc_details->save()) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section3')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_4(Request $request, $user_id)
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section4')->withErrors($validator);
        }
        $other_details = SafOtherInformationModel::where('user_id', $user_id)->first();


        /** SafOtherInformationModel Table 4 Start*/
        if ($other_details) {
            $other_details->specific_needs = $request->specific_needs;
            $other_details->hobbies_and_interest = $request->hobbies_and_interest;
            $other_details->describe_your_personality = $request->describe_your_personality;
            $other_details->describe_your_family = $request->describe_your_family;
            $other_details->describe_your_travel_experience = $request->describe_your_travel_experience;
            $other_details->write_greeting_to_host = $request->write_greeting_to_host;
            $other_details->status = 1;
            $other_details->save();
            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }

        /** SafOtherInformationModel Table 4 End*/

        if ($other_details->save()) {

            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section4')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_5(Request $request, $user_id)
    {
        $medical_details = SafMedicalInformationModel::where('user_id', $user_id)->first();
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section5')->withErrors($validator);
        }


        /** SafMedicalInformationModel Table 5 Start*/
        if ($medical_details) {
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

            if($request->file('vaccine_card_photograph')){
                $file= $request->file('vaccine_card_photograph');
                $filename= time().rand(9999,9999).'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('student/application'), $filename);
                $medical_details->vaccine_card_photograph= $filename;
            }

            $medical_details->status = 1;
            $medical_details->save();
            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }

        /** SafMedicalInformationModel Table 5 End*/

        if ($medical_details->save()) {

            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section5')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_6(Request $request, $user_id)
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section6')->withErrors($validator);
        }

        $airport_details = SafAirportInformationModel::where('user_id', $user_id)->first();

        /** SafAirportInformationModel Table 6 Start */
        if ($airport_details) {
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
            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }
        /** SafAirportInformationModel Table 6 End */

        if ($airport_details->save()) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section6')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function saf_submit_7(Request $request, $user_id)
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
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section7')->withErrors($validator);
        }

        $payment_details = SafPaymentInformationModel::where('user_id', $user_id)->first();

        /** SafPaymentInformationModel Table 7 Start */
        if ($payment_details) {
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
            $msg = 'updated successfully.';
        } else {
            return redirect()->route('admin_student_applications')->with('error','No record found');
        }
        /** SafPaymentInformationModel Table 7 End */

        if ($payment_details->save()) {
            return redirect()->route('admin_view_student_application', $user_id .'/#Form-Section7')->with('success', $msg);
        } else {
            return back()->with('error', 'Please submit application again.');
        }
    }

    public function student_application_status(Request $request, $user_id)
    {
        dd('work in progress');
        $data = $request->validate([
            'application_status' => 'required',
            'amount' => 'required_if:application_status,==,1',
        ],
            [
                'amount.required_if' => 'The amount field is required',
            ]);

        /** Getting Application Record to update application status*/
        $std_application = SafStudentBasicInformationModel::where('user_id',$user_id)->first();

        /** Checking if application already rejected */
        if ($std_application->application_status == 2 && $request->application_status == 2) {
            return back()->with('error', 'Application already rejected');
        }
        /** Checking if application already approved */
        if ($std_application->application_status == 1 && $request->application_status == 1) {
            return back()->with('error', 'Application already approved');
        }

        /** Updating Application status */
        $std_application->application_status = $request->application_status;

        /** Directly Saving Model if admin rejected student application  */
        if ($request->application_status == 2) {
            /** Saving Student Application */
            $std_application->save();
        }


        /** Calling User Model to shoot student application approval email and for other usage */
        $userfind = User::where('id', $user_id)->where('user_role', 2)->first();


        /** Checking for both fields */
        if ($request->application_status == 1 && $request->amount) {

            /** Now we have to save fees amount in student application form fees model
             * to secure our payment amount and to check payment status
             */

            /** Calling model to check if student already paid his/her fees */
            $std_fees = StudentApplicationFormFeesModel::where('user_id', $std_application->user_id)->where('is_paid', 1)->first();

            /** If variable $std_fees not found / Student not paid his/her fees*/
            if (!$std_fees) {

                // /** Calling User Model to shoot student application approval email and for other usage */
                // $userfind = User::where('id', $std_application->user_id)->where('user_role', 2)->first();

                /** Calling Student Application Fees Model to store fees amount to that student */
                $std_fees = new StudentApplicationFormFeesModel();

                /** Adding Student Application Fees Model user id */
                $std_fees->user_id = $userfind->id;

                /** Adding Student Application Fees Model student fees amount */
                $std_fees->fees = $request->amount;

                /**
                 * Adding Student Application Fees Model is_paid
                 * equal to 0, So that student have to pay fees amount
                 */
                $std_fees->is_paid = 0;

                /** Saving Student Application Fees Model */
                $std_fees->save();

                /** Saving Student Application, which we have open at the start of the function */
                $std_application->save();

                /** After Saving Student Application approval shooting email to both student and admin */
                // $this->StdAppAccept_Reject($userfind,'Accepted');
                $this->GA_StdAppAccept_Reject($userfind->username, $userfind->email, 'Accepted');

                /** Checking process work correctly */
                if ($std_fees->save()) {

                    /** Shooting email to student for card payment (stripe implemented) */
                    // $this->StdAppStripe($userfind, $request->amount);
                    $this->GA_StdAppStripe($userfind->username, $userfind->email, $request->amount, route('web_stripe_form', $userfind->id));

                } else {
                    /** If process not work correctly */
                    return back()->with('error', 'please submit your request again');
                }
            } else {
                /** If variable $std_fees found Student already paid his/her fees*/
                return back()->with('error', 'Student already paid his/her fees.');
            }
        }

        /** At the end we to verify if student application status updated */
        if ($std_application->save()) {

            /** If admin reject student application*/
            if ($request->application_status == 2) {

                // $this->StdAppAccept_Reject($userfind,'Rejected');
                $this->GA_StdAppAccept_Reject($userfind->username, $userfind->email, 'Rejected');


                return back()->with('error', 'Student application rejected successfully !');
            }
            /** Now the process is complete returning back admin to application with the below message */
            return back()->with('success', 'Student application status updated');
        } else {

            /** If the process is incomplete returning back admin to application with the below message*/
            return back()->with('failed', 'Student application status update unsuccessful');
        }
    }
}
