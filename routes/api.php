<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientAppointment;
use App\Http\Controllers\ClientBilling;
use App\Http\Controllers\ClientProfileController;

// API Routes for Client Appointments
Route::apiResource('client-appointments', ClientAppointment::class);

// API Routes for Client Billings
Route::apiResource('client-billings', ClientBilling::class);

// API Route to get a specific Client's Profile
Route::get('client-profile/{id}', [ClientProfileController::class, 'show']);

// API Route to update a specific Client's Profile
Route::put('client-profile/{profile}', [ClientProfileController::class, 'update']);
