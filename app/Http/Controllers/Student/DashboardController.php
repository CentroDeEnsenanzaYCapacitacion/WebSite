<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $student = auth('student')->user()->load(['course', 'crew']);

        
        $showExamGuide = false;
        if ($student->course && $student->course->name) {
            $showExamGuide = stripos($student->course->name, 'bachillerato en un examen') !== false;
        }

        return view('student.dashboard', compact('student', 'showExamGuide'));
    }
}
