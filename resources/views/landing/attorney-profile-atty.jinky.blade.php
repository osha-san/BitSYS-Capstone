<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMT Law</title>
    <link rel="stylesheet" href="{{ asset('css/attorney-profile-page.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">DMT <span>Law</span></div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}"><h3>Home</h3></a></li>
                <li><a href="{{ route('about') }}"><h3>About Us</h3></a></li>
                <li><a href="{{ route('practice-areas') }}"><h3>Practice Areas</h3></a></li>
                <li><a href="{{ route('contact') }}"><h3>Contact Us</h3></a></li>
            </ul>
            <button class="login-btn">Login</button>
        </nav>
    </header>
    <main>
        <div class="main-content">
            <div class="atty-content">
                <div class="profile-card">
                    <img src="{{ asset('images/atty-jinky-timajo-profile-new.jpg') }}" alt="Attorney Jinky">
                </div>
                <div class="atty-summary">
                    <h1>Atty. Jinky M. Timajo</h1>
                    <h2>Professional Summary</h2>
                    <p>
                        An experienced litigation lawyer with fifteen (15) years of experience, Atty. Jinky has extensive exposure in court procedure, trial techniques, pleading preparation, and compromise agreements. She handled a wide array of legal services to Filipino individuals and domestic corporations, as well as to foreigners and international organizations. She has appeared before various courts and administrative agencies nationwide and arbitration tribunal in the Philippines.
                        <br><br>
                        As a long-time practitioner, she handled and won labor cases for international organizations; competently won collection cases, suit for damages, writ of possessions and extrajudicial foreclosure proceedings, and land registration cases for banks; successfully obtained favorable judgments for petitions for adoption, recognition of foreign judgments, paternity and filiation, and visa applications for foreign clients; competently handled land disputes and land registration cases; prosecuted various criminal complaints for estafa, BP 22 cases, qualified theft/simple theft, protection orders, VAWC cases, among others. Her skill in negotiations made it possible for her clients to enter into win-win compromise agreements with the other parties. She also had experience dealing with a foreign insurance company where she successfully assisted her client in receiving the group life insurance proceeds (of her deceased husband) in her children’s favor.
                        <br><br>
                        She was appointed as Corporate Secretary/Assistant Corporate Secretary of various corporate clients, hence, knowledgeable in the preparation of reportorial requirements and regulatory compliance.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="section">
                        <h2 class="section-title">Licensure Examinations</h2>
                        <table class="table">
                            <tr>
                                <td>Philippine Bar Examinations</td>
                                <td>September 2004</td>
                            </tr>
                        </table>
                    </div>
                    <div class="section">
                        <h2 class="section-title">Educational Background</h2>
                        <table class="table">
                            <tr>
                                <td>Postgraduate (2003)</td>
                                <td>Arellano University School of Law – Bachelor of Laws</td>
                            </tr>
                            <tr>
                                <td>Tertiary (1996)</td>
                                <td>University of the Philippines Manila – Bachelor of Arts degree in Social Sciences</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="pattern"></div>
            </div>
        </div>
    </main>
    <footer>
        <div class="column">
            <div class="footer-logo">
                <img src="{{ asset('images/bg-and-images/dmt-law-logo-white.png') }}" alt="Company Logo" style="width: 200px; height: 158px; margin-top: 30px">
            </div>
        </div>
        <div class="column">
            <div class="contact-item">
                <i class="bx bxs-map"></i>
                <p>
                    Suite 906 9/F Rufino Centre Bldg., 6784 Ayala Avenue corner Rufino Street, Brgy. San Lorenzo, Makati City 1226 Philippines
                </p>
            </div>
            <div class="contact-item1">
                <li class="contact-item">
                    <i class="bx bxs-phone bx-rotate-270"></i>
                </li>
                <p>
                    Landline: +632-8403-2467 <br>
                    Smart/TNT: +63-908-891-0331 <br>
                    Globe/TM: +63-906-945-2545
                </p>
            </div>
        </div>
        <div class="column">
            <h4>Practice Areas</h4>
            <div class="practiceareas">
                <ul class="practice-areas">
                    <li>Taxation</li>
                    <li>Corporate</li>
                    <li>Labor Law</li>
                </ul>
                <ul class="practice-areas">
                    <li>Litigation</li>
                    <li>Family Law</li>
                    <li>Immigration</li>
                </ul>
            </div>
        </div>
        <div class="column">
            <h4>Lawyers</h4>
            <ul class="lawyers">
                <li>Atty. Dennis M. Timajo</li>
                <li>Atty. Jinky M. Timajo</li>
                <li>Atty. Erwin N. Lopez</li>
                <li>Atty. Marra Antonette L. Ricalde</li>
            </ul>
        </div>
    </footer>
</body>
</html>
