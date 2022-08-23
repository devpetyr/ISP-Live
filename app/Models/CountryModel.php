<?php

namespace App\Models;

use App\Models\StateModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table= "countries";
    use HasFactory;

    public function getState()
    {
        return $this->belongsTo(StateModel::class,'country_id','id');
    }

}
