<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'user_id'];

    public function posted_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Override the default accessor for 'created_at'

    // public function getCreatedAtAttribute($value)
    // {
    //     return Carbon::parse($value)->format('Y-m-d H:i');
    // }

    
    // Add a custom accessor for formatted 'created_at'
    public function getCreatedAtFormattedAttribute()
    {
        return $this->created_at->format('Y-m-d H:i');
    }


}
