<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name', 'event_date', 'description', 'attorney_id'
    ];

    public function attorney()
    {
        return $this->belongsTo(attyAppointment::class);
    }
}
