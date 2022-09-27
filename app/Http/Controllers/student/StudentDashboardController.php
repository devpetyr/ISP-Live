<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Saf\
{
    SafStudentBasicInformationModel,
    SafStudentInformationModel,
    SafAgentInformationModel,
    SafOtherInformationModel,
    SafMedicalInformationModel,
    SafAirportInformationModel,
    SafPaymentInformationModel,
    SafAgreementInformationModel,
    SafStatusModel,
    SafFeesModel
};
use App\Models\Haf\
{
    HafSchoolInformationModel,
    HafPetInformationModel,
    HafPersonalInformationModel,
    HafPartnerInformationModel,
    HafEmergencyInformationModel,
    HafChildInformationModel,
    HafBasicInformationModel,
    HafAdultInformationModel
};

use App\Models\
{
    StateModel,
    User,
    NotificationModel,
    AgentModel,
    CityModel,
    CountryModel,
    StudentAssignModel
};

use Carbon\Carbon;
use Illuminate\Support\Facades\
{
    Auth,
    File
};

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class StudentDashboardController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function notification()
    {
        $notifications = NotificationModel::where('user_id', Auth::user()->id)->orwhereRelation('getUser', 'user_role', 1)->orderby('created_at', 'DESC')->get();
        return view('student.notification.notification', compact('notifications'));
    }

    public function host_request(Request $request)
    {
        $model = HafBasicInformationModel::with('userHostApplication', 'getCity', 'getState')->whereRelation('userHostApplication', 'user_role', 3)->whereRelation('userHostApplication', 'status', 1)->where('application_status', 1)->orderby('id', 'ASC')->get();
//         dd($model[0]->userHostApplication->avatar);
        if ($request->ajax()) {

            // using eloquent model donot use get()
            $model = HafBasicInformationModel::with('userHostApplication', 'getCity', 'getState')->whereRelation('userHostApplication', 'user_role', 3)->whereRelation('userHostApplication', 'status', 1)->where('application_status', 1)->orderby('id', 'ASC');
            return DataTables::eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->editColumn('hostCity', function ($model) {
                    return $model->getCity->name;
                })
                ->editColumn('state', function ($model) {
                    return $model->getState->name;
                })
                ->editColumn('image', function ($model) {
                    $url = asset('Host-Image/' . $model->userHostApplication->avatar);
                    return '<img src="' . $url . '" border="0" width="50" class="img-rounded" align="center" />';
                })
                ->addColumn('action', function ($model) {
                    //adding buttons to datatable
                    $btn = '<a class="blue-text"  href="' . route('sd_request_host', [$model->user_id]) . '" >Send Request</a>
                        <a class="red-text" href="' . route('sd_host_details', [$model->user_id]) . '" >View Profile</a>';
                    return $btn;
                })
                ->rawColumns(['image', 'action'])
                ->toJson();
        }
        return view('student.host.host_request');
    }

    public function host_details($id)
    {
        $hostBasic = HafBasicInformationModel::where('user_id', $id)->first();
        $hostPartner = HafPartnerInformationModel::where('user_id', $id)->first();
        $hostAdult = HafAdultInformationModel::where('user_id', $id)->first();
        $hostChild = HafChildInformationModel::where('user_id', $id)->first();
        $hostPet = HafPetInformationModel::where('user_id', $id)->first();
        $hostSchool = HafSchoolInformationModel::where('user_id', $id)->first();
        $hostPersonalInformation = HafPersonalInformationModel::where('user_id', $id)->first();
        $hostEmergencyContact = HafEmergencyInformationModel::where('user_id', $id)->first();
        // dd($hostBasic,$hostPartner,$hostAdult,$hostChild,$hostPet,$hostSchool,$hostPersonalInformation,$hostEmergencyContact);
        return view('student.host.host_detail', compact('hostBasic', 'hostPartner', 'hostAdult', 'hostChild', 'hostPet', 'hostSchool', 'hostPersonalInformation', 'hostEmergencyContact'));
    }

    public function request_host(Request $request, $host_id)
    {
        $check_host = StudentAssignModel::where('student_id', auth()->user()->id)->where('host_id', $host_id)->first();
        if ($check_host) {
            return back()->with('error', 'Your host request has already been submitted!');
        }
        $check_count = StudentAssignModel::where('student_id', auth()->user()->id)->count();
        if ($check_count >= 5) {
            return back()->with('error', 'Your can only request five host');
        }
        $std_assign = new StudentAssignModel();
        $std_assign->student_id = auth()->user()->id;
        $std_assign->host_id = $host_id;
        $std_assign->student_approve = 1;
        $std_assign->save();
        return back()->with('success','Your host request has been submitted successfully.');
    }
}