<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'price',
        'discount',
        'amount',
        'image',
        'subcategory_id',
        'brand_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'double',
        'discount' => 'double',
        'subcategory_id' => 'integer',
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function category()
    {
        return $this->hasOneThrough(Subcategory::class,Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
