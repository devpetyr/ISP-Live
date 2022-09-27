<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\
{
    Controller,
    EmailController
};
use Illuminate\Http\Request;

use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use File;



class AdminStudentCrudController extends EmailController
{
    public function details(Request $request)
    {
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = User::where('user_role', 2);

            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('application_submitted', function ($model) {
                    return $model->application_submitted === 1 ? 'Submitted' : 'Pending';
                })
                ->editColumn('status', function ($model) {
                    return $model->status === 1 ? 'Active' : 'Inactive';
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
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_student_details', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>';
//                        <a class="red-text" href="' . route('admin_delete_student', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>
                    return $btn;
                })
                ->toJson();
        }
        return view('admin.students.details');
    }

    public function manage_student(User $id)
    {
        if ($id->id > 0) {
            if ($id->user_role !== 2) {
                return redirect()->route('admin_student_details')->with('error', 'Oops! try again');
            }
        }
        return view('admin.students.manage-student', compact('id'));
    }

    public function manage_student_process(Request $request, User $id)
    {

        if ($id->id > 0) {
            if ($id->user_role !== 2) {
                return redirect()->route('admin_student_details')->with('error', 'Oops! try again');
            }
            $email_val = 'required|email';
            $password_val = '';
            $image_val = '';
        } else {
            $email_val = 'required|email|unique:users';
            $password_val = 'required|string|min:8';
            $image_val = 'required';
        }
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => $email_val,
            'password' => $password_val,
            'student_profile_photo' => $image_val,
        ], [
            'first_name.required' => 'The first name field is required.',
            'last_name.required' => 'The last name field  is required.',
        ]);

        if ($id->id > 0) {
            $model = $id;
            $msg = 'Student updated successfully.';
        } else {
            $model = new User();
            $msg = "Student added successfully.";
            $model->status = 1;
        }
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->email = $request->email;
        if ($request->password) {
            $model->password = Hash::make($request->password);
        }
        $model->user_role = 2;
        $model->status = $request->status;
        $model->is_active = 1;
        if($request->application_submitted === null){
            $model->application_submitted = 0;
        }else{
            $model->application_submitted = $request->application_submitted;
        }


            /** student_photographs start*/
            $image = $request->file('student_profile_photo');
            if ($image) {


                $imageData = [];
                /** Make a new filename with extension */
                $filename = time() . rand(1111111111, 9999999999) . '.' . $image->getClientOriginalExtension();

                /**
                 * Get real image path using
                 * @class Intervention\Image\Facades\Image
                 */
                $img = Image::make($image->getRealPath());

                /** Set image dimension to conserve aspect ratio */
                $img->fit(300, 300);

                /** Get image stream to store the image else the tmp file will be stored */
                $img->stream();

                /** Make a new filename with extension */
                File::put(public_path('student/images/profile-images/') . $filename, $img);

                /** Store image for Student Profile Photo */
                $model->avatar = $filename;
            }
            /** student_photographs end*/

        $model->save();

        return redirect()->route('admin_student_details')->with('success', $msg);

    }
}
