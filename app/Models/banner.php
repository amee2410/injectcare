<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $fillable=[
        'banner_title',
        'sub_title',
        'title1',
        'title2',
        'title3',
        'banner_image',
        'read_more_link',
        'contact_us_link'
    ];
}
