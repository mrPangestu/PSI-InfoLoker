<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs'; // Pastikan ini sesuai dengan nama tabel di database
    protected $primaryKey = 'job_id';

    protected $fillable = [
        'job_id', 'jobdesc_id', 'title', 'company', 'desc_company', 'area', 'worktype', 'location', 'position',
        'desc_job', 'salary', 'gender', 'age', 'study_id', 'experience', 'workday_start',
        'workday_end', 'workhour_start', 'workhour_end', 'updated_at'
    ];

    protected $casts = [
        'workhour_start' => 'datetime:H:i',
        'workhour_end' => 'datetime:H:i',
    ];

    public function study()
    {
        return $this->belongsTo(Study::class, 'study_id', 'study_id');
    }
    public function jobdesc()
    {
        return $this->belongsTo(jobdesc::class, 'jobdesc_id', 'jobdesc_id');
    }
    public function apply(){
        return $this->hasMany(apply::class, 'id', 'user_id');
    }
}
