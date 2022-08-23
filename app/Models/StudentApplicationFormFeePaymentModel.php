<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentApplicationFormFeePaymentModel extends Model
{
    protected $table= "student_application_fee_payment";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
