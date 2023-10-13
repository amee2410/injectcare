<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class missionvision extends Model
{
    use HasFactory;
    protected $fillable = [
        'mission_title',
        'mission_image',
        'mission_description',
        'vision_title',
        'vision_image',
        'vision_description',
        'core_title',
        'core_image',
        'core_description',
    ];
}
