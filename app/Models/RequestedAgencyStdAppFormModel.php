<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedAgencyStdAppFormModel extends Model
{
    protected $table= "requested_agency_student_application_form";
    use HasFactory;

//    public function getState()
//    {
//        return $this->belongsTo(StateModel::class,'country_id','id');
//    }

}
