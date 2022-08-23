<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageStdAppFormModel extends Model
{
    protected $table= "images_student_application_form";
    use HasFactory;

    public function getImgStdAppForm()
    {
        return $this->belongsTo(StudentApplicationFormModel::class,'std_app_form_id','id');
    }

}
