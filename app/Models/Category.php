<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [

        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'meta_tittle',
        'meta_descrip',
        'meta_keywords',
        

    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id','id');
    }
}


