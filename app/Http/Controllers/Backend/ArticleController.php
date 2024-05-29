<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('backend.article.index', compact('articles'));
    }

    public function create()
    {
        $categories = ArticleCategory::all();
        return view('backend.article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'short_desc' => 'nullable|string',
            'text' => 'required|string',
            'type' => 'nullable|string',
            'image' => 'nullable|string',
            'image_landscape' => 'nullable|string',
            'image_square' => 'nullable|string|max:255',
            'quote_text' => 'nullable|string',
            'quote_author' => 'nullable|string',
            'author' => 'required|string|max:191',
            'slug' => 'required|string|max:191|unique:article',
            'status' => 'nullable|string|max:191',
            'article_category_id' => 'required|exists:article_category,id',
        ]);

        Article::create($request->all());

        return redirect()->route('article.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article)
    {
        return view('backend.article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $categories = ArticleCategory::all();
        return view('backend.article.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'short_desc' => 'nullable|string',
            'text' => 'required|string',
            'type' => 'nullable|string',
            'image' => 'nullable|string',
            'image_landscape' => 'nullable|string',
            'image_square' => 'nullable|string|max:255',
            'quote_text' => 'nullable|string',
            'quote_author' => 'nullable|string',
            'author' => 'required|string|max:191',
            'slug' => 'required|string|max:191|unique:article,slug,' . $article->id,
            'status' => 'nullable|string|max:191',
            'article_category_id' => 'required|exists:article_category,id',
        ]);

        $article->update($request->all());

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article deleted successfully.');
    }
}
