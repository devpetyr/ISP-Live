<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Yajra\DataTables\Facades\DataTables;

class HostController extends Controller
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
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_host', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>';
                    return $btn;
                })
                ->toJson();
        }

        return view('admin.host.details');
    }


    public function manage_host(User $id)
    {
        return view('admin.host.manage-host', compact('id'));
    }

    public function manage_host_process(Request $request, User $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        if ($id->id > 0) {
            $model = $id;
            $msg = 'Host updated successfully.';
        } else {
            $model = new User();
            $msg = "Host added successfully.";
            $model->status = 1;
        }
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;

        $model->save();
        return redirect()->route('admin_host_details')->with('success', $msg);
    }

    // Delete User host not in flow
//    public function delete_host(User $id)
//    {
////        $id->delete();
//        return redirect()->route('admin_host_details')->with('success', 'Host record deleted successfully.');
//    }
    public function visits()
    {
        return view('admin.host.visits');
    }
}
