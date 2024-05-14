<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('backend.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('backend.courses.create');
    }

    public function store(Request $request)
    {
        //Course::create($request->all());
        $cours = new Course();
        $cours->title = $request->input('title');
        $cours->text = $request->input('text');
        $cours->short_desc = $request->input('short_desc');
        $cours->text = $request->input('text');
       
        $cours->author = $request->input('author');
        $cours->slug = $request->input('slug');

        $cours->category_id = $request->input('category_id');

        $cours->save();
        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        return view('backend.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('backend.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }

    public function updateStatus(Request $request, $id)
    {
        // Cari order detail berdasarkan ID
        $Course = Course::findOrFail($id);

        // Periksa apakah status order detail adalah 'inactive'
        if ($Course->status == 'inactive') {
            // Jika ya, ubah status menjadi 'active'
            $Course->status = 'active';
            $Course->save();

            // Redirect kembali ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Order detail status has been updated successfully.');
        } else if ($Course->status == 'active') {
             // Jika ya, ubah status menjadi 'active'
             $Course->status = 'inactive';
             $Course->save();
 
             // Redirect kembali ke halaman sebelumnya dengan pesan sukses
             return redirect()->back()->with('success', 'Order detail status has been updated successfully.');
        } else {
            // Jika status bukan 'inactive', beri pesan error
            return redirect()->back()->with('error', 'Order detail status is not inactive.');
        }
    }
}
