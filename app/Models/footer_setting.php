<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer_setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'footer_logo',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'youtube_link',
        'linkedin_link',
        'desc',
    ];
}
