<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'slug',
        'short_desc',
        'description',
        'image',
        'large_img',
        'views',
        'banner_image',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];
}

