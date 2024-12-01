<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('img/logo/dmt logo.png') }}" type="icon" />
    <link rel="stylesheet" href="{{ asset('css/admin/admin-calendar.css') }}">
    <script src="{{ asset('js/admin/admin-calendar.js') }}" defer></script>
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
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.appointments') }}">Appointments</a></li>
                <li><a href="{{ route('admin.clients') }}">Clients</a></li>
                <li><a href="{{ route('admin.billings') }}">Billings</a></li>
                <li><a href="{{ route('admin.caseLibrary') }}">Case Library</a></li>
                <li><a href="{{ route('admin.logbook') }}">Logbook</a></li>
                <li><a href="{{ route('admin.calendar') }}" class="active">Calendar</a></li>
            </ul>
        </nav>
    </section>

    <section class="main-content">
        <div class="calendar-container">
            <h2>Calendar</h2>
            <div id="calendar">
                <!-- Dynamic calendar content goes here -->
            </div>
        </div>
    </section>
</body>

</html>
