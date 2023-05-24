<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'variation',
        'price',
    ];

    
    public function variation() {
        return $this->belongsTo(\App\Models\Variation::class);
    }
}
