<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $fillable=[
        'page_name',
        'slug',
        'banner_image',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];
}