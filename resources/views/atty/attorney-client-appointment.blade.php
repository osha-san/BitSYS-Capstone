<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('img/logo/dmt logo.png') }}" type="icon" />
    <link rel="stylesheet" href="{{ asset('css/attorney/attorney-client-appoinment.css') }}">
    <script src="{{ asset('js/attorney/attorney-client-appoinment.js') }}" defer></script>
    <title>DMT LAW OFFICE</title>
</head>

<body>
    <header class="header">
        <h3>DMT Law Office</h3>
        <p>Good day, {{ Auth::user()->name }}</p>
    </header>

    <section class="sidebar">
        <div class="logo">
            <img src="{{ asset('img/logo/dmt logo.png') }}" alt="DMT Law Logo">
            <h3>DMT Law</h3>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('admin.dashboard') }}"><img src="{{ asset('img/icons/admin/dashboard.png') }}" alt="dashboard">Dashboard</a></li>
                <li><a href="{{ route('admin.appointments') }}"><img src="{{ asset('img/icons/admin/appointments.png') }}" alt="appointments">Appointments</a></li>
                <li><a href="{{ route('admin.clients') }}"><img src="{{ asset('img/icons/admin/clients.png') }}" alt="clients">Clients</a></li>
                <li><a href="{{ route('admin.billings') }}"><img src="{{ asset('img/icons/admin/billings.png') }}" alt="billings">Billings</a></li>
                <li><a href="{{ route('admin.caseLibrary') }}"><img src="{{ asset('img/icons/admin/case-library.png') }}" alt="case library">Case Library</a></li>
                <li><a href="{{ route('admin.logbook') }}"><img src="{{ asset('img/icons/admin/logbook.png') }}" alt="logbook">Logbook</a></li>
                <li><a href="{{ route('admin.calendar') }}"><img src="{{ asset('img/icons/admin/calendar.png') }}" alt="calendar">Calendar</a></li>
                <li><a href="{{ route('attorney.appointments') }}" class="active"><img src="{{ asset('img/icons/attorney/appointments.png') }}" alt="appointments">Appointments</a></li>
            </ul>
        </nav>
    </section>

    <section class="main-content">
        <div class="appointment-container">
            <h2>Client Appointments</h2>
            <div class="appointments-list">
                @foreach($appointments as $appointment)
                    <div class="appointment-item">
                        <p><strong>{{ $appointment->client_name }}</strong></p>
                        <p>Scheduled for: {{ $appointment->appointment_time }}</p>
                        <p>Status: {{ $appointment->status }}</p>
                        <a href="{{ route('attorney.appointments.show', $appointment->id) }}">View Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
