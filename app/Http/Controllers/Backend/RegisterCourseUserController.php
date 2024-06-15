<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\RegisterCourseUser;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterCourseUserController extends Controller
{
    public function index()
    {
        $registrations = RegisterCourseUser::with(['course', 'user'])->get();
        return view('backend.register_course_user.index', compact('registrations'));
    }

    public function create()
    {
        $courses = Course::all();
        $users = User::all();
        return view('backend.register_course_user.create', compact('courses', 'users'));
    }

    public function store(Request $request)
    {
        dump($request->register_number);
        dump($request->course_id);
        dump($request->user_id);
        dump($request->note);
        dump($request->status);
        dump($request->deleted);


        // $request->validate([
        //     'register_number' => 'required|string|max:255',
        //     'course_id' => 'required|exists:courses,id',
        //     'user_id' => 'required|exists:users,id',
        // ]);

        RegisterCourseUser::create($request->all());

        return redirect()->route('register_course_user.index')->with('success', 'User registered to course successfully.');
    }

    public function show(RegisterCourseUser $registerCourseUser)
    {
        return view('backend.register_course_user.show', compact('registerCourseUser'));
    }

    public function edit(RegisterCourseUser $registerCourseUser)
    {
        $courses = Course::all();
        $users = User::all();
        return view('backend.register_course_user.edit', compact('registerCourseUser', 'courses', 'users'));
    }

    public function update(Request $request, RegisterCourseUser $registerCourseUser)
    {
        $request->validate([
            'register_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'user_id' => 'required|exists:users,id',
            'note' => 'nullable|string',
            'status' => 'required|string|max:255',
            'deleted' => 'required|in:false,true',
        ]);

        $registerCourseUser->update($request->all());

        return redirect()->route('register_course_user.index')->with('success', 'Registration updated successfully.');
    }

    public function destroy(RegisterCourseUser $registerCourseUser)
    {
        $registerCourseUser->delete();

        return redirect()->route('register_course_user.index')->with('success', 'Registration deleted successfully.');
    }
}
