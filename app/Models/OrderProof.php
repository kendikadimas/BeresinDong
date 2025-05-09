<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProof extends Model
{
    protected $fillable = [
        'order_id',
        'image_path',
        'notes',
        'uploaded_by' // 'tukang' atau 'customer'
    ];

    // Relasi ke Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi ke User (yang upload)
    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by_user_id');
    }
}