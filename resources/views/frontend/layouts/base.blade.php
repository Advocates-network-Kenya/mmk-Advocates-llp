<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('theme/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
    {{-- css overwrite --}}
    {{-- button --}}
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cta-button {
            display: inline-block;
            background-color: #880422;
            color: #ffffff;
            padding: 14px 28px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: #fb3000;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
        }



        .cta-button:hover {
            background-color: #ffbd59;
            transform: translateY(-2px);
            box-shadow: 0 0 12px rgba(112, 28, 9, 0.6);
        }

          .top-bar {
            background: #880422 !important;
        }

        .top-bar .text h2,
        .top-bar .text p,
        .top-bar .social a i {
            color: #ffffff !important;
        }

    

        .footer {
            background: #880422 !important;
        }

        .logo img {
            max-height: 60px;
            width: auto;
        }

        /* apointment form styles */
          <style>
        .appointment {
            padding: 90px 0;
        }
        .appointment-form {
            padding: 45px;
            background: #f3f6ff;
            border-radius: 10px;
        }
        .appointment-form .form-control {
            height: 45px;
            padding: 10px 15px;
            font-size: 14px;
            border: 1px solid #ddd;
        }
        .appointment-form textarea.form-control {
            height: auto;
        }
        .appointment-form .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #ffffff;
            background: #880411;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .appointment-form .btn:hover {
            background: #6d030d;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        /* end apointment form styles*/
    </style>
    {{-- end css overwrite --}}
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('media/logo.jpg') }}" alt="MMK Advocates Logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>8:00 - 5:00</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+254 7-224-722-28</h2>
                                <p>Call Us For a Consultation</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('aboutus') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('practiceareas') }}" class="nav-item nav-link">Practice</a>
                            <a href="{{ route('ourteam') }}" class="nav-item nav-link">Attorneys</a>
                            <a href="{{ route('appointment') }}" class="nav-item nav-link">Consultation</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Resources</a>
                                <div class="dropdown-menu">
                                    <a href="/" class="dropdown-item">News and Articles</a>
                                    <a href="/" class="dropdown-item">Case Studies</a>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="{{ route('appointment') }}">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        {{-- content --}}

        @yield('content')


        {{-- content    ENDS --}}

        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h2>Subscribe Our Newsletter</h2>
                </div>
                <div class="form">
                    <input class="form-control" placeholder="Email here">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h2>About Us</h2>
                            <p>
                                MMK Advocates LLP is a forward-thinking and dynamic law firm based in Kenya, offering a
                                comprehensive array of legal services to a diverse clientele. Our clients include local
                                and international corporations, government entities, multinational companies,
                                non-governmental organizations (NGOs), and high-net-worth individuals. The firm is
                                headquartered in Thika.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Services Areas</h2>
                                    <a href="">Civil Law</a>
                                    <a href="">Family Law</a>
                                    <a href="">Business Law</a>
                                    <a href="">Education Law</a>
                                    <a href="">Immigration Law</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Useful Pages</h2>
                                    <a href="{{ route('home') }}">Home</a>
                                    <a href="{{ route('aboutus') }}">About Us</a>
                                    <a href="{{ route('practiceareas') }}">Practices</a>
                                    <a href="{{ route('ourteam') }}">Attorneys</a>
                                    <a href="{{ route('appointment') }}">Apointment</a>
                                    <a href="{{ route('contact')}}">FAQs</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h2>Get In Touch</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>THIKA SECTION 9,
                                        YELLOW HOUSE NO. 45
                                        MUGO KIBIRU ROAD.
                                        P. O BOX 7449-01000
                                        THIKA.</p>
                                    <p><i class="fa fa-phone-alt"></i>+254 7-224-722-28</p>
                                    <p><i class="fa fa-envelope"></i>mmk.advocates@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="{{ route('appointment') }}">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy;{{ date('Y') }} <a href="#">mmk.advocates.or.ke</a>, All Right Reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p>Designed By <a href="https://htmlcodex.com//2">Murimicodes</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('theme/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('theme/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('theme/js/main.js') }}"></script>
</body>

</html>
