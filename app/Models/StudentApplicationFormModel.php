<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class StudentApplicationFormModel extends Model
{
    protected $table= "student_application_form";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getStdAppFormImage()
    {
        return $this->hasMany(ImageStdAppFormModel::class,'std_app_form_id','id');
    }
    public function getStdAppFormStudentDetails()
    {
        return $this->belongsTo(StudentDetailsStdAppFormModel::class,'student_form_details_id','id');
    }
    public function getStdAppFormAgent()
    {
        return $this->belongsTo(AgentModel::class,'agency_id','id');
    }
    public function getStdAppFormRequestedAgent()
    {
        return $this->belongsTo(RequestedAgencyStdAppFormModel::class,'requested_agency_id','id');
    }
    public function getStdAppFormEmergencyDetails()
    {
        return $this->belongsTo(EmergencyDetailsStdAppFormModel::class,'emergency_details_id','id');
    }
    public function getStdAppFormSchoolDetails()
    {
        return $this->belongsTo(SchoolDetailsStdAppFormModel::class,'school_form_details_id','id');
    }
    public function getStdAppFormOtherDetails()
    {
        return $this->belongsTo(OtherDetailsStdAppFormModel::class,'other_details_id','id');
    }
    public function getStdAppFormAirportDetails()
    {
        return $this->belongsTo(AirportDetailsStdAppFormModel::class,'airport_details_id','id');
    }
    public function getStdAppFormFeeDetails()
    {
        return $this->belongsTo(FeeDetailsStdAppFormModel::class,'fee_details_id','id');
    }
    public function getStdAppFormCardholderDetails()
    {
        return $this->belongsTo(CardholderDetailsStdAppFormModel::class,'cardholder_details_id','id');
    }
    public function getStdAppFormCreditCardDetails()
    {
        return $this->belongsTo(CreditCardDetailsStdAppFormModel::class,'creditcard_details_id','id');
    }
    public function getStdAppFormElectronicDetails()
    {
        return $this->belongsTo(ElectronicFormStdAppFormModel::class,'electronic_form_id','id');
    }
    public function getProgram()
    {
        return $this->belongsTo(ProgramModel::class,'program_id','id');
    }

}
