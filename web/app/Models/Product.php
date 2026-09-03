<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'slug', 'description', 'price_idr',
        'weight_label', 'weight_grams', 'badge', 'image',
        'ci_frequency', 'is_featured', 'is_active',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price_idr, 0, ',', '.');
    }

    public function getUsdPriceAttribute(): string
    {
        return '~$' . number_format($this->price_idr / 16000, 2) . ' USD';
    }

    public function getWaUrlAttribute(): string
    {
        $number = config('toko.wa_number');
        $text = rawurlencode("Halo Toko Kelontong, saya tertarik dengan {$this->name}");
        return "https://wa.me/{$number}?text={$text}";
    }
}
