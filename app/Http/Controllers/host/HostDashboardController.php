<?php

namespace App\Http\Controllers\host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentAssignModel;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\Models\NotificationModel;
use App\Models\StateModel;
use App\Models\Saf\SafStudentInformationModel;
use Auth;
use File;

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

class HostDashboardController extends Controller
{
    public function dashboard()
    {
        return view('host.admin.dashboard');
    }
    
    public function profile()
    {
       return view('host.admin.hostProfile.host-profile-update');
    }
    public function profile_process(Request $request)
    {
         $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        
            $model=User::where('id',Auth::user()->id)->first();
            $model->first_name = $request->first_name;
            $model->last_name = $request->last_name;
            $model->save();
            return back()->with('success', 'Profile updated successfully');
    }
    public function password_update()
    {
        return view('host.admin.hostProfile.host-password-update');
    }
    public function password_update_process(Request $request)
    {
         $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);
        
        
        if(Hash::check($request->old_password, Auth::user()->password))
        {
            $model=User::where('id',Auth::user()->id)->first();
            $model->password = Hash::make($request->new_password);
            $model->save();
            return back()->with('success', 'Password updated successfully');
        }else{
            return back()->with('error', 'Invalid old password.');
        }
    }

    public function student_list(Request $request)
    {
        
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = StudentAssignModel::with('getUser')->where('host_id', Auth::user()->id)->where('status', 1)->where('host_approve', 0);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('first_name', function ($model) {
                    return $model->getUser->first_name;
                })
                ->editColumn('last_name', function ($model) {
                    return $model->getUser->last_name;
                })
                ->editColumn('image', function ($model) {
                    $url = asset('Host-Image/' . $model->getUser->avatar);
                    return '<img src="' . $url . '" border="0" width="50" class="img-rounded" align="center" />';
                })
                ->editColumn('state', function ($model) {
                    $userInfo=SafStudentInformationModel::where('user_id', $model->student_id)->first();
                    $state=StateModel::where('id',$userInfo->school_state)->first();
                    return $state->name;
                })
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="green-text"  href="' . route('hd_student_accept', [$model->student_id,$model->host_id]) . '" ><i class="fa-sharp fa-solid fa-check"></i></a><a class="red-text"  href="' . route('hd_student_reject', [$model->student_id,$model->host_id]) . '" ><i class="fa-solid fa-xmark"></i></a>';
                    // ' . route('admin_manage_student_details', [$model->id]) . '
                    return $btn;
                })
                ->rawColumns(['image', 'action'])
                ->toJson();
        }
        return view('host.admin.studentsProfile.student_list');
    }
     public function reject_student($studentID,$hostID)
    {
        $std_reject = StudentAssignModel::where('student_id',$studentID)->where('host_id',$hostID)->first();
        // dd($std_reject);
        if($std_reject)
        {
            $std_reject->host_approve = 2;
            $std_reject->save();
            return back()->with('success','Student request has been Rejected successfully.');
        }
        
        return back()->with('success','Student not found.');
    }
    
    public function accept_student($studentID,$hostID)
    {
        $std_accept = StudentAssignModel::where('student_id',$studentID)->where('host_id',$hostID)->first();
        if($std_accept)
        {
            $std_accept->host_approve = 1;
            $std_accept->save();
            return back()->with('success','Student request has been Accept successfully.');
        }
        
        return back()->with('success','Student not found.');
    }
    
    public function student_accept_reject_list(Request $request)
    {
         $model = StudentAssignModel::with('getUser')->where('host_id', Auth::user()->id)->where('status', 1)->where('host_approve','!=',0)->get();
        //  dd($model[0]->host_approve);
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = StudentAssignModel::with('getUser')->where('host_id', Auth::user()->id)->where('status', 1)->where('host_approve','!=',0);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('first_name', function ($model) {
                    return $model->getUser->first_name;
                })
                ->editColumn('last_name', function ($model) {
                    return $model->getUser->last_name;
                })
                ->editColumn('application', function ($model) {
                    if($model->host_approve == 1)
                    {
                        $application="Approved";
                    }
                    else
                    {
                        $application="Rejected";
                    }
                    return $application;
                })
                ->editColumn('image', function ($model) {
                    $url = asset('Host-Image/' . $model->getUser->avatar);
                    return '<img src="' . $url . '" border="0" width="50" class="img-rounded" align="center" />';
                })
                ->editColumn('state', function ($model) {
                    $userInfo=SafStudentInformationModel::where('user_id', $model->student_id)->first();
                    $state=StateModel::where('id',$userInfo->school_state)->first();
                    return $state->name;
                })
                ->rawColumns(['image', 'action'])
                ->toJson();
        }
        return view('host.admin.studentsProfile.accept-reject-list');
    }
    
    
    
     public function student_profile(Request $request)
    {
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = StudentAssignModel::with('getUser')->where('host_id', Auth::user()->id)->where('status', 1)->where('host_approve',1);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('first_name', function ($model) {
                    return $model->getUser->first_name;
                })
                ->editColumn('last_name', function ($model) {
                    return $model->getUser->last_name;
                })
                ->editColumn('state', function ($model) {
                    $userInfo=SafStudentInformationModel::where('user_id', $model->student_id)->first();
                    $state=StateModel::where('id',$userInfo->school_state)->first();
                    return $state->name;
                })
                ->editColumn('image', function ($model) {
                    $url = asset('Host-Image/' . $model->getUser->avatar);
                    return '<img src="' . $url . '" border="0" width="50" class="img-rounded" align="center" />';
                })
                ->rawColumns(['image', 'action'])
                ->toJson();
        }
        return view('host.admin.studentsProfile.student_profile');
    }
    
    public function host_profile()
    {
        $id=Auth::user()->id;
        $hostBasic=HafBasicInformationModel::where('user_id',$id)->first();
        $hostPartner=HafPartnerInformationModel::where('user_id',$id)->first();
        $hostAdult=HafAdultInformationModel::where('user_id',$id)->first();
        $hostChild=HafChildInformationModel::where('user_id',$id)->first();
        $hostPet=HafPetInformationModel::where('user_id',$id)->first();
        $hostSchool=HafSchoolInformationModel::where('user_id',$id)->first();
        $hostPersonalInformation=HafPersonalInformationModel::where('user_id',$id)->first();
        $hostEmergencyContact=HafEmergencyInformationModel::where('user_id',$id)->first();
        // dd($hostBasic,$hostPartner,$hostAdult,$hostChild,$hostPet,$hostSchool,$hostPersonalInformation,$hostEmergencyContact);
        return view('host.admin.hostProfile.host-profile',compact('hostBasic','hostPartner','hostAdult','hostChild','hostPet','hostSchool','hostPersonalInformation','hostEmergencyContact'));
    }

    public function host_information_application(Request $request,$id )
    {
        $request->validate([
            'host_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_dob'=>'required|date_format:Y-m-d|before:tomorrow|before:-13 years',
            'host_cell_phone'=>'required ',
            'host_email'=>'required|email',
            'host_occupation'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_employer'=>'required|regex:/^[\pL\s\-]+$/u',
            'host_work_phone'=>'required ',
            'host_home_address'=>'required',

        ],
            [
                'host_first_name.required'=>'The first name field is required.',
                'host_last_name.required'=>'The last name field is required.',
                'host_dob.required'=>'The date of birth field is required.',
                'host_dob.before'=>'The host date of birth must be a date before -13 years.',
                'host_cell_phone.required'=>'The cell phone field is required.',
                'host_email.required'=>'The email field is required.',
                'host_email.email'=>'The emergency contact email must be a valid email address.',
                'host_occupation.required'=>'The occupation field is required.',
                'host_employer.required'=>'The employer field is required.',
                'host_work_phone.required'=>'The work phone field is required.',
                'host_home_address.required'=>'The home address field is required.',

            ]);

        $hostInformation=HafBasicInformationModel::where('user_id',$id)->first();
        if($hostInformation)
        {
            $hostInformation->first_name=$request->host_first_name;
            $hostInformation->last_name=$request->host_last_name;
            $hostInformation->dob=$request->host_dob;
            $hostInformation->cell_phone=$request->host_cell_phone;
            $hostInformation->email=$request->host_email;
            $hostInformation->occupation=$request->host_occupation;
            $hostInformation->employer=$request->host_employer;
            $hostInformation->work_phone=$request->host_work_phone;
            $hostInformation->home_address=$request->host_home_address;

            if($request->file('host_profile_photo')){

                $dest='Host-Image/'.$hostInformation->profile_photo;
                File::delete($dest);
                $hostInformation->delete();

                $file= $request->file('host_profile_photo');
                $filename= time().rand(9999,9999).'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('Host-Image'), $filename);
                $hostInformation->profile_photo= $filename;
            }

            $hostInformation->save();
            $message="Host Form Updated Sucessfully";
        }

        return back()->with('success',$message);
    }

    public function host_partner_application(Request $request,$id)
    {
        // dd($request,$id);
        $request->validate([

            'partner_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_dob'=>'required|date_format:Y-m-d|before:tomorrow|before:-13 years',
            'partner_cell_phone'=>'required ',
            'partner_email'=>'required|email',
            'partner_occupation'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_employer'=>'required|regex:/^[\pL\s\-]+$/u',
            'partner_work_phone'=>'required ',

        ],
            [
                'partner_first_name.required'=>'The first name field is required.',
                'partner_last_name.required'=>'The last name field is required.',
                'partner_dob.required'=>'The date of birth field is required.',
                'partner_dob.before'=>'The partner date of birth must be a date before -13 years.',
                'partner_cell_phone.required'=>'The cell phone field is required.',
                'partner_email.required'=>'The email field is required.',
                'partner_occupation.required'=>'The occupation field is required.',
                'partner_employer.required'=>'The employer field is required.',
                'partner_work_phone.required'=>'The work phone field is required.',


            ]);

        $partnerInformation=HafPartnerInformationModel::where('user_id',$id)->first();
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

        return back()->with('success',$message);

    }

    public function host_adult_application(Request $request,$id)
    {
        $request->validate([

            'adult1_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_work_phone'=>'required',
            'adult1_relation'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_occupation'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_employer'=>'required|regex:/^[\pL\s\-]+$/u',
            'adult1_gender'=>'required|regex:/^[\pL\s\-]+$/u',

            // 'adult2_first_name'=>'regex:/^[\pL\s\-]+$/u',
            // 'adult2_last_name'=>'regex:/^[\pL\s\-]+$/u',
            // 'adult2_work_phone'=>'regex:/^[\pL\s\-]+$/u',
            // 'adult2_relation'=>'regex:/^[\pL\s\-]+$/u',
            // 'adult2_occupation'=>'regex:/^[\pL\s\-]+$/u',
            // 'adult2_employer'=>'regex:/^[\pL\s\-]+$/u',
            // 'adult2_gender'=>'regex:/^[\pL\s\-]+$/u',


        ],
            [

                'adult1_first_name.required'=>'The first name field is required.',
                'adult1_first_name.regex'=>'The adult first name format is invalid.',
                'adult1_last_name.required'=>'The last name field is required.',
                'adult1_last_name.regex'=>'The adult last name format is invalid.',
                'adult1_work_phone.required'=>'The work phone field is required.',
                'adult1_relation.required'=>'The relation field is required.',
                'adult1_relation.regex'=>'The adult relation format is invalid.',
                'adult1_occupation.required'=>'The occupation field is required.',
                'adult1_occupation.regex'=>'The adult occupation format is invalid.',
                'adult1_employer.required'=>'The employe field is required.',
                'adult1_employer.regex'=>'The adult employer format is invalid.',
                'adult1_gender.required'=>'The gender field is required.',

                //         'adult2_first_name.required'=>'The first name field is required.',
                //         'adult2_last_name.required'=>'The first name field is required.',
                //         'adult2_work_phone.required'=>'The work phone field is required.',
                //         'adult2_relation.required'=>'The relation field is required.',
                //         'adult2_occupation.required'=>'The occupation field is required.',
                //         'adult2_employer.required'=>'The employe field is required.',
                //         'adult2_gender.required'=>'The gender field is required.',

            ]);


        $adultInformation=HafAdultInformationModel::where('user_id',$id)->first();

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
        return back()->with('success',$message);
    }

    public function host_childs_application(Request $request,$id)
    {
        $request->validate([

            'child1_first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'child1_last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'child1_dob'=>'required|before:tomorrow',
            'child1_gender'=>'required|regex:/^[\pL\s\-]+$/u',

            // 'child2_first_name'=>'regex:/^[\pL\s\-]+$/u',
            // 'child2_last_name'=>'regex:/^[\pL\s\-]+$/u',
            // 'child2_dob'=>'before:tomorrow',
            // 'child2_gender'=>'regex:/^[\pL\s\-]+$/u',

            // 'child3_first_name'=>'regex:/^[\pL\s\-]+$/u',
            // 'child3_last_name'=>'regex:/^[\pL\s\-]+$/u',
            // 'child3_dob'=>'before:tomorrow',
            // 'child3_gender'=>'regex:/^[\pL\s\-]+$/u',

        ],
            [
                'child1_first_name.required'=>'The first name field is required.',
                'child1_first_name.regex'=>'The child first name format is invalid.',
                'child1_last_name.required'=>'The last name field is required.',
                'child1_last_name.regex'=>'The child last name format is invalid.',
                'child1_dob.required'=>'The date of birth field is required.',
                'child1_dob.before'=>'The child date of birth must be a date before tomorrow.',
                'child1_gender.required'=>'The gender field is required.',

                //         'child2_first_name.required'=>'The first name field is required.',
                //         'child2_last_name.required'=>'The last name field is required.',
                //         'child2_dob.required'=>'The date of birth field is required.',
                //         'child2_gender.required'=>'The gender field is required.',

                //         'child3_first_name.required'=>'The first name field is required.',
                //         'child3_last_name.required'=>'The last name field is required.',
                //         'child3_dob.required'=>'The date of birth field is required.',
                //         'child3_gender.required'=>'The gender field is required.',

            ]);

        $childInformation=HafChildInformationModel::where('user_id',$id)->first();
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
        return back()->with('success',$message);
    }

    public function host_pets_application(Request $request,$id)
    {
        $request->validate([

            'pets_info'=>'required',
            'pets_info_detail'=>'required',
        ],
            [
                'pets_info.required'=>'The pets info field is required.',
                'pets_info_detail.required'=>'The pets_info field is required.',
            ]);


        $petsInformation=HafPetInformationModel::where('user_id',$id)->first();
        if($petsInformation)
        {
            $petsInformation->pets_info=$request->pets_info;
            $petsInformation->pets_info_detail=$request->pets_info_detail;
            $petsInformation->save();

            $message="Details Updated Sucessfully";
        }

        return back()->with('success',$message);
    }

    public function host_house_school_student_application(Request $request,$id)
    {
        $request->validate([

            'home_type'=>'required',
            'home_bedrooms_detail'=>'required',
            'student_gender'=>'required',
            'student_meal'=>'required',

            'first_school_detail'=>'required',
            // 'second_school_detail'=>'required',
            // 'third_school_detail'=>'required',

        ],
            [
                'home_type.required'=>'The home type field is required.',
                'home_bedrooms_detail.required'=>'The bedrooms detail field is required.',

                'student_gender.required'=>'The gender field is required.',
                'student_meal.required'=>'The meal detail field is required.',

                'first_school_detail.required'=>'The school detail field is required.',
                // 'second_school_detail.required'=>'The school detail field is required.',
                // 'third_school_detail.required'=>'The school detail field is required.',


            ]);

        $houseStudentSchoolInformation=HafSchoolInformationModel::where('user_id',$id)->first();
        if($houseStudentSchoolInformation)
        {
            $houseStudentSchoolInformation->home_type=$request->home_type;
            $houseStudentSchoolInformation->home_bedrooms_detail=$request->home_bedrooms_detail;

            $houseStudentSchoolInformation->student_gender=$request->student_gender;
            $houseStudentSchoolInformation->student_meal=$request->student_meal;

            $houseStudentSchoolInformation->first_school_detail=$request->first_school_detail;
            $houseStudentSchoolInformation->second_school_detail=$request->second_school_detail;
            $houseStudentSchoolInformation->third_school_detail=$request->third_school_detail;

            $houseStudentSchoolInformation->save();
            $message="Details Updated Sucessfully";
        }

        return back()->with('success',$message);
    }

    public function host_personal_details_application(Request $request,$id)
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
                'family_interests.required'=>'The field is required.',
                'breakfast_food_available_and_prepare_dinner.required'=>'The field is required.',
                'your_daily_and_weekly_activities.required'=>'The field is required.',


            ]);

        $personalInformation=HafPersonalInformationModel::where('user_id',$id)->first();
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

        return back()->with('success',$message);
    }

    public function host_emergency_details_application(Request $request,$id)
    {
        $request->validate([

            'emergency_contact_name1'=>'required|regex:/^[\pL\s\-]+$/u',
            'emergency_contact_email1'=>'required|email',
            'emergency_contact_number1'=>'required ',
            'emergency_contact_name2'=>'required|regex:/^[\pL\s\-]+$/u',
            'emergency_contact_email2'=>'required|email',
            'emergency_contact_number2'=>'required ',

        ],
            [

                'emergency_contact_name1.required'=>'The name field is required.',
                'emergency_contact_name1.regex'=>'The emergency contact name format is invalid.',
                'emergency_contact_email1.required'=>'The email field is required.',
                'emergency_contact_email1.email'=>'The emergency contact email must be a valid email address.',
                'emergency_contact_number1.required'=>'The number field is required.',
                'emergency_contact_number2.regex'=>'The emergency contact number format is invalid.',

                'emergency_contact_name2.required'=>'The name field is required.',
                'emergency_contact_name2.regex'=>'The emergency contact name format is invalid.',
                'emergency_contact_email2.required'=>'The email field is required.',
                'emergency_contact_email2.email'=>'The emergency contact email must be a valid email address.',
                'emergency_contact_number2.required'=>'The number field is required.',
                'emergency_contact_number2.regex'=>'The emergency contact number format is invalid.',

            ]);

        $emergencyContactInformation=HafEmergencyInformationModel::where('user_id',$id)->first();
        if($emergencyContactInformation)
        {
            $emergencyContactInformation->name1=$request->emergency_contact_name1;
            $emergencyContactInformation->email1=$request->emergency_contact_email1;
            $emergencyContactInformation->number1=$request->emergency_contact_number1;

            $emergencyContactInformation->name2=$request->emergency_contact_name2;
            $emergencyContactInformation->email2=$request->emergency_contact_email2;
            $emergencyContactInformation->number2=$request->emergency_contact_number2;

            $emergencyContactInformation->save();

            $message="Emergency Contact Form Updated Sucessfully";
        }

        return back()->with('success',$message);

    }
    
    public function notification()
    {
        $notification=NotificationModel::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('host.admin.hostProfile.notification',compact('notification'));
    }
    
   

    
}
