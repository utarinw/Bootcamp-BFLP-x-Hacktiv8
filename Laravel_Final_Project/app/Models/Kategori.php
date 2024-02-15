<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'parent_id',
    ];

    // Define the relationship with parent category
    public function parentCategory()
    {
        return $this->belongsTo(Kategori::class, 'parent_id');
    }

    // Define the relationship with child categories
    public function childCategories()
    {
        return $this->hasMany(Kategori::class, 'parent_id');
    }
}
