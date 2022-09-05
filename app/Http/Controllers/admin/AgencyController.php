<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\AgencyModel;

use Yajra\DataTables\Facades\DataTables;

class AgencyController extends Controller
{

     public function agencies(Request $request)
    {
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = AgencyModel::orderby('id', 'ASC');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_agency_details', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>
                         <a class="red-text" href="' . route('admin_delete_agency', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>';
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
        return view('admin.agencies.agencies_details');
    }
    
    public function manage_agency(AgencyModel $id)
    {  
        return view('admin.agencies.add-agency',compact('id'));
    }
    
    public function manage_agency_process(Request $request, AgencyModel $id)
    {
        // |email|unique:users
          $request->validate([
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ], [
            'name.required' => 'The agency name field is required.',
            'city.required' => 'The agency city field is required.',
            'state.required' => 'The agency state field is required.',
            'country.required' => 'The agency country field is required.',
            'address.required' => 'The agency address field is required.',
            'contact.required' => 'The agency contact field is required.',
        ]);
           if ($id->id > 0) {
            $model = $id;
            $msg = 'Agency updated successfully.';
        } else {
            $model = new AgencyModel();
            $msg = "Agency added successfully.";
        }
        $model->name = $request->name;
        $model->city = $request->city;
        $model->state = $request->state;
        $model->country = $request->country;
        $model->address = $request->address;
        $model->contact = $request->contact;
        $model->status = $request->status ;
        $model->save();
         return redirect()->route('admin_agencies_details')->with('success', $msg);
    }
     public function delete_agency(AgencyModel $id)
    {
        $id->delete();
        return redirect()->route('admin_agencies_details')->with('success', 'Agency record deleted successfully.');
    }
   
}
