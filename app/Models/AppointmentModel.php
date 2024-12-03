<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'appointment_date', 'appointment_time', 'appointment_details'];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
