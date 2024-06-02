<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogActivity;

class LogActivityController extends Controller
{
    public function index()
    {
        $logActivities = LogActivity::latest()->get();
        return view('log_activity', compact('logActivities'));
    }
}
