<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Raptech Solutions</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.svg">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <img width="30px" style="border-radius: 20px;" src="img/favicon.svg" alt>
            </div>
        </div>
    </div>
    <header class="header" id="header">
        <!-- Header Inner -->

        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container-fluid">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="img/RAP.svg" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-8 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="<?= ($page == 'home') ? 'active' : '' ?>">
                                            <a href="index.php?page=home"><i class="fa fa-home"></i> Home</a>
                                        </li>
                                        <li
                                            class="<?= ($page == 'corporate' || $page == 'education' || $page == 'video-creation' || $page == 'smart-presentation' || $page == 'virtual-reality' || $page == 'smart-video') ? 'active' : '' ?>">
                                            <a href="#"><i class="fa fa-cubes "></i>
                                                Products <i class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown">
                                                <li>
                                                    <a href="#"><i class="fa fa-cogs"></i> AI-Powered LMS <i
                                                            class="fa fa-angle-right"></i></a>
                                                    <!-- Sub-dropdown for AI-Powered LMS -->
                                                    <ul class="dropdown-submenu">
                                                        <li><a href="index.php?page=corporate"><span><img
                                                                        src="img/aiicon.svg" width="20px"
                                                                        alt></span>AI-Powered
                                                                Corporate LMS</a></li>
                                                        <li><a href="index.php?page=education"><i
                                                                    class="fa fa-graduation-cap"></i>AI-Powered
                                                                Educational LMS</a></li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-edit"></i> AI-Powered Authoring Tools
                                                        <i class="fa fa-angle-right"></i></a>
                                                    <!-- Sub-dropdown for AI-Powered Authoring Tools -->
                                                    <ul class="dropdown-submenu">
                                                        <li><a href="index.php?page=video-creation"><span
                                                                    class="mr-1"><img src="img/videoe.png" width="20px"
                                                                        alt></span>AI-Powered
                                                                Video
                                                                Creator</a></li>
                                                        <li><a href="index.php?page=smart-video"><span class="mr-1"><img
                                                                        src="img/videot.png" width="20px"
                                                                        alt></span>Smart
                                                                Video Tool</a></li>
                                                        <li><a href="index.php?page=smart-presentation"><span
                                                                    class="mr-1"><img src="img/ppt.png" width="20px"
                                                                        alt></span>Smart
                                                                Presentations Tool</a></li>
                                                        <li><a href="index.php?page=virtual-reality"><span
                                                                    class="mr-1"><img src="img/reality.png" width="20px"
                                                                        alt></span>360 Virtual Reality Tool</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="<?= ($page == 'e-learning' || $page == 'plugin' || $page == 'ui-ux' || $page == 'integration' || $page == 'learing-app') ? 'active' : '' ?>">
                                            <a href="#"><i class="fa fa-briefcase"></i> Service Offering <i
                                                    class="fa fa-caret-down"></i></a>
                                            <ul class="dropdown">
                                                <li>
                                                    <a href="#"><i class="fa fa-wrench"></i> Moodle Services <i
                                                            class="fa fa-angle-right"></i></a>
                                                    <!-- Sub-dropdown for Moodle Services -->
                                                    <ul class="dropdown-submenu">
                                                        <li class><a href="index.php?page=ui-ux"><i
                                                                    class="fa fa-compass"></i>Moodle
                                                                UI/UX Customization </a></li>
                                                        <li><a href="index.php?page=plugin"><i
                                                                    class="fa fa-puzzle-piece"></i>Moodle
                                                                Plugin
                                                                Development</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="index.php?page=e-learning"><i
                                                            class="fa fa-paint-brush"></i> Custom
                                                        E-learning</a></li>
                                                <li><a href="index.php?integration"><i class="fa fa-link"></i>
                                                        Integrations</a></li>
                                                <li><a href="index.php?page=learning-app"><i class="fa fa-mobile"></i>
                                                        Learning App
                                                        Development</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="index.php?page=case-study"><i class="fa fa-book"></i>Case Study</a>
                                        </li>
                                        <li><a href="index.php?page=about-us"><i class="fa fa-info-circle"></i> About
                                                Us</a></li>
                                        <li><a href="index.php?page=contact-us"><i class="fa fa-envelope"></i> Contact
                                                Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote d-flex">
                                <a href="freetrial_form.html" class="btn">Get Free Trial</a>
                                <a href="book_form.html" class="btn">Book A Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
        <!--/ End Header Inner -->
    </header>