<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StudentApplicationFormFeesModel;
use App\Models\StudentApplicationFormFeePaymentModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SchoolModel;
use App\Models\RegionModel;
use App\Http\Controllers\EmailController;

use Yajra\DataTables\Facades\DataTables;


use App\Models\StudentApplicationFormModel;

class StudentController extends EmailController
{
//    public function profile()
//    {
//        return view('admin.students.profile');
//    }
    public function details(Request $request)
    {
//        $users = User::where('user_role', 2)->get();
//        dd($users);
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = User::where('user_role', 2);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('application_submitted', function ($model) {
                    return $model->application_submitted === 1 ? 'Submitted' : 'Pending';
//                    if($model->application_submitted === 1){
//                        return "Submitted";
//                    }else{
//                        return "Pending";
//                    }
                })
//                ->filterColumn('status', function ($query, $keyword) {
//                    $query->whereRaw('status(1,Succeeded)', 'like', ["%$keyword%"]);
//                })
                ->editColumn('is_active', function ($model) {
                    if ($model->is_active === 1) {
                        return "Verified";
                    } else {
                        return "Pending";
                    }
                })
                ->editColumn('status', function ($model) {
                    if ($model->status === 1) {
                        return "Approved";
                    } else {
                        return "Pending";
                    }
                })
                ->toJson();
        }
        return view('admin.students.details');
    }

    public function student_applications()
    {
        $applications = StudentApplicationFormModel::all();
        return view('admin.students.student_applications', compact('applications'));
    }

    public function view_student_applications($application)
    {
        $application = StudentApplicationFormModel::where('id', $application)
            ->with('getProgram')
            ->with('getStdAppFormImage')
            ->with('getStdAppFormStudentDetails')
            ->with('getStdAppFormEmergencyDetails')
            ->with('getStdAppFormSchoolDetails')
            ->with('getStdAppFormOtherDetails')
            ->with('getStdAppFormAirportDetails')
            ->with('getStdAppFormFeeDetails')
            ->with('getStdAppFormCardholderDetails')
//            ->with('getStdAppFormCreditCardDetails')
            ->with('getStdAppFormElectronicDetails')
            ->first();

//        if($applications->agency_id !== null){
        //Todo
//        }

        return view('admin.students.view_student_application', compact('application'));
    }

    public function student_application_status(Request $request, $app_id)
    {
        $data = $request->validate([
            'application_status' => 'required',
            'amount' => 'required_if:application_status,==,1',
        ],
            [
                'amount.required_if' => 'The amount field is required',
            ]);

        /** Getting Application Record to update application status*/
        $std_application = StudentApplicationFormModel::where('id', $app_id)->first();

        /** Checking if application already rejected */
        if ($std_application->status == 2 && $request->application_status == 2) {
            return back()->with('error', 'Application already rejected');
        }
        /** Checking if application already approved */
        if ($std_application->status == 1 && $request->application_status == 1) {
            return back()->with('error', 'Application already approved');
        }

        /** Updating Application status */
        $std_application->status = $request->application_status;

        /** Directly Saving Model if admin rejected student application  */
        if ($request->application_status == 2) {
            /** Saving Student Application */
            $std_application->save();
        }


        /** Calling User Model to shoot student application approval email and for other usage */
        $userfind = User::where('id', $std_application->user_id)->where('user_role', 2)->first();


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

    public function payments(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = StudentApplicationFormFeesModel::with('getUser')->with('getPayment');

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('student_fname', function ($model) {
                    return empty($model->getUser) ? '' : $model->getUser->first_name;
                })->addColumn('student_lname', function ($model) {
                    return empty($model->getUser) ? '' : $model->getUser->last_name;
                })
                ->addColumn('student_email', function ($model) {
                    return empty($model->getUser) ? '' : $model->getUser->email;
                })
                ->addColumn('payment_transaction_date', function ($model) {
                    return empty($model->getPayment) ? '' : $model->getPayment->created_at->format('d-m-Y');
                })
                ->filterColumn('payment_transaction_date', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(payment_transaction_date,'%d-%m-%Y') like ?", ["%$keyword%"]);
                })
                ->editColumn('fees', function ($model) {
                    return "$" . $model->fees;
                })
                ->editColumn('is_paid', function ($model) {
                    if ($model->is_paid === 1) {
                        return "Succeeded";
                    } else {
                        return "Pending";
                    }
                })
                ->toJson();
        }

        return view('admin.students.payments');
    }

    // School Start
    public function schools(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = SchoolModel::with('getRegion');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_school', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>
                        <a class="red-text" href="' . route('admin_delete_school', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>';
                    return $btn;
                })
                ->addColumn('RegionName', function ($model) {
                    return $model->getRegion->name;
                })
                ->toJson();
        }
        return view('admin.students.schools');
    }

    public function manage_school(SchoolModel $id)
    {
        $regions = RegionModel::all();
        return view('admin.students.manage-schools', compact('id', 'regions'));
    }

    public function manage_school_process(Request $request, SchoolModel $id)
    {
        $request->validate([
            'name' => 'required',
            'region_id' => 'required',
        ], [
            'region_id.required' => 'The region field is required.'
        ]);

        if ($id->id > 0) {
            $model = $id;
            $msg = 'School updated successfully.';
        } else {
            $model = new SchoolModel();
            $msg = "School added successfully.";
            $model->status = 1;
        }
        $model->name = $request->name;
        $model->region_id = $request->region_id;

        $model->save();
        return redirect()->route('admin_student_schools')->with('success', $msg);
    }

    public function delete_school(SchoolModel $id)
    {
        $id->delete();
        return redirect()->route('admin_student_schools')->with('success', 'School record deleted successfully.');
    }
    // School End

    // Region Start
    public function regions(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = RegionModel::orderby('id', 'ASC');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_region', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>
                        <a class="red-text" href="' . route('admin_delete_region', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>';
                    return $btn;
                })
                ->toJson();
        }
        return view('admin.students.regions');
    }

    public function manage_region(RegionModel $id)
    {
        return view('admin.students.manage-regions', compact('id'));
    }

    public function manage_region_process(Request $request, RegionModel $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        if ($id->id > 0) {
            $model = $id;
            $msg = 'Region updated successfully.';
        } else {
            $model = new RegionModel();
            $msg = "Region added successfully.";
            $model->status = 1;
        }
        $model->name = $request->name;

        $model->save();
        return redirect()->route('admin_student_regions')->with('success', $msg);
    }

    public function delete_region(RegionModel $id)
    {
        $id->delete();
        return redirect()->route('admin_student_regions')->with('success', 'Region record deleted successfully.');
    }
    // Region End
}
