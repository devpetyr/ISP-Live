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

use Illuminate\Support\Facades\Hash;


class AdminHostCrudController extends EmailController
{
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

    public function manage_host(User $id)
    {
        if ($id->id > 0) {
            if ($id->user_role !== 3) {
                return redirect()->route('admin_host_details')->with('error', 'Oops! try again');
            }
        }
        return view('admin.host.manage-host', compact('id'));
    }

    public function manage_host_process(Request $request, User $id)
    {
        if ($id->id > 0) {
            if ($id->user_role !== 3) {
                return redirect()->route('admin_host_details')->with('error', 'Oops! try again');
            }
            $email_val = 'required|email';
            $password_val = '';
        } else {
            $email_val = 'required|email|unique:users';
            $password_val = 'required|string|min:8';
        }
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => $email_val,
            'password' => $password_val,
        ], [
            'first_name.required' => 'The first name field is required.',
            'last_name.required' => 'The last name field  is required.',
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
        $model->email = $request->email;
        if ($request->password) {
            $model->password = Hash::make($request->password);
        }
        $model->user_role = 3;
        $model->status = $request->status;
        $model->is_active = 1;
        $model->application_submitted = 0;

        $model->save();

        return redirect()->route('admin_host_details')->with('success', $msg);

    }
}
