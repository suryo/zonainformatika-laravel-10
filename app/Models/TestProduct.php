<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestProduct extends Model
{
    use HasFactory;

    protected $table = 'test_product';

    protected $fillable = [
        'name',
        'desc',
        'price',
        'image_url',
        'slug',
        'status',
        'deleted',
    ];
}
