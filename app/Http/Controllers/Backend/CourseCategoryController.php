<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $categories = CourseCategory::all();
        return view('backend.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        CourseCategory::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(CourseCategory $category)
    {
        return view('backend.categories.show', compact('category'));
    }

    public function edit(CourseCategory $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    public function update(Request $request, CourseCategory $category)
    {
        $category->update($request->all());
        return redirect()->route('course_categories.index');
    }

    public function destroy(CourseCategory $category)
    {
        $category->delete();
        return redirect()->route('course_categories.index');
    }
}
