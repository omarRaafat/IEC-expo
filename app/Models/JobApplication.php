<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $table = 'job_applications';
    protected $fillable = [
        "full_name",
  "nationality",
  "birth_date",
  "marital_status",
  "gender",
  "educational_qualification",
  "specialization",
  "english_proficiency",
  "other_languages",
  "training_courses",
  "upload_photo",
  "phone_number",
  "email",
  "work_experience"
    ];
}
