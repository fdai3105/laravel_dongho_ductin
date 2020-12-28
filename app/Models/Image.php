<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'image';

    protected $fillable = ['thumbnail', 'image'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function product()
    {
        return $this->belongsTo(Brand::class, 'product_id');
    }
}
