<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AirlineModel;
use App\Models\RegionModel;

use Yajra\DataTables\Facades\DataTables;

class AirportPickupController extends Controller
{
    public function airport_pickup()
    {
        return view('admin.airport-pickup.airport-pickup');
    }
    public function drivers()
    {
        return view('admin.airport-pickup.drivers');
    }
    public function airlines(Request $request)
    {
//        $model = AirlineModel::orderby('id', 'ASC')->get();
//        dd($model);
           if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = AirlineModel::orderby('id', 'ASC');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_airlines', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>
                        <a class="red-text" href="' . route('admin_delete_airline', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>';
                    return $btn;
                })
                ->toJson();
        }
        return view('admin.airport-pickup.airlines');
    }
    public function manage_airline(AirlineModel $id)
    {
        return view('admin.airport-pickup.add-airlines',compact('id'));
    }
    public function manage_airline_process(Request $request , AirlineModel $id)
    {
          $request->validate([
            'airline_name' => 'required',
        ], [
            'airline_name.required' => 'The airline name field is required.'
        ]);
           if ($id->id > 0) {
            $model = $id;
            $msg = 'Airline updated successfully.';
        } else {
            $model = new AirlineModel();
            $msg = "Airline added successfully.";
        }
        $model->name = $request->airline_name;

        $model->save();
        return view('admin.airport-pickup.airlines');
    }
     public function delete_airline(AirlineModel $id)
    {
        $id->delete();
        return redirect()->route('admin_airport_pickup_airlines')->with('success', 'School record deleted successfully.');
    }
    
    /**Start*/
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
    /**End*/
    
    
    
    
    
}
