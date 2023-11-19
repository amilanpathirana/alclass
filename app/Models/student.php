<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable =[
        'qrcode',
        'subject',
        'teacher',
        'month',
        'year',
        'uses',
        'usestoday'
    ];
}
