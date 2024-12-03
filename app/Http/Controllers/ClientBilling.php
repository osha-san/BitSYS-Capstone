<?php

namespace App\Http\Controllers;

use App\Models\ClientBillingModel;
use Illuminate\Http\Request;

class ClientBilling extends Controller
{
    public function index()
    {
        $billings = ClientBillingModel::with(['client', 'appointment'])->get();
        return response()->json($billings);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_id' => 'required|integer|exists:users,id',
            'appointment_id' => 'required|integer|exists:client_appointments,id',
            'amount' => 'required|numeric',
            'status' => 'required|string|in:Pending,Paid,Error',
            'invoice_number' => 'required|string|unique:client_billings',
            'proof_of_payment' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
            'payment_date' => 'nullable|date',
        ]);

        $billing = ClientBillingModel::create($data);
        return response()->json($billing, 201);
    }
}
