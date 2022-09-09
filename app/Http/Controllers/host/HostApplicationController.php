<?php

namespace App\Http\Controllers\host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HafSchoolInformationModel;
use App\Models\HafPetInformationModel;
use App\Models\HafPersonalInformationModel;
use App\Models\HafPartnerInformationModel;
use App\Models\HafEmergencyInformationModel;
use App\Models\HafChildInformationModel;
use App\Models\HafBasicInformation;
use App\Models\HafAdultInformationModel;

class HostApplicationController extends Controller
{
    public function host_information_application(Request $request)
    {
        $request->validate([
            'host_first_name'=>'required',
            'host_last_name'=>'required',
            'host_dob'=>'required',
            'host_cell_phone'=>'required',
            'host_email'=>'required',
            'host_occupation'=>'required',
            'host_employer'=>'required',
            'host_work_phone'=>'required',
            'host_home_address'=>'required',
            'host_profile_photo'=>'required',
           
            ],
            [
                'host_first_name.required'=>'The first name field is required.',
                'host_last_name.required'=>'The last name field is required.',
                'host_dob.required'=>'The date of birth field is required.',
                'host_cell_phone.required'=>'The cell phone field is required.',
                'host_email.required'=>'The email field is required.',
                'host_occupation.required'=>'The occupation field is required.',
                'host_employer.required'=>'The employer field is required.',
                'host_work_phone.required'=>'The work phone field is required.',
                'host_home_address.required'=>'The home address field is required.',
                'host_profile_photo.required'=>'The profile photo is required.',
             
                ]);
    
        dd($request);
    }
    
     public function host_partner_application(Request $request)
    {
        $request->validate([
          
            'partner_first_name'=>'required',
            'partner_last_name'=>'required',
            'partner_dob'=>'required',
            'partner_cell_phone'=>'required',
            'partner_email'=>'required',
            'partner_occupation'=>'required',
            'partner_employer'=>'required',
            'partner_work_phone'=>'required',
         
            ],
            [
                'partner_first_name.required'=>'The first name field is required.',
                'partner_last_name.required'=>'The last name field is required.',
                'partner_dob.required'=>'The date of birth field is required.',
                'partner_cell_phone.required'=>'The cell phone field is required.',
                'partner_email.required'=>'The email field is required.',
                'partner_occupation.required'=>'The occupation field is required.',
                'partner_employer.required'=>'The employer field is required.',
                'partner_work_phone.required'=>'The work phone field is required.',
                
            
                ]);
    
        dd($request);
    }
    
     public function host_adult_application(Request $request)
    {
        $request->validate([
          
            'adult1_first_name'=>'required',
            'adult1_last_name'=>'required',
            'adult1_work_phone'=>'required',
            'adult1_relation'=>'required',
            'adult1_occupation'=>'required',
            'adult1_employer'=>'required',
            'adult1_gender'=>'required',
            
            'adult2_first_name'=>'required',
            'adult2_last_name'=>'required',
            'adult2_work_phone'=>'required',
            'adult2_relation'=>'required',
            'adult2_occupation'=>'required',
            'adult2_employer'=>'required',
            'adult2_gender'=>'required',
            
  
            
            ],
            [
  
                'adult1_first_name.required'=>'The first name field is required.',
                'adult1_last_name.required'=>'The last name field is required.',
                'adult1_work_phone.required'=>'The work phone field is required.',
                'adult1_relation.required'=>'The relation field is required.',
                'adult1_occupation.required'=>'The occupation field is required.',
                'adult1_employer.required'=>'The employe field is required.',
                'adult1_gender.required'=>'The gender field is required.',
                
                'adult2_first_name.required'=>'The first name field is required.',
                'adult2_last_name.required'=>'The first name field is required.',
                'adult2_work_phone.required'=>'The work phone field is required.',
                'adult2_relation.required'=>'The relation field is required.',
                'adult2_occupation.required'=>'The occupation field is required.',
                'adult2_employer.required'=>'The employe field is required.',
                'adult2_gender.required'=>'The gender field is required.',
                
                ]);
    
        dd($request);
    }
    
     public function host_childs_application(Request $request)
    {
        $request->validate([

            'child1_first_name'=>'required',
            'child1_last_name'=>'required',
            'child1_dob'=>'required',
            'child1_gender'=>'required',
            
            'child2_first_name'=>'required',
            'child2_last_name'=>'required',
            'child2_dob'=>'required',
            'child2_gender'=>'required',
            
            'child3_first_name'=>'required',
            'child3_last_name'=>'required',
            'child3_dob'=>'required',
            'child3_gender'=>'required',
      
            ],
            [
                'child1_first_name.required'=>'The first name field is required.',
                'child1_last_name.required'=>'The last name field is required.',
                'child1_dob.required'=>'The date of birth field is required.',
                'child1_gender.required'=>'The gender field is required.',
                
                'child2_first_name.required'=>'The first name field is required.',
                'child2_last_name.required'=>'The last name field is required.',
                'child2_dob.required'=>'The date of birth field is required.',
                'child2_gender.required'=>'The gender field is required.',
                
                'child3_first_name.required'=>'The first name field is required.',
                'child3_last_name.required'=>'The last name field is required.',
                'child3_dob.required'=>'The date of birth field is required.',
                'child3_gender.required'=>'The gender field is required.',
                
                ]);
    
        dd($request);
    }
    
     public function host_pets_house_student_school_application(Request $request)
    {
        $request->validate([
          
            'pets_info'=>'required',
            'pets_info_detail'=>'required',
            'home_type'=>'required',
            'home_bedrooms_detail'=>'required',
            'student_gender'=>'required',
            'student_meal'=>'required',
            
            'first_school_detail'=>'required',
            'second_school_detail'=>'required',
            'third_school_detail'=>'required',
            
            ],
            [
                'pets_info.required'=>'The pets info field is required.',
                'pets_info_detail.required'=>'The pets_info field is required.',
                'home_type.required'=>'The home type field is required.',
                'home_bedrooms_detail.required'=>'The bedrooms detail field is required.',
                'student_gender.required'=>'The gender field is required.',
                'student_meal.required'=>'The meal detail field is required.',
                
                'first_school_detail.required'=>'The school detail field is required.',
                'second_school_detail.required'=>'The school detail field is required.',
                'third_school_detail.required'=>'The school detail field is required.',
                
                
                ]);
    
        dd($request);
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
                'criminal_background_check.required'=>'The criminal background check field is required.',
                'anyone_in_your_home_smoke.required'=>'The field is required.',
                'high_speed_wireless_Internet.required'=>'The wireless internet field is required.',
                'WHO_approved_COVID_Vaccine.required'=>'The COVID vaccine field is required.',
                'family_interests.required'=>'The family interests field is required.',
                'breakfast_food_available_and_prepare_dinner.required'=>'The field is required.',
                'your_daily_and_weekly_activities.required'=>'The field is required.',
                
                ]);
    
        dd($request);
    }
    
     public function host_emergency_contact_application(Request $request)
    {
        $request->validate([
           
            'emergency_contact_name1'=>'required',
            'emergency_contact_email1'=>'required',
            'emergency_contact_number1'=>'required',
            'emergency_contact_name2'=>'required',
            'emergency_contact_email2'=>'required',
            'emergency_contact_number2'=>'required',
            
            ],
            [
              
                'emergency_contact_name1.required'=>'The name field is required.',
                'emergency_contact_email1.required'=>'The email field is required.',
                'emergency_contact_number1.required'=>'The number field is required.',
                'emergency_contact_name2.required'=>'The name field is required.',
                'emergency_contact_email2.required'=>'The email field is required.',
                'emergency_contact_number2.required'=>'The number field is required.',
            
                ]);
    
        dd($request);
    }
}
