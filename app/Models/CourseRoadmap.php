<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRoadmap extends Model
{
    use HasFactory;

    protected $table ='course_roadmap';
    protected $fillable = [
        'title', 'short_desc', 'text', 'type', 'image', 'image_landscape',
        'image_square', 'level', 'video', 'quote_text',
        'quote_author', 'author', 'slug', 'status', 'images_code', 'order',
        'category_id'
    ];

    // Definisikan hubungan dengan model CourseCategory
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }
}


