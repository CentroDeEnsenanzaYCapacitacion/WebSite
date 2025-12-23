@extends('student.layout.app')

@section('title', 'Estado de Pagos - Plataforma del Alumno')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student-payments.css') }}">
@endpush

@section('content')
<div class="content-card">
    <div class="payments-header">
        <h2 class="payments-title">Estado de Pagos</h2>
        <p class="payments-subtitle">
            <span class="status-badge status-badge-{{ $paymentStatus['status'] == 'current' ? 'green' : ($paymentStatus['status'] == 'critical' ? 'red' : 'orange') }}">
                {{ $paymentStatus['message'] }}
            </span>
            <span class="status-detail">
                @if($paymentStatus['status'] == 'current')
                    - ¡Excelente!
                @elseif($paymentStatus['status'] == 'critical')
                    - Se requiere atención
                @else
                    - Revisar detalles
                @endif
            </span>
        </p>
    </div>

    <div class="summary-cards">
        <div class="summary-card">
            <div class="summary-card-header">
                <div class="summary-card-icon summary-card-icon-blue">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <div class="summary-card-title">Pagos Realizados</div>
            </div>
            <div class="summary-card-value summary-card-value-blue">{{ $paymentStatus['payments_made'] }}</div>
            <div class="summary-card-subtitle">Total de pagos registrados</div>
        </div>

        <div class="summary-card">
            <div class="summary-card-header">
                <div class="summary-card-icon summary-card-icon-green">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="summary-card-title">Total Pagado</div>
            </div>
            <div class="summary-card-value summary-card-value-green">${{ number_format($totalPaid, 2) }}</div>
            <div class="summary-card-subtitle">Acumulado total</div>
        </div>

        @if($paymentStatus['months_owed'] > 0)
        <div class="summary-card">
            <div class="summary-card-header">
                <div class="summary-card-icon summary-card-icon-{{ $paymentStatus['status'] == 'critical' ? 'red' : 'orange' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="summary-card-title">Adeudo</div>
            </div>
            <div class="summary-card-value summary-card-value-{{ $paymentStatus['status'] == 'critical' ? 'red' : 'orange' }}">${{ number_format($paymentStatus['total_owed'], 2) }}</div>
            <div class="summary-card-subtitle">{{ $paymentStatus['months_owed'] }} {{ $paymentStatus['months_owed'] == 1 ? 'pago pendiente' : 'pagos pendientes' }}</div>
        </div>
        @endif

        @if($paymentStatus['next_payment_date'])
        <div class="summary-card">
            <div class="summary-card-header">
                <div class="summary-card-icon summary-card-icon-cyan">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div class="summary-card-title">Próximo Pago</div>
            </div>
            <div class="summary-card-value summary-card-value-cyan">{{ $paymentStatus['next_payment_date']->format('d/m/Y') }}</div>
            <div class="summary-card-subtitle">Monto: ${{ number_format($paymentStatus['tuition'], 2) }}</div>
        </div>
        @endif

    </div>

    <div class="payments-table-container">
        <div class="payments-table-header">
            <h3 class="payments-table-title">Historial de Pagos</h3>
        </div>

        @if($receipts->count() > 0)
        <div class="payments-table-wrapper">
            <table class="payments-table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Tipo de Recibo</th>
                        <th>Concepto</th>
                        <th>Método de Pago</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($receipts as $receipt)
                    <tr>
                        <td>{{ $receipt->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <span class="receipt-type-badge receipt-type-badge-primary">
                                {{ $receipt->receiptType->name ?? 'N/A' }}
                            </span>
                        </td>
                        <td>{{ $receipt->concept }}</td>
                        <td>
                            <span class="payment-type-badge payment-type-badge-primary">
                                {{ $receipt->paymentType->name ?? 'N/A' }}
                            </span>
                        </td>
                        <td class="payment-amount">${{ number_format($receipt->amount, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="no-payments">
            <svg class="no-payments-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            <h4 class="no-payments-title">No hay pagos registrados</h4>
            <p class="no-payments-text">Aún no tienes pagos registrados en el sistema</p>
        </div>
        @endif
    </div>
</div>
@endsection
