<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attyAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'attorney_id', 'appointment_time', 'status', 'notes'
    ];

    // Relationships
    public function client()
    {
        return $this->belongsTo(attyClient::class);
    }

    public function attorney()
    {
        return $this->belongsTo(attyAppointment::class);

    }
}
