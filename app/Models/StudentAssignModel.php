<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class StudentAssignModel extends Model
{
    protected $table= "student_assigns";
    use HasFactory;
    public function getUser()
    {
        return $this->belongsTo(User::class, 'student_id','id');
    }
}
