<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';

    protected $fillable = ['name'];

    public function image()
    {
        return $this->hasMany(Image::class, 'brand_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class,'brand_id');
    }
}
