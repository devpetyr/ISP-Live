<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafStudentBasicInformationModel extends Model
{
    protected $table= "saf_student_basic_information";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
