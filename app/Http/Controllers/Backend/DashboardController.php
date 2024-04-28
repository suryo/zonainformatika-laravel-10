<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseRoadmap;
use App\Models\CourseTechnology;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Periksa apakah pengguna sudah login
         if (Auth::check()) {
            // Periksa peran pengguna
            $user = Auth::user();
            $role = $user->role->role; // Mendapatkan nama 
            
            $coursesCount = Course::count();
            $courseCategoriesCount = CourseCategory::count();
            $courseRoadmapsCount = CourseRoadmap::count();
            $courseTechnologiesCount = CourseTechnology::count();
    

            // Jika peran adalah 'user', arahkan ke halaman login
            if ($role === 'user') {
                // return redirect()->route('login');
                return view('backend.dashboard.user');
            }

            // Jika peran adalah 'user', arahkan ke halaman login
            if ($role === 'tutor') {
                // return redirect()->route('login');
                return view('backend.dashboard.tutor');
            }

            // Jika peran adalah 'super admin', 'admin', atau 'tutor', tampilkan halaman dashboard
            return view('backend.dashboard.superadmin',compact('coursesCount', 'courseCategoriesCount', 'courseRoadmapsCount', 'courseTechnologiesCount'));
        }

        // Jika pengguna belum login, arahkan ke halaman login
        return redirect()->route('login');
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
        //
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
