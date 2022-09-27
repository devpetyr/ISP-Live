<?php

namespace App\Models\Haf;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CityModel;
use App\Models\StateModel;

class HafBasicInformationModel extends Model
{
    protected $table= "haf_basic_host_informations";
    use HasFactory;
    public function userHostApplication()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
    public function getCity()
    {
        return $this->belongsTo(CityModel::class, 'city_id','id');
    }
    public function getState()
    {
        return $this->belongsTo(StateModel::class, 'state_id','id');
    }



}
