
<section class="sidebar">
    <div class="logo">
        <img src="{{ asset('img/logo/dmt logo.png') }}" alt="DMT Law Logo">
        <h3>DMT Law</h3>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><img src="{{ asset('img/icons/admin/dashboard.png') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.appointment') }}"><img src="{{ asset('img/icons/admin/appointment.png') }}">Appointments</a></li>
            <li><a href="{{ route('admin.calendar') }}"><img src="{{ asset('img/icons/admin/calendar.png') }}">Calendar</a></li>
            <li><a href="{{ route('admin.billings') }}"><img src="{{ asset('img/icons/admin/pay.png') }}">My Bills</a></li>
            <li><a href="{{ route('admin.caseLibrary') }}"><img src="{{ asset('img/icons/admin/case library.png') }}">Case Library</a></li>
            <li><a href="{{ route('admin.clients') }}"><img src="{{ asset('img/icons/admin/my client.png') }}">Clients</a></li>
            <li><a href="{{ route('admin.logbook') }}"><img src="{{ asset('img/icons/admin/logbook.png') }}">Logbook</a></li>
            <li class="logout"><a href="#"><img src="{{ asset('img/icons/admin/logout.png') }}">Log Out</a></li>
        </ul>
    </nav>
</section>
