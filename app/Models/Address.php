<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = ['city', 'district', 'ward'];

    public $timestamps = true;

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function address()
    {
        return $this->hasMany(Order::class, 'address_id');
    }
}
