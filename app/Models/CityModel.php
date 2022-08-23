<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CountryModel;
use App\Models\StateModel;


class CityModel extends Model
{
    protected $table= "cities";
    use HasFactory;
    public function getState()
    {
        return $this->belongsTo(StateModel::class,'state_id','id');
    }
    public function getCountry()
    {
        return $this->belongsTo(CountryModel::class,'country_id','id');
    }
}
