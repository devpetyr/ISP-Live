<?php

namespace App\Models\Saf;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafFeePaymentModel extends Model
{
    protected $table= "saf_fee_payment";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
