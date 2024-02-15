<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'category_id',
        'price',
        'weight',
        'img_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
