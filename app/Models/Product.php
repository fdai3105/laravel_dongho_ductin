<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'id', 'name', 'desc', 'size', 'price', 'material',
        'style', 'waterproof', 'band_material',
        'warranty', 'gender', 'discount',
        'brand_id', 'category_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class,'cart_id');
    }

    public function image()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function bandMaterial()
    {
        return $this->belongsTo(BandMaterial::class, 'band_material_id');
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }
    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }
}
