<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $table = 'jobs'; // Pastikan ini sesuai dengan nama tabel di database
    protected $primaryKey = 'job_id';

    protected $fillable = ['job_id', 'jobdesc_id', 'title', 'company', 'location', 'study_id', 'salary', 'created_at', 'updated_at'];

    public function study()
    {
        return $this->belongsTo(Study::class, 'study_id', 'study_id');
    }
}
