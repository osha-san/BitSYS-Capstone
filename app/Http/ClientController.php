<?php

namespace App\Http\Controllers;

use App\Models\AppointmentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    // Dashboard
    public function showDashboard()
    {
        $appointmentsCount = AppointmentModel::where('client_id', Auth::id())->count();
        return view('client.client-dashboard', compact('appointmentsCount'));
    }

    // Update Appointment
    public function updateAppointment(Request $request, $appointmentId)
    {
        // Validate the request inputs
        $request->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
            'appointment_details' => 'required|string',
        ]);

        // Find the appointment by ID and client ID to ensure ownership
        $appointment = AppointmentModel::where('id', $appointmentId)
            ->where('client_id', Auth::id())
            ->first();

        if (!$appointment) {
            return redirect()->route('client.appointments')
                ->with('error', 'Appointment not found.');
        }

        // Update the appointment using mass assignment
        $appointment->update([
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'appointment_details' => $request->appointment_details,
        ]);

        return redirect()->route('client.appointments')
            ->with('success', 'Appointment successfully updated!');
    }
}
