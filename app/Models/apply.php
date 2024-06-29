<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apply extends Model
{
    use HasFactory;

    protected $table = 'applies'; // Pastikan ini sesuai dengan nama tabel di database
    protected $primaryKey = 'apply_id';

    protected $fillable = ['apply_id', 'user_id', 'job_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }



}
