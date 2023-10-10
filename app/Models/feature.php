<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'feature1',
        'feature3',
        'feature3',
        'feature4',
        'icon1',
        'icon2',
        'icon3',
        'icon4',
        'description1',
        'description2',
        'description3',
        'time1',
        'time2',
        'time3',
        'day1',
        'day2',
        'day3',
        'btn1_link',
        'btn2_link',
        'btn1_name',
        'btn2_name',
        'phone',
    ];
}
