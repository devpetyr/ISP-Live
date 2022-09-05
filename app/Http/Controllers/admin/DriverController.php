<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use Yajra\DataTables\Facades\DataTables;

class DriverController extends Controller
{
    public function drivers(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = User::where('user_role',5);
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_driver_details', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>
                        <a class="red-text" href="' . route('admin_delete_driver', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>';
                    return $btn;
                })
               ->editColumn('status', function ($model) {
                    if ($model->status === 1) {
                        return "Active";
                    } else {
                        return "Inactive";
                    }
                })
                ->toJson();
        }
        return view('admin.drivers.driver_details');
    }
    
    public function manage_driver(User $id)
    {
        // dd(Hash::needsRehash($id->password));
        
        // $decrypt= Crypt::decrypt($id->password);  
        return view('admin.drivers.add-driver',compact('id'));
    }
    
    public function manage_driver_process(Request $request, User $id)
    {
        // |email|unique:users
          $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ], [
            'first_name.required' => 'The driver first name is required.',
            'last_name.required' => 'The driver last name is required.',
            'email.required' => 'The driver email is required.'
        ]);
           if ($id->id > 0) {
            $model = $id;
            $msg = 'Driver updated successfully.';
        } else {
            $model = new User();
            $msg = "Driver added successfully.";
               $request->validate([
            'password' => 'required',
        ], [
            'password.required' => 'The driver password is required.'
        ]);
            foreach($model->get() as $checkUser)
            {
                if($request->email == $checkUser->email)
                {
                    // dd('yes');
                    return back()->with('error','The driver email is exist.');
                }
            }
        }
       
        
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->user_role = 5 ;
        $model->status = $request->status ;
        $model->is_active = 1 ;
        // $model->application_submitted = 0 ;

        $model->save();
         return redirect()->route('admin_driver_details')->with('success', $msg);
    }
     public function delete_driver(User $id)
    {
        $id->delete();
        return redirect()->route('admin_driver_details')->with('success', 'Driver record deleted successfully.');
    }
    
}
