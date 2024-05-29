<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'project',
        'author',
        'price',
        'file_project',
        'slug',
        'status',
        'short_desc',
        'desc',
        'deleted',
    ];
}
