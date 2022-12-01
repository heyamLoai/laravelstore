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
        'quantity',
        'status',
        'trending',
        'meta_tittle',
        'meta_keywords',
        'meta_description',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
