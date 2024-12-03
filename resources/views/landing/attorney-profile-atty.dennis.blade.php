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
                    <img src="{{ asset('images/atty-dennis-timajo-profile-latest.jpg') }}" alt="Attorney Dennis">
                </div>
                <div class="atty-summary">
                    <h1>Atty. Dennis M. Timajo, CPA</h1>
                    <h2>Professional Summary</h2>
                    <p>He has vast professional experience in litigation, particularly in handling various tax, civil, labor, criminal, probate, family court, special proceedings cases, among others.
                       <br><br> He is also well-versed in banking laws, collective bargaining negotiations and labor-related matters, having immersed himself in the decade he spent at Citibank, N.A. Philippines (Makati Branch) as a working law student and becoming the first employee of said foreign bank to pass the bar exams.
                        His legal, accounting and tax expertise are put into good use by his retainer clients, both corporate and individual. He assists clients in the registration/incorporation of their businesses, as well as corporate and regulatory compliance, contract review and drafting, tax assessments and issues with the BIR, and immigration concerns, among others.
                        <br><br> He likewise sits on the board of some of his clients as Corporate Secretary and advises them on legal and corporate matters. </p>
                </div>
            </div>

            <div class="container">
                <div class="content">
                    <div class="section">
                        <h2 class="section-title">Licensure Examinations</h2>
                        <table class="table">
                            <tr>
                                <td>Philippine Bar Examinations</td>
                                <td>September 2005</td>
                            </tr>
                            <tr>
                                <td>Licensure Examination for Certified Public Accountants</td>
                                <td>May 1996</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="section">
                        <h2 class="section-title">Educational Background</h2>
                        <table class="table">
                            <tr>
                                <td>Postgraduate (2005)</td>
                                <td>Lyceum of the Philippines University – Bachelor of Laws</td>
                            </tr>
                            <tr>
                                <td>Tertiary (1995)</td>
                                <td>University of Santo Tomas – B.S Accountancy</td>
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
