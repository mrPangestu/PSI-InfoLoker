<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apply extends Model
{
    protected $table = 'applies';
    protected $primaryKey = 'apply_id';
    protected $fillable = ['user_id', 'job_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }

    // Mengembalikan Builder untuk menemukan semua aplikasi dengan job_id yang diberikan
    public function scopeByJob(Builder $query, $job_id): Builder
    {
        return $query->where('job_id', $job_id);
    }
}

