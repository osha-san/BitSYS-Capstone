<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('img/logo/dmt logo.png') }}" type="icon" />
    <link rel="stylesheet" href="{{ asset('css/client/client-make-appointment.css') }}">
    <script src="{{ asset('js/client/client-make-appointment.js') }}" defer></script>
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
                <li><a href="{{ route('client.appointments') }}"><img src="{{ asset('img/icons/client/appointments.png') }}" alt="appointments">Appointments</a></li>
                <li><a href="{{ route('client.profile') }}"><img src="{{ asset('img/icons/client/profile.png') }}" alt="profile">Profile</a></li>
                <li><a href="{{ route('client.documents') }}"><img src="{{ asset('img/icons/client/documents.png') }}" alt="documents">Documents</a></li>
                <li><a href="{{ route('client.settings') }}"><img src="{{ asset('img/icons/client/settings.png') }}" alt="settings">Settings</a></li>
                <li><a href="{{ route('client.billings') }}"><img src="{{ asset('img/icons/client/billings.png') }}" alt="billings">Billings</a></li>
            </ul>
        </nav>
    </section>

    <section class="main-content">
        <div class="appointment-container">
            <h2>Make an Appointment</h2>
            <form action="{{ route('client.appointments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="appointment-date">Appointment Date</label>
                    <input type="date" id="appointment-date" name="appointment_date" required>
                </div>
                <div class="form-group">
                    <label for="appointment-time">Appointment Time</label>
                    <input type="time" id="appointment-time" name="appointment_time" required>
                </div>
                <div class="form-group">
                    <label for="appointment-details">Appointment Details</label>
                    <textarea id="appointment-details" name="appointment_details" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Submit Appointment</button>
            </form>
        </div>
    </section>
</body>

</html>
