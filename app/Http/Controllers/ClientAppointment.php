<?php

namespace App\Http\Controllers;

use App\Models\clientAppointmentModel;
use Illuminate\Http\Request;

class ClientAppointment extends Controller
{
    public function index()
    {
        $appointments = clientAppointmentModel::with(['client', 'attorney'])->get();
        return response()->json($appointments);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'client_id' => 'required|integer|exists:users,id',
            'attorney_id' => 'required|integer|exists:users,id',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'status' => 'required|string|in:Pending,Done,Cancelled',
            'notes' => 'nullable|string',
        ]);

        $appointment = clientAppointmentModel::create($data);
        return response()->json($appointment, 201);
    }

    public function update(Request $request, clientAppointmentModel $appointment)
    {
        $data = $request->validate([
            'status' => 'nullable|string|in:Pending,Done,Cancelled',
            'notes' => 'nullable|string',
        ]);

        $appointment->update($data);
        return response()->json($appointment);
    }

    public function destroy(clientAppointmentModel $appointment)
    {
        $appointment->delete();
        return response()->json(['message' => 'Appointment deleted successfully']);
    }
}
