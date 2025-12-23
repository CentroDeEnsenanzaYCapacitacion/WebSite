<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Services\PaymentStatusService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $paymentStatusService;

    public function __construct(PaymentStatusService $paymentStatusService)
    {
        $this->paymentStatusService = $paymentStatusService;
    }

    public function index()
    {
        $student = auth('student')->user()->load(['course', 'crew', 'paymentPeriodicity']);

        $showExamGuide = false;
        if ($student->course && $student->course->name) {
            $showExamGuide = stripos($student->course->name, 'bachillerato en un examen') !== false;
        }

        $paymentStatus = $this->paymentStatusService->calculatePaymentStatus($student);

        return view('student.dashboard', compact('student', 'showExamGuide', 'paymentStatus'));
    }
}
