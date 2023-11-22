<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kaavya Orthopaedic Clinic for Bone, Joint, Arthroscopy... </title>
    <link rel="pingback" href="https://kaavyaclinic.in" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/Kaavyahospital-logo.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css" rel="styleshe') }}et">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet') }}" />
    <link href="{{ asset('assets/lib/twentytwenty/twentytwenty.css" rel="stylesheet') }}" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div id="home" class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2 text-primary"><i class="far fa-clock text-secondary me-2"></i>Opening Hours: Mon
                        - Sat : 9 AM - 1 PM and 4 PM - 8 PM / Sunday: 9 AM - 2 PM and Evening Closed
                    </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <a href="/"><small class="m-0 text-white"><i class="fa fa-globe me-2"></i>kaavyaclinic.in</small></a>
                    </div>
                    <div class="py-2">
                        <small class="m-0"><i class="fa fa-phone-alt me-2"></i>+0780 883 8383</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav id="Kaavya-nav" class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <img src="{{ asset('assets/img/kaavya-logo.png') }}" alt="">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                    <a href="/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                    <div class="dropdown-menu m-0 bg-light">
                        <a href="/clinic" class="dropdown-item">About Us</a>
                        <a href="/about" class="dropdown-item">About Doctors</a>
                        {{-- <a href="#home" class="dropdown-item">Certification & fellowship
                            Training</a>
                        <a href="#home" class="dropdown-item">Experience & Expertise</a>
                        <a href="#home" class="dropdown-item">Memberships</a> --}}
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Condition &
                        Treatment</a>
                    <div class="dropdown-menu m-0 bg-light">
                        <a href="/knee" class="dropdown-item">Knee Replacement</a>
                        <a href="/hip" class="dropdown-item">Hip Replacement</a>
                        <a href="/fracture" class="dropdown-item">Fracture Fixation</a>
                        <a href="/shoulder" class="dropdown-item">Shoulder Surgeries</a>
                        <a href="/orthoscopy" class="dropdown-item">Arthroscopic ACL Reconstruction</a>
                        <a href="/redo" class="dropdown-item">Redo Surgeries</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Consultation</a>
                    <div class="dropdown-menu m-0 bg-light">
                        <a href="/knee-condition" class="dropdown-item">Knee Conditions & Procedures</a>
                        <a href="/hip-condition" class="dropdown-item">Hip Conditions & Procedures</a>
                        <a href="/total-knee" class="dropdown-item">Total Knee Replacement-Primary & Revision</a>
                        <a href="/total-hip" class="dropdown-item">Total Hip Replacement</a>
                        <a href="/hip-fracture" class="dropdown-item">Geriatric Hip Fracture Treatment</a>
                        <a href="/Orthopedic" class="dropdown-item">Orthopedic Surgeries</a>
                        <a href="/arthoscopy" class="dropdown-item">Arthroscopy Surgeries</a>
                        <a href="/bone-joint" class="dropdown-item">Geriatric Bone & Joint Care</a>
                        <a href="/trauma" class="dropdown-item">Complex Trauma Surgeries</a>
                        <a href="/shoulder-elbow" class="dropdown-item">Shoulder and Elbow Surgeries</a>
                    </div>
                </div>
                <a href="/patient" class="nav-item nav-link">Patients</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                    <div class="dropdown-menu m-0 bg-light">
                        <a href="#home" class="dropdown-item">Blogs</a>
                        <a href="/gallery" class="dropdown-item">Gallery</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>

            </div>
            <a href="/appointment" class="btn btn-success py-2 px-4 ms-3">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->
