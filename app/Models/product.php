<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'category_id',
        'size',
        'price',
        'sex',
        'image',
        'description',
        'status',
        'is_favorite',
    ];

    /**
     * Define the relationship with the Category model.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

