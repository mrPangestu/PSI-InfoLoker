<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;

    protected $table = 'favorites'; // Pastikan ini sesuai dengan nama tabel di database
    protected $primaryKey = 'favorite_id';

    protected $fillable = ['favorite_id', 'user_id', 'job_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }
}
