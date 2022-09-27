<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\
{
    Controller,
    EmailController
};

use Illuminate\Http\Request;

use App\Models\Saf\
{
    SafStudentBasicInformationModel,
    SafFeesModel,
    SafStudentInformationModel,
    SafAgentInformationModel,
    SafOtherInformationModel,
    SafMedicalInformationModel,
    SafAirportInformationModel,
    SafPaymentInformationModel,
    SafAgreementInformationModel,
    SafStatusModel,
    SafFeePaymentModel
};

use App\Models\User;
use App\Models\SchoolModel;
use App\Models\RegionModel;


use Yajra\DataTables\Facades\DataTables;

class AdminStudentController extends EmailController
{
//    public function profile()
//    {
//        return view('admin.students.profile');
//    }
//    public function details(Request $request)
//    {
////        $users = User::where('user_role', 2)->get();
////        dd($users);
//        if ($request->ajax()) {
//            // using eloquent model donot use get()
//            $model = User::where('user_role', 2);
//
//            return DataTables::eloquent($model)
//                //adding index or s.no
//                ->addIndexColumn()
//                ->editColumn('application_submitted', function ($model) {
//                    return $model->application_submitted === 1 ? 'Submitted' : 'Pending';
////                    if($model->application_submitted === 1){
////                        return "Submitted";
////                    }else{
////                        return "Pending";
////                    }
//                })
////                ->filterColumn('status', function ($query, $keyword) {
////                    $query->whereRaw('status(1,Succeeded)', 'like', ["%$keyword%"]);
////                })
//                ->editColumn('is_active', function ($model) {
//                    if ($model->is_active === 1) {
//                        return "Verified";
//                    } else {
//                        return "Pending";
//                    }
//                })
////                ->editColumn('status', function ($model) {
////                    if ($model->status === 1) {
////                        return "Approved";
////                    } else {
////                        return "Pending";
////                    }
////                })
//                ->toJson();
//        }
//        return view('admin.students.details');
//    }

    public function student_applications(Request $request)
    {
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = SafStudentBasicInformationModel::whereRelation('getUser', 'user_role', 2)->whereRelation('getUser', 'application_submitted', 1);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('application_status', function ($model) {
                    if ($model->application_status === 1) {
                        return "Approved";
                    } else if ($model->application_status === 2) {
                        return "Rejected";
                    } else {
                        return "Pending";
                    }

                })
                ->addColumn('email', function ($model) {
                    return empty($model->getUser) ? '' : $model->getUser->email;
                })
                // ->editColumn('first_name', function ($model) {
                //     return $model->userHostApplication->first_name;
                // })
                //  ->editColumn('last_name', function ($model) {
                //     return $model->userHostApplication->last_name;
                // })
                //  ->editColumn('email', function ($model) {
                //     return $model->userHostApplication->email;
                // })
                //  ->editColumn('cell_phone', function ($model) {
                //     return $model->userHostApplication->cell_phone;
                // })
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_view_student_application', [$model->user_id]) . '" ><i class="fa fa-bars"></i></a>';
                    return $btn;
                })
                ->toJson();
        }
        return view('admin.students.student_applications');
    }

    public function payments(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = SafFeesModel::with('getUser')->with('getPayment');

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
