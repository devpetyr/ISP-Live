<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AgencyModel;

class AgentModel extends Model
{
    protected $table= "agents";
    use HasFactory;
    
    public function agencyRelation()
    {
        return $this->hasOne(AgencyModel::class,'id','agency_id');
    }

}
