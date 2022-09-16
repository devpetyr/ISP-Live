<?php

namespace App\Http\Controllers\admin\host;

use App\Http\Controllers\
{
    Controller,
    EmailController
};

use Illuminate\Http\Request;

use App\Models\User;

use Yajra\DataTables\Facades\DataTables;

class AdminHostController extends EmailController
{
    public function profile()
    {
        return view('admin.host.profile');
    }

    public function details(Request $request)
    {
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = User::where('user_role', 3);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('application_submitted', function ($model) {
                    return $model->application_submitted === 1 ? 'Submitted' : 'Pending';
                })
                ->editColumn('status', function ($model) {
                    return $model->status === 1 ? 'Active' : 'Inactive';
                })
                ->editColumn('is_active', function ($model) {
                    if ($model->is_active === 1) {
                        return "Verified";
                    } else {
                        return "Pending";
                    }
                })
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_host_details', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>';
                    return $btn;
                })
                ->toJson();
        }

        return view('admin.host.details');
    }

    public function visits()
    {
        return view('admin.host.visits');
    }

    // Delete User host not in flow
//    public function delete_host(User $id)
//    {
////        $id->delete();
//        return redirect()->route('admin_host_details')->with('success', 'Host record deleted successfully.');
//    }
}
