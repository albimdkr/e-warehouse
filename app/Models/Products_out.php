<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_out extends Model
{
    use HasFactory;

    protected $table = 'products_out';
 
    protected $fillable = [
        'title',
        'price',
        'product_code',
        'description',
        'category'
    ];
}