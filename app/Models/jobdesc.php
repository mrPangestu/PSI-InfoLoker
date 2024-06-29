<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobdesc extends Model
{
    use HasFactory;

    protected $fillable = ['jobdesc_id','title'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'jobdesc_id', 'jobdesc_id');
    }

}
