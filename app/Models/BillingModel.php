<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingModel extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'invoice_number', 'total_amount', 'status', 'due_date'];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
