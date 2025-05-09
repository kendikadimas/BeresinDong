<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    protected $fillable = [
        'order_id',
        'user_id', // yang memberi rating
        'score',
        'review'
    ];

    // Relasi ke Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi ke User (yang memberi rating)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Tukang (via Order)
    public function tukang()
    {
        return $this->hasOneThrough(
            User::class,
            Order::class,
            'id', // FK di orders
            'id', // FK di users
            'order_id', // Local key di ratings
            'tukang_id' // Local key di orders
        );
    }
}