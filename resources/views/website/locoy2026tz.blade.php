<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCOY TANZANIA</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        #contact {
            background-color: #052c15;
            color: #fff;
        }

        .hero {
            min-height: 100vh;
            background: url('images/event-banner.jpg') center/cover;
            position: relative;
            color: white;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.772);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .section-padding {
            padding: 100px 0;
        }

        .speaker-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .timeline-item {
            border-left: 3px solid #0d6efd;
            padding-left: 20px;
            margin-bottom: 30px;
        }

        .partner-logo {
            max-height: 80px;
            filter: grayscale(100%);
            transition: .3s;
        }

        .partner-logo:hover {
            filter: none;
        }

        .venue-map {
            height: 400px;
            background: #eee;
        }

        .theme-box {
            max-width: 850px;
            padding: 25px;
            background: rgba(255, 255, 255, .1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 15px;
        }

        .theme-box h4 {
            color: #fff;
            line-height: 1.5;
        }
    </style>
</head>

<body id="lcoybody" class="text-dark">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #052c15;
">
        <div class="container">
            <a class="navbar-brand" href="#">LCOY 2026 Tanzania</a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#timeline" class="nav-link">Schedule</a></li>
                    <li class="nav-item"><a href="#speakers" class="nav-link">Presenters</a></li>
                    <li class="nav-item"><a href="#partners" class="nav-link">Sponsors</a></li>
                    <li class="nav-item"><a href="#venue" class="nav-link">Venue</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero d-flex align-items-center"
        style="background-image: url({{ asset('assets/img/lcoy/lcoy-hero-img.jpg') }})">
        <div class="hero-overlay"></div>

        <div class="container hero-content text-center">

            {{-- <img src="images/lcoy-logo.png" alt="LCOY Logo" class="img-fluid mb-4" style="max-width:250px;"> --}}

            <h1 class="display-2 fw-bold">
                LCOY 2026
            </h1>

            <h3 class="fw-light mb-4">
                Local Conference Of Youth
            </h3>

            <!-- THEME -->
            <div class="theme-box mx-auto mb-4">
                <span class="badge bg-success mb-2 px-3 py-2">
                    EVENT THEME
                </span>

                <h4 class="fw-bold mb-0">
                    "Tanzanian Youth Driving Clean Energy and Circular Economy
                    for Healthier Communities and Environment"
                </h4>
            </div>

            <p class="mb-4">
                Empowering young leaders to accelerate climate action,
                sustainable innovation, and environmental stewardship.
            </p>

            <p class="mb-4">
                <i class="bi bi-calendar-event"></i>
                August 15, 2026

                &nbsp;&nbsp;&nbsp;

                <i class="bi bi-geo-alt"></i>
                Event Venue
            </p>

            <a href="#" class="btn btn-success btn-lg px-5">
                Register Now
            </a>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h2>About The Event</h2>

                    <p>
                        The Local Conference of Youth (LCOY) Tanzania 2026 is an officially endorsed youth-led climate
                        conference under the LCOY Working Group of YOUNGO, the official children and youth constituency
                        of the UNFCCC.
                    </p>

                    <p> The event is organized by:</p>

                    <ul>
                        <li>Girls Education for Climate Action (GECA).</li>
                        <li> TAMSA-ST. Francis University College of Health and Allied Sciences (TAMSA-SFUCHAS).</li>
                        <li>Geospatial Technology and Environment (GeoTE) Tanzania.</li>
                    </ul>

                    <p>
                        LCOY Tanzania 2026 serves as a platform for young people to:</p>

                    <ul>
                        <li>Discuss climate change challenges and solutions in Tanzania.</li>
                        <li>Strengthen youth participation in climate policy processes.</li>
                        <li>Contribute to the National Youth Statement.</li>
                        <li>Prepare for engagement in global climate spaces such as the Conference of Youth (COY) and COP processes, including COY21 and COP31 (Antalya, Türkiye).</li>
                    </ul>
                </div>


                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/lcoy/lcoy-hero-img.jpg') }}" class="img-fluid rounded">
                </div>


            </div>
        </div>
    </section>

    <!-- STATISTICS -->
    {{-- <section class="bg-light section-padding">
        <div class="container">
            <div class="row text-center">

                <div class="col-md-3">
                    <h2>500+</h2>
                    <p>Attendees</p>
                </div>

                <div class="col-md-3">
                    <h2>20</h2>
                    <p>Presenters</p>
                </div>

                <div class="col-md-3">
                    <h2>15</h2>
                    <p>Partners</p>
                </div>

                <div class="col-md-3">
                    <h2>1</h2>
                    <p>Day Event</p>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- TIMELINE -->
    {{-- <section id="timeline" class="section-padding">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Event Schedule</h2>

                <p>[Coming soon...]</p>
            </div>

            <div class="timeline-item">
                <h5>08:00 AM - Registration</h5>
                <p>Guest arrival and check-in.</p>
            </div>

            <div class="timeline-item">
                <h5>09:00 AM - Opening Ceremony</h5>
                <p>Welcome remarks.</p>
            </div>

            <div class="timeline-item">
                <h5>10:00 AM - Keynote Session</h5>
                <p>Featured speaker presentation.</p>
            </div>

            <div class="timeline-item">
                <h5>01:00 PM - Lunch Break</h5>
                <p>Networking and refreshments.</p>
            </div>

        </div>
    </section> --}}

    <!-- SPEAKERS -->
    {{-- <section id="speakers" class="bg-light section-padding">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Presenters</h2>
            </div>

            <div class="row g-4">

                <div class="col-md-4 text-center">
                    <img src="images/speaker1.jpg" class="speaker-img mb-3">

                    <h5>Presenter Name</h5>
                    <p>Position / Organization</p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="images/speaker2.jpg" class="speaker-img mb-3">

                    <h5>Presenter Name</h5>
                    <p>Position / Organization</p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="images/speaker3.jpg" class="speaker-img mb-3">

                    <h5>Presenter Name</h5>
                    <p>Position / Organization</p>
                </div>

            </div>

        </div>
    </section> --}}

    <!-- SPONSORS -->
    {{-- <section id="partners" class="section-padding">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Partners & Sponsors</h2>
            </div>

            <div class="row align-items-center text-center g-4">

                <div class="col-md-3">
                    <img src="images/logo1.png" class="img-fluid partner-logo">
                </div>

                <div class="col-md-3">
                    <img src="images/logo2.png" class="img-fluid partner-logo">
                </div>

                <div class="col-md-3">
                    <img src="images/logo3.png" class="img-fluid partner-logo">
                </div>

                <div class="col-md-3">
                    <img src="images/logo4.png" class="img-fluid partner-logo">
                </div>

            </div>

        </div>
    </section> --}}

    <!-- VENUE -->
    {{-- <section id="venue" class="bg-light section-padding">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Venue</h2>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <h4>Event Location</h4>

                    <p>
                        Venue Name<br>
                        Street Address<br>
                        City, Country
                    </p>

                    <p>
                        Add parking information,
                        accommodation details, etc.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="venue-map rounded">
                        <!-- Embed Google Map -->
                    </div>
                </div>

            </div>

        </div>
    </section> --}}



    <!-- CONTACT -->
    <section id="contact" class="section-padding">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Contact Us</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="mb-3">
                            <textarea rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>

                        <button class="btn btn-success">
                            Send Message
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <hr style="margin: 0; padding: 0;">
    <!-- FOOTER -->
    <footer class="text-center text-white py-4" style="background-color: #052c15;
">
        <p class="mb-0">
            © LCOY 2026. All Rights Reserved.
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
