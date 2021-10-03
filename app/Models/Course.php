<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public $table = 'courses';

    public $fillable =[
        'c_name',
        'c_price',
        'end_date',
        'start_date',
        'award',
        'format',
        'description',
        'location',
        'c_photo',
    ];
}
