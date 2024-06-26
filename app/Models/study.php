<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    use HasFactory;

    protected $fillable = ['study_id','title'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'study_id', 'study_id');
    }
}
