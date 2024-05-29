<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $categories = ArticleCategory::all();
        return view('backend.articlecategory.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.articlecategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:191',
            'slug' => 'required|string|max:191|unique:article_category',
            'status' => 'nullable|string|max:191',
        ]);

        ArticleCategory::create($request->all());

        return redirect()->route('articlecategory.index')->with('success', 'Article Category created successfully.');
    }

    public function show(ArticleCategory $articleCategory)
    {
        return view('backend.articlecategory.show', compact('articleCategory'));
    }

    public function edit(ArticleCategory $articleCategory)
    {
        return view('backend.articlecategory.edit', compact('articleCategory'));
    }

    public function update(Request $request, ArticleCategory $articleCategory)
    {
        $request->validate([
            'category' => 'required|string|max:191',
            'slug' => 'required|string|max:191|unique:article_category,slug,' . $articleCategory->id,
            'status' => 'nullable|string|max:191',
        ]);

        $articleCategory->update($request->all());

        return redirect()->route('articlecategory.index')->with('success', 'Article Category updated successfully.');
    }

    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();

        return redirect()->route('articlecategory.index')->with('success', 'Article Category deleted successfully.');
    }
}
