<?php

namespace App\Models\Saf;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Saf\SafFeePaymentModel;

class SafFeesModel extends Model
{
    protected $table= "saf_fees";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
        public function getPayment()
    {
        return $this->hasOne(SafFeePaymentModel::class,'std_app_fee_id','id');
    }

}
