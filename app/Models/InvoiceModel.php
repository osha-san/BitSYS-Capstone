<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'invoice_number', 'amount_due', 'due_date', 'status'];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
