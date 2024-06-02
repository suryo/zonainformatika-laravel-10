<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\CourseDetail;
use App\Models\Cart;
use App\Models\LogActivity;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $categories = $request->input('categories');

        $technologies = $request->input('technologies');


        // Ambil data kursus berdasarkan kategori jika ada
        if ($categories) {
            $courses = Course::where('deleted', 'false')
            ->where('status','=','active')
            ->where('category_id', $categories)
            ->get();
        } else {
            $courses = Course::where('deleted', 'false')
            ->where('status','=','active')->get();
        }
      
        if ($technologies) {
            $courses = Course::where('deleted', 'false')
            ->where('status','=','active')
            ->where('technology_id', $technologies)
            ->get();
        } else {
            $courses = Course::where('deleted', 'false')
            ->where('status','=','active')->get();
        }

      
        return view('landing', compact('courses'));
    }

    public function landing()
    {
        $courses = Course::where('course.deleted', 'false')
        ->where('course.status','=','active')
        ->join('course_category', 'course_category.id', '=', 'course.category_id')
        ->leftjoin('course_technology', 'course_technology.id', '=', 'course.technology_id')
        ->select('course.*', 'course_category.name as category', 'course_technology.name as technology')
        ->with('courseDetails')
        ->get();
        
        // foreach ($courses as $course) {
        //     dump("Course Title: " . $course->title . "\n");
        //     dump(count($course->courseDetails));
        //     // Akses detail course
        //     foreach ($course->courseDetails as $detail) {
        //         dump("Detail Title: " . $detail->title . "\n");
        //         Tambahkan output detail course lainnya sesuai kebutuhan
        //     }
        //     dump("\n");
        // }
       
        
        
        // dd("test");
        
        
        
         //dd($courses);
        return view('newlanding', compact('courses'));
    }
    public function showCourse($id)
    {

        $user = auth()->user();
        $availability_on_cart = 0;
        $availability = 0;
        if(!isset($user)){
            $subscribe = OrderDetail::where('order_details.deleted', 'false')
            ->join('orders', 'orders.nomerorder', '=', 'order_details.nomerorder')
            ->select('order_details.*', 'orders.status as orders_status', 'orders.payment_status as orders_payment_status')
            ->get();
        }
        else
        {
            $subscribe = OrderDetail::where('order_details.deleted', 'false')
            ->join('orders', 'orders.nomerorder', '=', 'order_details.nomerorder')
            ->where('user_id','=',$user->id)
            ->where('order_details.course_id','=', $id)
            ->select('order_details.*', 'orders.status as orders_status', 'orders.payment_status as orders_payment_status')
            ->get();

            $cart = Cart::where('course_id', $id)
            ->where('user_id',$user->id)
            ->where('deleted','false')
            ->get();
    
            $availability_on_cart = count($cart);
            $availability = count($subscribe);
    
        }


    
        $course = Course::find($id);
        if ($course->price == 0) {
            $availability_on_cart = 1;
            $availability = 1;
            $subscribe = [
                (object) [
                    "orders_payment_status" => "paid",
                    "status" => "active"
                ]
            ];
        }

       
        if(isset($user)){
            LogActivity::create([
                'user_id' => Auth::user()->id,
                'activity' => 'Open '.$course->title,
            ]);
        }
      

      
        $coursedetails = CourseDetail::where('id_course', $course->id)
        ->where('status','active')
        ->get();
        return view('coursedetail', compact('course','coursedetails','subscribe', 'availability', 'availability_on_cart'));
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
