<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Project;


class FrontProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::where('project.deleted', 'false')
        ->get();
        
        return view('project', compact('projects'));
    }

   
    public function showProject($id)
    {
        $user = auth()->user();
        $Project = Project::find($id);
       
        return view('projectdetail', compact('Project'));
    }

    public function search(Request $request)
    {
      
        $query = $request->input('query');
        $courses = Course::where('deleted', 'false')
                         ->where('status','=','active')
                         ->where('title', 'like', '%' . $query . '%')
                         ->get();
                        
        return view('course-list', compact('courses'));
    }

   
}
