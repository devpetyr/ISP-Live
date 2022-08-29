<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RegionModel;

class SchoolModel extends Model
{
    protected $table= "schools";
    use HasFactory;
    
    public function getRegion(){
        return $this->belongsTo(RegionModel::class,'region_id','id');
    }

}