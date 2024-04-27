<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;
    protected $table ='course_category';
    protected $fillable = ['name', 'image', 'slug', 'status', 'deleted'];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
