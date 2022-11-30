<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [

        'cate_id',
        'name',
        'slug',
        'small_descriptuin',
        'descriptuin',
        'original_price',
        'selling_price',
        'image',
        'tax',
        'status',
        'trending',
        'meta_tittle',
        'meta_keywords',
        'meta_description',
    ];
}
