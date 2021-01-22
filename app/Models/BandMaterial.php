<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandMaterial extends Model
{
    use HasFactory;

    protected $table = 'band_material';

    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class, 'band_material_id');
    }
}
