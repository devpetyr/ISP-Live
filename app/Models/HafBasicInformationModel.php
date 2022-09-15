<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class HafBasicInformationModel extends Model
{
    protected $table= "haf_basic_host_informations";
    use HasFactory;
    public function userHostApplication()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }



}
