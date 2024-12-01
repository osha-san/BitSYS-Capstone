
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo/dmt logo.png') }}" type="icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'DMT LAW OFFICE')</title>
</head>
<body>
    @include('partials.header')
    @include('partials.sidebar')
    <main class="main">
        @yield('content')
    </main>
    @yield('scripts')
</body>
</html>
