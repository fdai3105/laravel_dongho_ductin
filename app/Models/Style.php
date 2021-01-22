<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $table = 'style';

    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class, 'style_id');
    }
}
