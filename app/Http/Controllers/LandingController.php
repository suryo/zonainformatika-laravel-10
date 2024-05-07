<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\CourseDetail;
use App\Models\Cart;

class LandingController extends Controller
{
    public function index()
    {
        // $courses =  Course::all();
        $courses = Course::where('deleted', 'false')
        ->where('status','=','active')->get();

      
        return view('landing', compact('courses'));
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
        $coursedetails = CourseDetail::where('id_course', $course->id)->get();
        return view('coursedetail', compact('course','coursedetails','subscribe', 'availability', 'availability_on_cart'));
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
