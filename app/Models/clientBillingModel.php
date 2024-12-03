<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientBillingModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'appointment_id',
        'amount',
        'status', // Pending, Paid, Error
        'invoice_number',
        'proof_of_payment',
        'payment_date',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function appointment()
    {
        return $this->belongsTo(clientAppointmentModel::class);
    }
}
