<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCrud extends Model
{
    use HasFactory;

    protected $table = 'test_crud';

    protected $fillable = [
        'content',
        'author',
        'price',
        'file_content',
        'slug',
        'status',
        'short_desc',
        'desc',
        'deleted',
    ];
}
