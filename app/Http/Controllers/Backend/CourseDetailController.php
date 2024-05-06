<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseDetailController extends Controller
{
    public function index()
    {
        $details = CourseDetail::all();
        return view('details.index', compact('details'));
    }

    public function listcoursedetail($courseslug)
    {
        $coursedetails = CourseDetail::where('course_detail.deleted', 'false')
            ->join('course', 'course_detail.id_course', '=', 'course.id')
            ->where('course.slug', $courseslug)
            ->select('course_detail.*', 'course.id as course_id', 'course.title as course_title', 'course.price as course_price')
            ->get();
        //$coursedetails = CourseDetail::where('id_course', $course->id)->get();
        $course_id = $coursedetails[0]->course_id;
        return view('backend.coursedetail.index', compact('coursedetails', 'course_id'));
    }

    public function create($idcourse)
    {
        $course = Course::find($idcourse);
        return view('backend.coursedetail.create', compact('idcourse', 'course'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            // Your validation rules for other fields here...
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Adjust max file size as needed
        ]);
      

        // Handle image upload
        if ($request->hasFile('image')) {
        
            // Get the file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Concatenate file name with timestamp to make it unique
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Upload the image
            $path = $request->file('image')->storeAs('public/assets/image/course', $fileNameToStore);
          
        } else {
          
            $fileNameToStore = null; // Set a default value if no image is uploaded
        }

        // Create and save the course detail with the image name
        $courseDetail = new CourseDetail();
        $courseDetail->id_course = $request->input('id_course');
        $courseDetail->title = $request->input('title');
        $courseDetail->short_desc = $request->input('short_desc');
        $courseDetail->text = $request->input('text');
        $courseDetail->type = $request->input('type');
        $courseDetail->image = $request->input('image');
        $courseDetail->video = $request->input('video');
        $courseDetail->quote_text = $request->input('quote_text');
        $courseDetail->quote_author = $request->input('quote_author');
        $courseDetail->author = $request->input('author');
        $courseDetail->slug = $request->input('slug');
        $courseDetail->status = $request->input('status');
        $courseDetail->order = $request->input('order');
        $courseDetail->deleted = $request->input('deleted');
        $courseDetail->category_id = $request->input('category_id');

        $courseDetail->image = $fileNameToStore; // Assign the image name
        $courseDetail->save();

        return redirect()->to('/course/' . $request->slug_course . '/list');
        
    }

    public function show(CourseDetail $detail)
    {
        return view('backend.coursedetail.show', compact('detail'));
    }

    public function edit($course_id, $course_detail_id)
    {
        $courseDetail = CourseDetail::where('id', $course_detail_id)->get();
        $courseDetail = ($courseDetail[0]);
        return view('backend.coursedetail.edit', compact('courseDetail', 'course_id', 'course_detail_id'));
    }

    public function update(Request $request, CourseDetail $detail)
    {
        // dump($request->course_id);
        // dd($request->course_detail_id);

        $course = Course::where('id', $request->course_id)->get();
        $course_slug = $course[0]->slug;
        
        $detail->update($request->all());
        return redirect()->to('/course/' . $course_slug. '/list');
        //return redirect()->route('coursesdetail.list');
        
    }

    public function destroy(CourseDetail $detail)
    {
        $detail->delete();
        return redirect()->route('coursesdetail.list');
    }
}
