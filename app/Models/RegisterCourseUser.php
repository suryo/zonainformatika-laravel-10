<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterCourseUser extends Model
{
    use HasFactory;

    protected $table = 'register_course_user';

    protected $fillable = [
        'register_number',
        'course_id',
        'user_id',
        'note',
        'status',
        'deleted',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
