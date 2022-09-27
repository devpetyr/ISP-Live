<?php

namespace App\Models\saf;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CityModel;
use App\Models\StateModel;

class SafStudentInformationModel extends Model
{
    protected $table= "saf_student_information";
    use HasFactory;
    
    // public function getCity()
    // {
    //     return $this->belongsTo(CityModel::class, 'city_id','id');
    // }
    public function getState()
    {
        return $this->belongsTo(StateModel::class, 'school_state','id');
    }

}
