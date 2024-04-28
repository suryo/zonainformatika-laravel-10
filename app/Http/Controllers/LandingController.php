<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseDetail;

class LandingController extends Controller
{
    public function index()
    {
        $courses =  Course::all();
        return view('landing', compact('courses'));
    }
    public function showCourse($id)
    {
        $course = Course::find($id);
        $coursedetails = CourseDetail::where('id_course', $course->id)->get();
        return view('coursedetail', compact('course','coursedetails'));
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }
}
