<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CourseRoadmap;
use Illuminate\Http\Request;

class CourseRoadmapController extends Controller
{
    public function index()
    {
        $roadmaps = CourseRoadmap::all();
        return view('backend.roadmaps.index', compact('roadmaps'));
    }

    public function create()
    {
        return view('backend.roadmaps.create');
    }

    public function store(Request $request)
    {
        CourseRoadmap::create($request->all());
        return redirect()->route('roadmaps.index');
    }

    public function show(CourseRoadmap $roadmap)
    {
        return view('backend.roadmaps.show', compact('roadmap'));
    }

    public function edit(CourseRoadmap $roadmap)
    {
        return view('backend.roadmaps.edit', compact('roadmap'));
    }

    public function update(Request $request, CourseRoadmap $roadmap)
    {
        $roadmap->update($request->all());
        return redirect()->route('course_roadmaps.index');
    }

    public function destroy(CourseRoadmap $roadmap)
    {
        $roadmap->delete();
        return redirect()->route('course_roadmaps.index');
    }
}