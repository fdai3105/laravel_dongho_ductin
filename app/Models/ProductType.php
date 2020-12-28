<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_type';

    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
