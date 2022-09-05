<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AgentModel;
use App\Models\AgencyModel;

use Yajra\DataTables\Facades\DataTables;

class AgentController extends Controller
{
    // public function agent()
    // {
    //     return view('admin.agents.agents');
    // }
    
     public function agents(Request $request)
    {
        // $model = AgentModel::with('agencyRelation')->orderby('id', 'ASC')->get();
        // dd($model[0]->agencyRelation->name);
        
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = AgentModel::with('agencyRelation')->orderby('id', 'ASC');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('admin_manage_agent_details', [$model->id]) . '" ><i class="fa-solid fa-pencil"></i></a>
                        <a class="red-text" href="' . route('admin_delete_agent', [$model->id]) . '" ><i class="fa-solid fa-trash"></i></a>';
                    return $btn;
                })
                 ->addColumn('agency_name', function ($model) {
                    return empty($model->agencyRelation) ? '' : $model->agencyRelation->name;
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
        return view('admin.agents.agents_details');
    }
    
    public function manage_agent(AgentModel $id)
    {  
        $agencies=AgencyModel::where('status',1)->get();
        // dd($agency);
        return view('admin.agents.add-agent',compact('id','agencies'));
    }
    
    public function manage_agent_process(Request $request, AgentModel $id)
    {
        // |email|unique:users
          $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'agency_id' => 'required',
        ], [
            'first_name.required' => 'The agent first name field is required.',
            'last_name.required' => 'The agent last name field is required.',
            'email.required' => 'The agent email field is required.',
            'number.required' => 'The agent number field is required.',
            'agency_id.required' => 'The agency number field is required.',
        ]);
           if ($id->id > 0) {
            $model = $id;
            $msg = 'Agent updated successfully.';
        } else {
            $model = new AgentModel();
            $msg = "Agent added successfully.";
            foreach($model->get() as $checkUser)
            {
                if($request->email == $checkUser->email)
                {
                    // dd('yes');
                    return back()->with('error','The agent email is exist.');
                }
            }
        }
       
        
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->email = $request->email;
        $model->phone_number = $request->number;
        $model->agency_id = $request->agency_id;
        $model->status = $request->status ;
        $model->save();
         return redirect()->route('admin_agents_details')->with('success', $msg);
    }
     public function delete_agent(AgentModel $id)
    {
        $id->delete();
        return redirect()->route('admin_agents_details')->with('success', 'Agent record deleted successfully.');
    }
   
}
