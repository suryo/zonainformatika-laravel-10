<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course_detail_id',
        'user_id',
        'grade1',
        'grade2',
        'grade3',
        'status',
        'deleted',
    ];

    // Define the relationships
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
