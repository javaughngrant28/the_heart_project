<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Application;

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
        'is_featured',
    ];


    protected function findUsers()
    {
       return $this->belongsToMany(User::class,'applications','course_id','user_id')
           ->select('id','f_name','l_name')->withPivot('course_id','app_status','payment_status');/*->withPivot('app_status','payment_status')
           ->select('course_id','user_id','app_status','payment_status');*/
    }

}
