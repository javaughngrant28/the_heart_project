<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Course;

class Application extends Model
{
    use HasFactory;


    protected $primaryKey = "app_id";
    protected $table = "applications";

    protected $fillable = [
        'user_id',
        'course_id',
        'app_status',
        'payment_status',
    ];



}

