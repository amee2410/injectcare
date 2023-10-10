<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_title',
        'sub_title',
        'about_image',
        'description',
        'point1',
        'point2',
        'point3',
        'point4',
        'btn_link',

    ];
}
