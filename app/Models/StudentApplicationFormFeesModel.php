<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\StudentApplicationFormFeePaymentModel;

class StudentApplicationFormFeesModel extends Model
{
    protected $table= "student_application_form_fees";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
        public function getPayment()
    {
        return $this->hasOne(StudentApplicationFormFeePaymentModel::class,'std_app_fee_id','id');
    }

}
