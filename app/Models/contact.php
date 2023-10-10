<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable =[
        'email',
        'phone1',
        'phone2',
        'phone3',
        'address',
        'map_link',
    ];
}
