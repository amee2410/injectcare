<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'category_name',
        'product_name', 
        'slug',
        'description',
        'long_desc',
        'image',    
        'banner_image',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];
}
