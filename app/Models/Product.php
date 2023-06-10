<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array'
    ];
    public $timestamps = false;
    protected $fillable = [
        'jurusan',
        'name',
        'stock',
        'description',
        'price',
        'wa',
        'category',
        'images',
        'user_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
