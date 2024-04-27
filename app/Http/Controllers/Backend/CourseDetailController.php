<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CourseDetail;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    public function index()
    {
        $details = CourseDetail::all();
        return view('details.index', compact('details'));
    }

    public function create()
    {
        return view('details.create');
    }

    public function store(Request $request)
    {
        CourseDetail::create($request->all());
        return redirect()->route('details.index');
    }

    public function show(CourseDetail $detail)
    {
        return view('details.show', compact('detail'));
    }

    public function edit(CourseDetail $detail)
    {
        return view('details.edit', compact('detail'));
    }

    public function update(Request $request, CourseDetail $detail)
    {
        $detail->update($request->all());
        return redirect()->route('details.index');
    }

    public function destroy(CourseDetail $detail)
    {
        $detail->delete();
        return redirect()->route('details.index');
    }
}
