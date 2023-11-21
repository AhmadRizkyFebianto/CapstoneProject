<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'stock'
    ];

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }

    public function carts()
    {
        return $this->hasMany(Carts::class);
    }
}