<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientAppointmentModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'client_id',
        'attorney_id',
        'date',
        'time',
        'status', // Pending, Done, Cancelled
        'notes',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function attorney()
    {
        return $this->belongsTo(User::class, 'attorney_id');
    }
}
