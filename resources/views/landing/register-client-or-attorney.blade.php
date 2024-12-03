<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client or Attorney</title>
    <link rel="stylesheet" href="{{ asset('css/register-client-or-attorney.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/dmtlogo.png') }}" type="icon" />
</head>
<body>
    <div class="page-container">
        <header>
            <nav class="navbar">
                <div class="logo">DMT Law</div>
                <div class="nav-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <div class="dropdown">
                        <span class="dropdown-btn">
                            Practice Areas <i class="bx bx-chevron-down"></i>
                        </span>
                        <div class="dropdown-content">
                            <a href="{{ route('practice-areas', ['area' => 'taxation']) }}">Taxation</a>
                            <a href="{{ route('practice-areas', ['area' => 'corporate']) }}">Corporate</a>
                            <a href="{{ route('practice-areas', ['area' => 'labor-law']) }}">Labor Law</a>
                            <a href="{{ route('practice-areas', ['area' => 'litigation']) }}">Litigation</a>
                            <a href="{{ route('practice-areas', ['area' => 'family-law']) }}">Family Law</a>
                            <a href="{{ route('practice-areas', ['area' => 'immigration']) }}">Immigration</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </div>
                <button class="login1-btn">Log in</button>
            </nav>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="left-section">
                    <h1>Legal Firm & <br />Legal Services</h1>
                    <p class="welcome-text">Welcome to DMT Law Office</p>
                    <div class="options">
                        <a href="{{ route('register-client-type') }}" class="option">
                            <img src="{{ asset('img/client.png') }}" alt="Client Image" />
                            <p>Client</p>
                        </a>
                        <a href="{{ route('register-attorney') }}" class="option">
                            <img src="{{ asset('img/attorney.png') }}" alt="Attorney Image" />
                            <p>Attorney</p>
                        </a>
                    </div>
                    <h4>Please Select</h4>
                </div>
                <div class="right-section">
                    <img src="{{ asset('img/loginbg.png') }}" alt="Background Image" />
                </div>
            </div>
        </main>
    </div>
</body>
</html>
