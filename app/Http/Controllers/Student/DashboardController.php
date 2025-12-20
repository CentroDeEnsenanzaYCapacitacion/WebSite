<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the student dashboard.
     */
    public function index()
    {
        $student = auth('student')->user()->load(['course', 'crew']);
        return view('student.dashboard', compact('student'));
    }
}
