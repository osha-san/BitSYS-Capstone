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

// Dashboard Route
Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');

// Appointments Route
Route::get('/admin/appointments', function () {
    return view('admin-appointment');
})->name('admin.appointments');

// Calendar Route
Route::get('/admin/calendar', function () {
    return view('admin-calendar');
})->name('admin.calendar');

// Billings Route
Route::get('/admin/billings', function () {
    return view('admin-billings');
})->name('admin.billings');

// Case Library Route
Route::get('/admin/case-library', function () {
    return view('admin-case-library');
})->name('admin.case-library');

// Clients Route
Route::get('/admin/clients', function () {
    return view('admin-clients');
})->name('admin.clients');

// Logbook Route
Route::get('/admin/logbook', function () {
    return view('admin-logbook');
})->name('admin.logbook');

// Logout Route (Placeholder)
Route::get('/admin/logout', function () {
    return redirect('/login'); // Redirect to login or logout logic
})->name('admin.logout');

// Dashboard Route
Route::get('/attorney/dashboard', function () {
    return view('attorney-dashboard');
})->name('attorney.dashboard');

// Calendar Route
Route::get('/attorney/calendar', function () {
    return view('attorney-calendar');
})->name('attorney.calendar');

// Case Library Route
Route::get('/attorney/caselibrary', function () {
    return view('attorney-caselibrary');
})->name('attorney.caselibrary');

// Client Appointments Route
Route::get('/attorney/client-appointments', function () {
    return view('attorney-client-appointment');
})->name('attorney.client-appointments');

// My Clients Route
Route::get('/attorney/myclients', function () {
    return view('attorney-myclient');
})->name('attorney.myclients');

// Appointments Route
Route::get('/attorney/appointments', function () {
    return view('attorney-appointment');
})->name('attorney.appointments');

// Logout Route (Placeholder)
Route::get('/attorney/logout', function () {
    return redirect('/login'); // Redirect to login or logout logic
})->name('attorney.logout');

});

