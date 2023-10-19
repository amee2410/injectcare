<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header_setting extends Model
{
    use HasFactory;
    protected $fillable=[
        'header_logo',
        'favicon',
    ];
}
