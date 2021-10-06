<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Course;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'password',
        'address',
        'trn',
        'd_o_b',
        'tel_number',
        'gender',
        'user_qualification_path',
        'user_pfp_path',
    ];

    protected $table = "users";
    protected $primaryKey = "id";

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected function findCourse()
    {
        return $this->belongsToMany(Course::class,'applications','user_id','course_id')
            ->select('c_name','app_status','payment_status')->withPivot('app_id');
    }
}
