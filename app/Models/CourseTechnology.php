<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTechnology extends Model
{
    use HasFactory;


    protected $table ='course_technology';
    protected $fillable = [
        'name', 'image', 'slug', 'status', 'deleted'
    ];
}
