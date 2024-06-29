<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobDetail extends Model
{
    use HasFactory;

    protected $fillable = ['jobdetail_id, job_id, area, study_id, gender, experience, position, workingday_start, workingday_end, workinghour_start, ,  description'];


}
