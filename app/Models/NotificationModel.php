<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UserRole;

class NotificationModel extends Model
{
    protected $table = "notifications";
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
