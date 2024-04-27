<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;
    protected $table ='course_detail';
    protected $fillable = [
        'id_course', 'title', 'short_desc', 'text', 'type', 'image', 'video',
        'quote_text', 'quote_author', 'author', 'slug', 'status', 'images_code',
        'order', 'category_id', 'created_at', 'updated_at', 'deleted'
    ];

    // Definisikan hubungan dengan model Course
    public function course()
    {
        return $this->belongsTo(Course::class, 'id_course');
    }
}
