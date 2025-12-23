<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'crew_id',
        'user_id',
        'receipt_type_id',
        'payment_type_id',
        'student_id',
        'report_id',
        'receipt_attribute_id',
        'voucher',
        'bill',
        'concept',
        'amount',
    ];

    protected $casts = [
        'bill' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function crew()
    {
        return $this->belongsTo(Crew::class);
    }

    public function receiptType()
    {
        return $this->belongsTo(ReceiptType::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
