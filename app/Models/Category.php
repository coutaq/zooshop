<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    public function products()
    {
        // dd('test');
        return $this->hasManyThrough(Product::class, Subcategory::class, 'category_id', 'subcategory_id', 'id', 'id');
    }
}
