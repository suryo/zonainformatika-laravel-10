<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table ='course';
    protected $fillable = [
        'title', 'short_desc', 'text', 'type', 'image', 'image_landscape',
        'image_square', 'level', 'price_buy', 'price_rent', 'video', 'quote_text',
        'quote_author', 'author', 'slug', 'status', 'images_code', 'order',
        'category_id', 'technology_id', 'deleted'
    ];

    // Definisikan hubungan dengan model CourseCategory
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    // Definisikan hubungan dengan model CourseTechnology (jika ada)
    public function technology()
    {
        return $this->belongsTo(CourseTechnology::class, 'technology_id');
    }
}
