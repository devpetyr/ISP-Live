<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Haf\
{
    HafSchoolInformationModel,
    HafPetInformationModel,
    HafPersonalInformationModel,
    HafPartnerInformationModel,
    HafEmergencyInformationModel,
    HafChildInformationModel,
    HafBasicInformationModel,
    HafAdultInformationModel
};

use App\Models\User;
use App\Models\StateModel;
use App\Models\CityModel;
use Illuminate\Support\Facades\Auth;
use File;

class WebHostApplicationController extends Controller
{
    public function host_application_form()
    {
        $hostInformation=HafBasicInformationModel::with('getState','getCity')->where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        // dd($hostInformation);
        $partnerInformation=HafPartnerInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $adultInformation=HafAdultInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $childInformation=HafChildInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $petInformation=HafPetInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $schoolInformation=HafSchoolInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $personalInformation=HafPersonalInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $emergencyInformation=HafEmergencyInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        $states = StateModel::all();
        $citys = CityModel::all();
        return view('host.application-form.application-form',compact('hostInformation','partnerInformation','adultInformation','childInformation','petInformation','schoolInformation','personalInformation','emergencyInformation','states','citys'));
    }

    public function host_information_application(Request $request)
    {
        // dd($request);
        $request->validate([
            'host_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_dob'=>'required|date_format:Y-m-d|before:tomorrow|before:-13 years',
            'host_cell_phone'=>'required|not_regex:/[a-z]/ ',
            'host_email'=>'required|email',
            'host_occupation'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_employer'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_work_phone'=>'required|not_regex:/[a-z]/ ',
            'host_home_address'=>'required',
            'host_city'=>'required',
            'host_state'=>'required',

        ],
            [
                'host_first_name.required'=>'The first name field is required.',
                'host_last_name.required'=>'The last name field is required.',
                'host_dob.required'=>'The date of birth field is required.',
                'host_dob.before'=>'The host date of birth must be a date before -13 years.',
                'host_cell_phone.required'=>'The cell phone field is required.',
                'host_cell_phone.not_regex'=>'The cell phone field formate is invalid.',
                'host_email.required'=>'The email field is required.',
                'host_email.email'=>'The emergency contact email must be a valid email address.',
                'host_occupation.required'=>'The occupation field is required.',
                'host_employer.required'=>'The employer field is required.',
                'host_work_phone.required'=>'The work phone field is required.',
                'host_work_phone.not_regex'=>'The work phone field formate is invalid.',
                'host_home_address.required'=>'The home address field is required.',
                'host_city.required'=>'The city field is required.',
                'host_state.required'=>'The state field is required.',

            ]);

        $hostInformation=HafBasicInformationModel::where('user_id',Auth::user()->id)->first();
        if($hostInformation)
        {
            $message="Host Form Updated Sucessfully";
        }
        else
        {
            $request->validate([
                'host_profile_photo'=>'required|mimes:jpg,bmp,png|max:5120',

            ],
            [

                'host_profile_photo.required'=>'The host image is required.',

            ]);
            $hostInformation=new HafBasicInformationModel;
            $hostInformation->user_id=Auth::user()->id;
            $message="Host Form Submited Sucessfully";
        }
        
        
        $hostInformation->first_name=$request->host_first_name;
            $hostInformation->last_name=$request->host_last_name;
            $hostInformation->dob=$request->host_dob;
            $hostInformation->cell_phone=$request->host_cell_phone;
            $hostInformation->email=$request->host_email;
            $hostInformation->occupation=$request->host_occupation;
            $hostInformation->employer=$request->host_employer;
            $hostInformation->work_phone=$request->host_work_phone;
            $hostInformation->home_address=$request->host_home_address;
            $hostInformation->city_id=$request->host_city;
            $hostInformation->state_id=$request->host_state;

            if($request->file('host_profile_photo')){
                $user = User::where('id', Auth::user()->id)->first();
                $dest='Host-Image/'.$hostInformation->profile_photo;
                File::delete($dest);
//                $hostInformation->delete();

                $file= $request->file('host_profile_photo');
                $filename= time().rand(9999,9999).'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('Host-Image'), $filename);
                $hostInformation->profile_photo= $filename;

                /** Checking Image if exits in our project */
                if(File::exists(public_path('Host-Image' . $user->avatar)))
                {
                    File::delete(public_path('Host-Image' . $user->avatar));
                }

                $user->avatar = $filename;
                $user->save();
            }

            $hostInformation->save();
        return redirect()->route('web_haf','#partner_application')->with('success',$message);
    }

    public function host_partner_application(Request $request)
    {
        $request->validate([

            'partner_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_dob'=>'required|date_format:Y-m-d|before:tomorrow|before:-13 years',
            'partner_cell_phone'=>'required|not_regex:/[a-z]/ ',
            'partner_email'=>'required|email',
            'partner_occupation'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_employer'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_work_phone'=>'required|not_regex:/[a-z]/',

        ],
            [
                'partner_first_name.required'=>'The first name field is required.',
                'partner_last_name.required'=>'The last name field is required.',
                'partner_dob.required'=>'The date of birth field is required.',
                'partner_dob.before'=>'The partner date of birth must be a date before -13 years.',
                'partner_cell_phone.required'=>'The cell phone field is required.',
                'partner_cell_phone.not_regex'=>'The cell phone field formate is invalid.',
                'partner_email.required'=>'The email field is required.',
                'partner_occupation.required'=>'The occupation field is required.',
                'partner_employer.required'=>'The employer field is required.',
                'partner_work_phone.required'=>'The work phone field is required.',
                'partner_work_phone.not_regex'=>'The work phone field formate is invalid.',


            ]);

        $partnerInformation=HafPartnerInformationModel::where('user_id',Auth::user()->id)->first();
        if($partnerInformation)
        {
            $partnerInformation->first_name=$request->partner_first_name;
            $partnerInformation->last_name=$request->partner_last_name;
            $partnerInformation->dob=$request->partner_dob;
            $partnerInformation->cell_phone=$request->partner_cell_phone;
            $partnerInformation->email=$request->partner_email;
            $partnerInformation->occupation=$request->partner_occupation;
            $partnerInformation->employer=$request->partner_employer;
            $partnerInformation->work_phone=$request->partner_work_phone;
            $partnerInformation->save();

            $message="Partner Form Updated Sucessfully";
        }
        else
        {
            $partnerInformation=new HafPartnerInformationModel;
            $partnerInformation->user_id=Auth::user()->id;
            
            $partnerInformation->first_name=$request->partner_first_name;
            $partnerInformation->last_name=$request->partner_last_name;
            $partnerInformation->dob=$request->partner_dob;
            $partnerInformation->cell_phone=$request->partner_cell_phone;
            $partnerInformation->email=$request->partner_email;
            $partnerInformation->occupation=$request->partner_occupation;
            $partnerInformation->employer=$request->partner_employer;
            $partnerInformation->work_phone=$request->partner_work_phone;
            $partnerInformation->save();

            $message="Partner Form Submited Sucessfully";
        }
        return redirect()->route('web_haf','#adult_application')->with('success','Partner Form Submited Sucessfully');

    }

    public function host_adult_application(Request $request)
    {
        $request->validate([

            'adult1_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_work_phone'=>'required|not_regex:/[a-z]/',
            'adult1_relation'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_occupation'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_employer'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_gender'=>'required|regex:/^[\pL\s\-]+$/u',

        ],
            [

                'adult1_first_name.required'=>'The first name field is required.',
                'adult1_first_name.regex'=>'The first name format is invalid.',
                'adult1_last_name.required'=>'The last name field is required.',
                'adult1_last_name.regex'=>'The last name format is invalid.',
                'adult1_work_phone.required'=>'The work phone field is required.',
                'adult1_work_phone.not_regex'=>'The work phone field formate is invalid.',
                'adult1_relation.required'=>'The relation field is required.',
                'adult1_relation.regex'=>'The relation format is invalid.',
                'adult1_occupation.required'=>'The occupation field is required.',
                'adult1_occupation.regex'=>'The occupation format is invalid.',
                'adult1_employer.required'=>'The employer field is required.',
                'adult1_employer.regex'=>'The employer format is invalid.',
                'adult1_gender.required'=>'Please select your gender.',

            ]);


        $adultInformation=HafAdultInformationModel::where('user_id',Auth::user()->id)->first();

        if($adultInformation)
        {
            $adultInformation->first_name1=$request->adult1_first_name;
            $adultInformation->last_name1=$request->adult1_last_name;
            $adultInformation->work_phone1=$request->adult1_work_phone;
            $adultInformation->relation1=$request->adult1_relation;
            $adultInformation->occupation1=$request->adult1_occupation;
            $adultInformation->employer1=$request->adult1_employer;
            $adultInformation->gender1=$request->adult1_gender;

            $adultInformation->first_name2=$request->adult2_first_name;
            $adultInformation->last_name2=$request->adult2_last_name;
            $adultInformation->work_phone2=$request->adult2_work_phone;
            $adultInformation->relation2=$request->adult2_relation;
            $adultInformation->occupation2=$request->adult2_occupation;
            $adultInformation->employer2=$request->adult2_employer;
            $adultInformation->gender2=$request->adult2_gender;

            $adultInformation->save();

            $message="Adult Form Updated Sucessfully";
        }
        else
        {
            $adultInformation=new HafAdultInformationModel;
            $adultInformation->user_id=Auth::user()->id;
            $adultInformation->first_name1=$request->adult1_first_name;
            $adultInformation->last_name1=$request->adult1_last_name;
            $adultInformation->work_phone1=$request->adult1_work_phone;
            $adultInformation->relation1=$request->adult1_relation;
            $adultInformation->occupation1=$request->adult1_occupation;
            $adultInformation->employer1=$request->adult1_employer;
            $adultInformation->gender1=$request->adult1_gender;

            $adultInformation->first_name2=$request->adult2_first_name;
            $adultInformation->last_name2=$request->adult2_last_name;
            $adultInformation->work_phone2=$request->adult2_work_phone;
            $adultInformation->relation2=$request->adult2_relation;
            $adultInformation->occupation2=$request->adult2_occupation;
            $adultInformation->employer2=$request->adult2_employer;
            $adultInformation->gender2=$request->adult2_gender;

            $adultInformation->save();

            $message="Adult Form Submited Sucessfully";
        }
        return redirect()->route('web_haf','#childs_application')->with('success',$message);
    }

    public function host_childs_application(Request $request)
    {
        $request->validate([

            'child1_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'child1_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'child1_dob'=>'required|date_format:Y-m-d|before:tomorrow',
            'child1_gender'=>'required|regex:/^[\pL\s\-]+$/u',
        ],
            [
                'child1_first_name.required'=>'The first name field is required.',
                'child1_first_name.regex'=>'The first name format is invalid.',
                'child1_last_name.required'=>'The last name field is required.',
                'child1_last_name.regex'=>'The last name format is invalid.',
                'child1_dob.required'=>'The date of birth field is required.',
                'child1_dob.before'=>'The date of birth must be a date before today.',
                'child1_gender.required'=>'The gender field is required.',

            ]);

        $childInformation=HafChildInformationModel::where('user_id',Auth::user()->id)->first();
        if($childInformation)
        {
            $childInformation->first_name1=$request->child1_first_name;
            $childInformation->last_name1=$request->child1_last_name;
            $childInformation->dob1=$request->child1_dob;
            $childInformation->gender1=$request->child1_gender;

            $childInformation->first_name2=$request->child2_first_name;
            $childInformation->last_name2=$request->child2_last_name;
            $childInformation->dob2=$request->child2_dob;
            $childInformation->gender2=$request->child2_gender;

            $childInformation->first_name3=$request->child3_first_name;
            $childInformation->last_name3=$request->child3_last_name;
            $childInformation->dob3=$request->child3_dob;
            $childInformation->gender3=$request->child3_gender;

            $childInformation->save();

            $message="Child Form Updated Sucessfully";
        }
        else
        {
            $childInformation=new HafChildInformationModel;
            $childInformation->user_id=Auth::user()->id;

            $childInformation->first_name1=$request->child1_first_name;
            $childInformation->last_name1=$request->child1_last_name;
            $childInformation->dob1=$request->child1_dob;
            $childInformation->gender1=$request->child1_gender;

            $childInformation->first_name2=$request->child2_first_name;
            $childInformation->last_name2=$request->child2_last_name;
            $childInformation->dob2=$request->child2_dob;
            $childInformation->gender2=$request->child2_gender;

            $childInformation->first_name3=$request->child3_first_name;
            $childInformation->last_name3=$request->child3_last_name;
            $childInformation->dob3=$request->child3_dob;
            $childInformation->gender3=$request->child3_gender;

            $childInformation->save();

            $message="Child Form Submited Sucessfully";
        }
        return redirect()->route('web_haf','#pets_house_student_school_application')->with('success',$message);
    }

    public function host_pets_house_student_school_application(Request $request)
    {
        $request->validate([

            'pets_info'=>'required',
            'pets_info_detail'=>'required_if:pets_info,yes',

            'home_type'=>'required',
            'home_bedrooms_detail'=>'required',
            'student_gender'=>'required',
            'student_meal'=>'required',

            'first_school_detail'=>'required',

        ],
            [
                'pets_info.required'=>'The pets info is required.',
                'pets_info_detail.required'=>'The pets info is required.',

                'home_type.required'=>'The home type is required.',
                'home_bedrooms_detail.required'=>'The bedrooms detail is required.',

                'student_gender.required'=>'The gender is required.',
                'student_meal.required'=>'The meal detail is required.',

                'first_school_detail.required'=>'The school detail is required.',


            ]);


        $petsInformation=HafPetInformationModel::where('user_id',Auth::user()->id)->first();
        if($petsInformation)
        {

            $petsInformation->pets_info=$request->pets_info;
            $petsInformation->pets_info_detail=$request->pets_info_detail;
            $petsInformation->save();
            $houseStudentSchoolInformation=HafSchoolInformationModel::where('user_id',Auth::user()->id)->first();
            if($houseStudentSchoolInformation){
                $houseStudentSchoolInformation=new HafSchoolInformationModel;
                $houseStudentSchoolInformation->user_id=Auth::user()->id;

                $houseStudentSchoolInformation->home_type=$request->home_type;
                $houseStudentSchoolInformation->home_bedrooms_detail=$request->home_bedrooms_detail;

                $houseStudentSchoolInformation->student_gender=$request->student_gender;
                $houseStudentSchoolInformation->student_meal=$request->student_meal;

                $houseStudentSchoolInformation->first_school_detail=$request->first_school_detail;
                $houseStudentSchoolInformation->second_school_detail=$request->second_school_detail;
                $houseStudentSchoolInformation->third_school_detail=$request->third_school_detail;

                $houseStudentSchoolInformation->save();
            }
            $message="Details Updated Sucessfully";
        }
        else
        {
            $petsInformation=new HafPetInformationModel;
            $petsInformation->user_id=Auth::user()->id;

            $petsInformation->pets_info=$request->pets_info;
            $petsInformation->pets_info_detail=$request->pets_info_detail;
            $petsInformation->save();

            $houseStudentSchoolInformation=new HafSchoolInformationModel;
            $houseStudentSchoolInformation->user_id=Auth::user()->id;

            $houseStudentSchoolInformation->home_type=$request->home_type;
            $houseStudentSchoolInformation->home_bedrooms_detail=$request->home_bedrooms_detail;

            $houseStudentSchoolInformation->student_gender=$request->student_gender;
            $houseStudentSchoolInformation->student_meal=$request->student_meal;

            $houseStudentSchoolInformation->first_school_detail=$request->first_school_detail;
            $houseStudentSchoolInformation->second_school_detail=$request->second_school_detail;
            $houseStudentSchoolInformation->third_school_detail=$request->third_school_detail;

            $houseStudentSchoolInformation->save();
            $message="Details Submited Sucessfully";
        }
        return redirect()->route('web_haf','#personal_detail_application')->with('success',$message);
    }

    public function host_personal_detail_application(Request $request)
    {
        $request->validate([


            'anyone_residing_in_the_home'=>'required',
            'criminal_background_check'=>'required',
            'anyone_in_your_home_smoke'=>'required',
            'high_speed_wireless_Internet'=>'required',
            'WHO_approved_COVID_Vaccine'=>'required',
            'family_interests'=>'required',
            'breakfast_food_available_and_prepare_dinner'=>'required',
            'your_daily_and_weekly_activities'=>'required',

        ],
            [
                'anyone_residing_in_the_home.required'=>'The field is required.',
                'criminal_background_check.required'=>'The field is required.',
                'anyone_in_your_home_smoke.required'=>'The field is required.',
                'high_speed_wireless_Internet.required'=>'The field is required.',
                'WHO_approved_COVID_Vaccine.required'=>'The field is required.',
                'family_interests.required'=>'The family interests field is required.',
                'breakfast_food_available_and_prepare_dinner.required'=>'The field is required.',
                'your_daily_and_weekly_activities.required'=>'The field is required.',

            ]);

        $personalInformation=HafPersonalInformationModel::where('user_id',Auth::user()->id)->first();
        if($personalInformation)
        {
            $personalInformation->anyone_residing_in_the_home=$request->anyone_residing_in_the_home;
            $personalInformation->criminal_background_check=$request->criminal_background_check;
            $personalInformation->anyone_in_your_home_smoke=$request->anyone_in_your_home_smoke;
            $personalInformation->high_speed_wireless_Internet=$request->high_speed_wireless_Internet;

            $personalInformation->WHO_approved_COVID_Vaccine=$request->WHO_approved_COVID_Vaccine;
            $personalInformation->family_interests=$request->family_interests;
            $personalInformation->breakfast_food_available_and_prepare_dinner=$request->breakfast_food_available_and_prepare_dinner;
            $personalInformation->your_daily_and_weekly_activities=$request->your_daily_and_weekly_activities;

            $personalInformation->save();

            $message = "Personal Information Form Updated Sucessfully";
        }
        else
        {
            $personalInformation=new HafPersonalInformationModel;
            $personalInformation->user_id=Auth::user()->id;

            $personalInformation->anyone_residing_in_the_home=$request->anyone_residing_in_the_home;
            $personalInformation->criminal_background_check=$request->criminal_background_check;
            $personalInformation->anyone_in_your_home_smoke=$request->anyone_in_your_home_smoke;
            $personalInformation->high_speed_wireless_Internet=$request->high_speed_wireless_Internet;

            $personalInformation->WHO_approved_COVID_Vaccine=$request->WHO_approved_COVID_Vaccine;
            $personalInformation->family_interests=$request->family_interests;
            $personalInformation->breakfast_food_available_and_prepare_dinner=$request->breakfast_food_available_and_prepare_dinner;
            $personalInformation->your_daily_and_weekly_activities=$request->your_daily_and_weekly_activities;

            $personalInformation->save();

            $message="Personal Information Form Submited Sucessfully";
        }
        return redirect()->route('web_haf','#emergency_contact_application')->with('success',$message);
    }

    public function host_emergency_contact_application(Request $request)
    {

        $hostInformation=HafBasicInformationModel::where('user_id',Auth::user()->id)->first();
        $partnerInformation=HafPartnerInformationModel::where('user_id',Auth::user()->id)->first();
        $adultInformation=HafAdultInformationModel::where('user_id',Auth::user()->id)->first();
        $childInformation=HafChildInformationModel::where('user_id',Auth::user()->id)->first();
        $petsInformation=HafPetInformationModel::where('user_id',Auth::user()->id)->first();
        $personalInformation=HafPersonalInformationModel::where('user_id',Auth::user()->id)->first();

        if(!$hostInformation)
        {
            return redirect()->route('web_haf','#information_application')->with('error','Please fill out the form');
        }
        if(!$partnerInformation)
        {
            return redirect()->route('web_haf','#partner_application')->with('error','Please fill out the form');
        }
        if(!$adultInformation)
        {
            return redirect()->route('web_haf','#adult_application')->with('error','Please fill out the form');
        }
        if(!$childInformation)
        {
            return redirect()->route('web_haf','#childs_application')->with('error','Please fill out the form');
        }
        if(!$petsInformation)
        {
            return redirect()->route('web_haf','#pets_house_student_school_application')->with('error','Please fill out the form');
        }
        if(!$personalInformation)
        {
            return redirect()->route('web_haf','#personal_detail_application')->with('error','Please fill out the form');
        }
        $request->validate([

            'emergency_contact_name1'=>'required|regex:/^[\pL\s\-]+$/u',
            'emergency_contact_email1'=>'required|email',
            'emergency_contact_number1'=>'required|not_regex:/[a-z]/',
            'emergency_contact_name2'=>'required|regex:/^[\pL\s\-]+$/u',
            'emergency_contact_email2'=>'required|email',
            'emergency_contact_number2'=>'required|not_regex:/[a-z]/ ',

        ],
            [

                'emergency_contact_name1.required'=>'The name field is required.',
                'emergency_contact_name1.regex'=>'The emergency contact name format is invalid.',
                'emergency_contact_email1.required'=>'The email field is required.',
                'emergency_contact_email1.email'=>'The emergency contact email must be a valid email address.',
                'emergency_contact_number1.required'=>'The number field is required.',
                'emergency_contact_number1.not_regex'=>'The emergency contact number format is invalid.',

                'emergency_contact_name2.required'=>'The name field is required.',
                'emergency_contact_name2.regex'=>'The emergency contact name format is invalid.',
                'emergency_contact_email2.required'=>'The email field is required.',
                'emergency_contact_email2.email'=>'The emergency contact email must be a valid email address.',
                'emergency_contact_number2.required'=>'The number field is required.',
                'emergency_contact_number2.not_regex'=>'The emergency contact number format is invalid.',

            ]);

        $emergencyContactInformation=HafEmergencyInformationModel::where('user_id',Auth::user()->id)->orderby('id','DESC')->first();
        if($emergencyContactInformation)
        {
            $emergencyContactInformation->name1=$request->emergency_contact_name1;
            $emergencyContactInformation->email1=$request->emergency_contact_email1;
            $emergencyContactInformation->number1=$request->emergency_contact_number1;

            $emergencyContactInformation->name2=$request->emergency_contact_name2;
            $emergencyContactInformation->email2=$request->emergency_contact_email2;
            $emergencyContactInformation->number2=$request->emergency_contact_number2;

            $emergencyContactInformation->save();

            $user=User::where('id', Auth::user()->id)->first();
            $user->application_submitted=1;
            $user->save();

            $message="Emergency Contact Form Updated Sucessfully";
        }
        else
        {
            $emergencyContactInformation=new HafEmergencyInformationModel;
            $emergencyContactInformation->user_id=Auth::user()->id;

            $emergencyContactInformation->name1=$request->emergency_contact_name1;
            $emergencyContactInformation->email1=$request->emergency_contact_email1;
            $emergencyContactInformation->number1=$request->emergency_contact_number1;

            $emergencyContactInformation->name2=$request->emergency_contact_name2;
            $emergencyContactInformation->email2=$request->emergency_contact_email2;
            $emergencyContactInformation->number2=$request->emergency_contact_number2;

            $emergencyContactInformation->save();

            $user=User::where('id', Auth::user()->id)->first();
            $user->application_submitted=1;
            $user->save();

            $message= "Emergency Contact Form Submited Sucessfully";
        }

        return redirect()->route('web_home')->with('success',$message);

    }
}
