<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attyCaseLibrary extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_name', 'case_description', 'document_url'
    ];

    public function attorney()
    {
        return $this->belongsTo(attyAppointment::class);
    }
}
