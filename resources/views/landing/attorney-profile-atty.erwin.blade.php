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
                    <img src="{{ asset('images/atty-erwin-lopez.jpg') }}" alt="Attorney Erwin">
                </div>
                <div class="atty-summary">
                    <h1>Atty. Erwin N. Lopez, CPA</h1>
                    <h2>Professional Summary</h2>
                    <p>
                        He effectively combines his legal knowledge, finance and management expertise in advising corporate and individual clients in the areas of legal, financial and tax compliance, governance, risk management and controls. He has solid years of experience in legal and financial due diligence work for mergers, acquisitions and corporate rehabilitations. Hands-on experience in compliance with international sanctions, anti-terrorist financing, data privacy and contract reviews of international grant agreements.
                        <br><br>
                        He is a long-time auditor and third-party assurance provider for international brands sourcing products from Philippine-based manufacturers. He advises manufacturing firms on security, Code of Conduct/standards of international buyers and labor law compliance. He assists foreign investors, SMEs and other start-up companies in setting-up and registration of their businesses, corporate planning and business strategy development.
                        He is the corporate secretary of various companies in the financial and health services industry.
                        <br><br>
                        He is formerly Director of Finance of an international agricultural research center based in the Middle East and an Audit and Advisory Manager for an international accounting/audit firm.
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
                                <td>September 2007</td>
                            </tr>
                            <tr>
                                <td>Licensure Examination for Certified Public Accountants</td>
                                <td>October 1996</td>
                            </tr>
                        </table>
                    </div>
                    <div class="section">
                        <h2 class="section-title">Professional Certifications</h2>
                        <p>Passed the examinations for:</p>
                        <table class="table">
                            <tr>
                                <td>Certified Internal Auditor</td>
                                <td>2005</td>
                            </tr>
                            <tr>
                                <td>Certified Control Self-Assessment Auditor</td>
                                <td>2006</td>
                            </tr>
                            <tr>
                                <td>Certified Information Systems Auditor</td>
                                <td>2006</td>
                            </tr>
                            <tr>
                                <td>Basic Management Program, Asian Institute of Management</td>
                                <td>August 2002</td>
                            </tr>
                        </table>
                    </div>
                    <div class="section">
                        <h2 class="section-title">Educational Background</h2>
                        <table class="table">
                            <tr>
                                <td>Postgraduate (2007)</td>
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
