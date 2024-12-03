<?php
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing/About-us-landing-page');


    // Dashboard Route
Route::get('/client/dashboard', [ClientController::class, 'showDashboard'])->name('client.dashboard');

// Appointments Routes
Route::get('/client/appointments', [ClientController::class, 'showAppointments'])->name('client.appointments');
Route::get('/client/appointments/create', [ClientController::class, 'createAppointment'])->name('client.appointments.create');
Route::post('/client/appointments', [ClientController::class, 'storeAppointment'])->name('client.appointments.store');

// Profile Routes
Route::get('/client/profile', [ClientController::class, 'showProfile'])->name('client.profile');
Route::get('/client/profile/edit', [ClientController::class, 'editProfile'])->name('client.profile.edit');
Route::post('/client/profile', [ClientController::class, 'updateProfile'])->name('client.profile.update');

// Billings Routes
Route::get('/client/billings', [ClientController::class, 'showBillings'])->name('client.billings');
Route::get('/client/billings/{id}', [ClientController::class, 'showBillingDetails'])->name('client.billings.show');

// Statement of Account (SOA) Route
Route::get('/client/soa/{invoiceId}', [ClientController::class, 'showSOA'])->name('client.soa');

// Make Appointment Route
Route::get('/client/make-appointment', [ClientController::class, 'createAppointment'])->name('client.appointments.create');
Route::post('/client/make-appointment', [ClientController::class, 'storeAppointment'])->name('client.appointments.store');

// Settings Route
Route::get('/client/settings', [ClientController::class, 'showSettings'])->name('client.settings');
});

