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

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            // tambahkan validasi untuk field lainnya
        ]);
        $roadmap = CourseRoadmap::findOrFail($id);
        $roadmap->update($request->all());
        if ($roadmap->update($validatedData)) {
            return redirect()->route('course_roadmaps.index')->with('success', 'Roadmap updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update roadmap. Please try again.');
        }
    }

    public function destroy(CourseRoadmap $roadmap)
    {
        $roadmap->delete();
        return redirect()->route('course_roadmaps.index');
    }
}