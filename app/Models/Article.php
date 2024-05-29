<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = [
        'title',
        'short_desc',
        'text',
        'type',
        'image',
        'image_landscape',
        'image_square',
        'quote_text',
        'quote_author',
        'author',
        'slug',
        'status',
        'article_category_id',
        'deleted',
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }
}
