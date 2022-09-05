<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\Models\User;

class CoordinatorController extends Controller
{
    // public function coordinators()
    // {
    //     return view('admin.coordinators.coordinators');
    // }
      public function coordinators(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = User::where('user_role',4)->orderby('id', 'ASC');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_coordinator_details', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>';
                    // <a class="red-text" href="' . route('admin_delete_coordinator', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>

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
        return view('admin.coordinators.coordinators_details');
    }
    
    public function manage_coordinator(User $id)
    {  
        $agencies=User::get();
        // dd($agency);
        return view('admin.coordinators.add-coordinator',compact('id','agencies'));
    }
    
    public function manage_coordinator_process(Request $request, User $id)
    {
          $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'status' => 'required'
        ], [
            'first_name.required' => 'The coordinator first name is required.',
            'last_name.required' => 'The coordinator last name is required.',
            'email.required' => 'The coordinator email is required.',
            'status.required' => 'The coordinator status is required.',
        ]);
           if ($id->id > 0) {
            $model = $id;
            $msg = 'coordinator updated successfully.';
        } else {
            $model = new User();
            $msg = "coordinator added successfully.";
               $request->validate([
            'password' => 'required',
        ], [
            'password.required' => 'The coordinator password is required.'
        ]);
            foreach($model->get() as $checkUser)
            {
                if($request->email == $checkUser->email)
                {
                    // dd('yes');
                    return back()->with('error','The coordinator email is exist.');
                }
            }
        }
       
        
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->user_role = 4 ;
        $model->status = $request->status ;
        $model->is_active = 1 ;
        $model->save() ;
        $this->GA_VerifyEmail($model->first_name,$model->last_name, $model->email, route('user_verified', $model->id));
         return redirect()->route('admin_coordinators_details')->with('success', $msg);
    }
     public function delete_coordinator(User $id)
    {
        $id->delete();
        return redirect()->route('admin_coordinators_details')->with('success', 'Coordinator record deleted successfully.');
    }
}
