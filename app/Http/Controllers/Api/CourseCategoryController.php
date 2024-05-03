<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Course;
use Illuminate\Support\Facades\DB;


class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coursecategories = CourseCategory::all();
        return response()->json($coursecategories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // $courses = DB::table('course')
        //     ->where('category_id', 1)
        //     ->get();



        $coursecategory = Coursecategory::find($id);
        $courses = Course::where('category_id', $coursecategory->id)->get()->toArray();
        // $coursecategory->asik = $courses;
        
        
      
        
        // Return modified response
        return response()->json([
            'coursecategory' => $coursecategory,
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
