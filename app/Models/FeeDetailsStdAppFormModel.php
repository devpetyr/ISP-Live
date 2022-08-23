<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeDetailsStdAppFormModel extends Model
{
    protected $table= "fee_details_student_application_form";
    use HasFactory;

//    public function getState()
//    {
//        return $this->belongsTo(StateModel::class,'country_id','id');
//    }

}
