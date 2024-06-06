<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pricing extends Model
{
    use HasFactory;

    protected $table = 'pricing';
    protected $fillable = [
        'price', 'category_id', 'name', 'description'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Pricing::class);
    }
}
