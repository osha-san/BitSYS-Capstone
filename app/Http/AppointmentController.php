<?php

namespace App\Http\Controllers;

use App\Models\attyAppointment;
use App\Models\attyClient;
use App\Models\attyAttorney;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = attyAppointment::all();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $clients = attyClient::all();
        $attorneys = attyAppointment::all();
        return view('appointments.create', compact('clients', 'attorneys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'attorney_id' => 'required',
            'appointment_time' => 'required|date',
            'status' => 'required',
        ]);

        attyAppointment::create($request->all());
        return redirect()->route('appointments.index');
    }

    public function edit(attyAppointment $appointment)
    {
        $clients = attyClient::all();
        $attorneys = attyAppointment::all(); //different variable
        return view('appointments.edit', compact('appointment', 'clients', 'attorneys'));
    }

    public function update(Request $request, attyAppointment $appointment)
    {
        $request->validate([
            'client_id' => 'required',
            'attorney_id' => 'required',
            'appointment_time' => 'required|date',
            'status' => 'required',
        ]);

        $appointment->update($request->all());
        return redirect()->route('appointments.index');
    }

    public function destroy(attyAppointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index');
    }
}
