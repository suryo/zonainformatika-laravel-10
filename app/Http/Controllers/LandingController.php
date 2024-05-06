<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Order;
use App\Models\OrderDetail;
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
        $user = auth()->user();

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
            ->select('order_details.*', 'orders.status as orders_status', 'orders.payment_status as orders_payment_status')
            ->get();
        }

       
        $availability = count($subscribe);
    
        $course = Course::find($id);
        $coursedetails = CourseDetail::where('id_course', $course->id)->get();
        return view('coursedetail', compact('course','coursedetails','subscribe', 'availability'));
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
