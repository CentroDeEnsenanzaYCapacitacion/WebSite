<?php

namespace App\Services;

use App\Models\Student;
use Carbon\Carbon;

class PaymentStatusService
{
    public function calculatePaymentStatus(Student $student)
    {
        if (!$student->start || !$student->tuition || !$student->payment_periodicity_id) {
            return [
                'status' => 'pending_info',
                'message' => 'Información incompleta',
                'months_owed' => 0,
                'total_owed' => 0,
                'expected_payments' => 0,
                'payments_made' => 0,
                'next_payment_date' => null,
                'is_current' => false,
                'tuition' => 0,
            ];
        }

        try {
            $startDate = Carbon::createFromFormat('d/m/Y', $student->start);
            if (!$startDate) {
                $startDate = Carbon::parse($student->start);
            }
        } catch (\Exception $e) {
            return [
                'status' => 'pending_info',
                'message' => 'Fecha inválida',
                'months_owed' => 0,
                'total_owed' => 0,
                'expected_payments' => 0,
                'payments_made' => 0,
                'next_payment_date' => null,
                'is_current' => false,
                'tuition' => 0,
            ];
        }
        $today = Carbon::now();

        $expectedPayments = $this->calculateExpectedPayments($startDate, $today, $student->payment_periodicity_id);

        $paymentsMade = $student->receipts()->count();

        $monthsOwed = max(0, $expectedPayments - $paymentsMade);

        $totalOwed = $monthsOwed * floatval($student->tuition);

        $nextPaymentDate = $this->calculateNextPaymentDate($startDate, $paymentsMade, $student->payment_periodicity_id);

        $isCurrent = $monthsOwed == 0;

        $status = $this->determineStatus($monthsOwed, $nextPaymentDate);

        return [
            'status' => $status,
            'message' => $this->getStatusMessage($status, $monthsOwed),
            'months_owed' => $monthsOwed,
            'total_owed' => $totalOwed,
            'expected_payments' => $expectedPayments,
            'payments_made' => $paymentsMade,
            'next_payment_date' => $nextPaymentDate,
            'is_current' => $isCurrent,
            'tuition' => floatval($student->tuition),
        ];
    }

    private function calculateExpectedPayments($startDate, $today, $periodicityId)
    {
        if ($periodicityId == 1) {
            $monthsDiff = $startDate->diffInMonths($today);

            if ($today->day > 5) {
                $monthsDiff++;
            }

            return max(0, $monthsDiff);
        }

        if ($periodicityId == 2) {
            return max(0, $startDate->diffInWeeks($today));
        }

        return 0;
    }

    private function calculateNextPaymentDate($startDate, $paymentsMade, $periodicityId)
    {
        if ($periodicityId == 1) {
            $nextMonth = Carbon::parse($startDate)->addMonths($paymentsMade);

            return Carbon::create($nextMonth->year, $nextMonth->month, 5);
        }

        if ($periodicityId == 2) {
            return Carbon::parse($startDate)->addWeeks($paymentsMade);
        }

        return null;
    }

    private function determineStatus($monthsOwed, $nextPaymentDate)
    {
        if ($monthsOwed == 0) {
            return 'current';
        }

        if ($monthsOwed >= 3) {
            return 'critical';
        }

        if ($monthsOwed >= 1) {
            return 'late';
        }

        return 'current';
    }

    private function getStatusMessage($status, $monthsOwed)
    {
        switch ($status) {
            case 'current':
                return 'Al corriente';
            case 'late':
                return $monthsOwed == 1 ? 'Pago pendiente' : "{$monthsOwed} pagos pendientes";
            case 'critical':
                return "Situación crítica - {$monthsOwed} pagos atrasados";
            case 'pending_info':
                return 'Información incompleta';
            default:
                return 'Estado desconocido';
        }
    }
}
