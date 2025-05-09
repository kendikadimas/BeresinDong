<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $casts = [
        'schedule' => 'datetime',
        'total_price' => 'decimal:2'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function proofs() {
        return $this->hasMany(OrderProof::class);
    }

    public function warrantyClaim() {
        return $this->hasOne(WarrantyClaim::class);
    }

    public function originalTukang() {
        return $this->belongsTo(User::class, 'original_tukang_id');
    }

    // Relasi ke Rating
    public function rating(): HasOne
    {
        return $this->hasOne(Rating::class);
    }
}
