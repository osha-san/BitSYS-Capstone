<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('img/logo/dmt logo.png') }}" type="icon" />
    <link rel="stylesheet" href="{{ asset('css/client/client-appointment.css') }}">
    <script src="{{ asset('js/client/client-appointment.js') }}" defer></script>
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
                <li><a href="{{ route('client.dashboard') }}"><img src="{{ asset('img/icons/client/dashboard.png') }}" alt="dashboard">Dashboard</a></li>
                <li><a href="{{ route('client.appointments') }}" class="active"><img src="{{ asset('img/icons/client/appointments.png') }}" alt="appointments">Appointments</a></li>
                <li><a href="{{ route('client.profile') }}"><img src="{{ asset('img/icons/client/profile.png') }}" alt="profile">Profile</a></li>
                <li><a href="{{ route('client.documents') }}"><img src="{{ asset('img/icons/client/documents.png') }}" alt="documents">Documents</a></li>
                <li><a href="{{ route('client.settings') }}"><img src="{{ asset('img/icons/client/settings.png') }}" alt="settings">Settings</a></li>
            </ul>
        </nav>
    </section>

    <section class="main-content">
        <div class="appointments-container">
            <h2>My Appointments</h2>
            <div class="appointments-list">
                @foreach($appointments as $appointment)
                    <div class="appointment-item">
                        <p><strong>{{ $appointment->attorney_name }}</strong></p>
                        <p>Scheduled for: {{ $appointment->appointment_time }}</p>
                        <p>Status: {{ $appointment->status }}</p>
                        <a href="{{ route('client.appointments.show', $appointment->id) }}">View Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
