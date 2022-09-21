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

use App\Models\
{
    StateModel,
    User,
    NotificationModel,
    AgentModel,
    CityModel,
    CountryModel
};

use Carbon\Carbon;
use Illuminate\Support\Facades\
{
    Auth,
    File
};

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;


class StudentDashboardController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function notification()
    {
        $notifications = NotificationModel::where('user_id', Auth::user()->id)->orwhereRelation('getUser','user_role',1)->orderby('created_at', 'DESC')->get();
        return view('student.notification.notification', compact('notifications'));
    }
}