<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseTechnology;

class CourseTechnologyController extends Controller
{
    public function index()
    {
        $technologies = CourseTechnology::all();
        return view('backend.technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('backend.technologies.create');
    }

    public function store(Request $request)
    {
        CourseTechnology::create($request->all());
        return redirect()->route('course_technologies.index');
    }

    public function show(CourseTechnology $technology)
    {
        return view('backend.technologies.show', compact('technology'));
    }

    public function edit(CourseTechnology $technology)
    {
        return view('backend.technologies.edit', compact('technology'));
    }

    public function update(Request $request, CourseTechnology $technology)
    {
        $technology->update($request->all());
        return redirect()->route('course_technologies.index');
    }

    public function destroy(CourseTechnology $technology)
    {
        $technology->delete();
        return redirect()->route('course_technologies.index');
    }
}
