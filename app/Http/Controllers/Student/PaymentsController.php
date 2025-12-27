<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Receipt;
use App\Services\PaymentStatusService;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    protected $paymentStatusService;

    public function __construct(PaymentStatusService $paymentStatusService)
    {
        $this->paymentStatusService = $paymentStatusService;
    }

    public function index()
    {
        $student = Auth::guard('student')->user()->load('paymentPeriodicity');

        $receipts = Receipt::where('student_id', $student->id)
            ->with(['receiptType', 'paymentType'])
            ->orderBy('id', 'asc')
            ->get();

        $totalPaid = $receipts->sum(function($receipt) {
            return floatval($receipt->amount);
        });

        $lastPayment = $receipts->last();

        $paymentStatus = $this->paymentStatusService->calculatePaymentStatus($student);

        return view('student.payments.index', compact('student', 'receipts', 'totalPaid', 'lastPayment', 'paymentStatus'));
    }
}
