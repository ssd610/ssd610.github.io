<?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);
        if($currect_page == $url)
        {
            echo 'active';
        }
        else
        {
            $projects = [
                'project-grocery.php',
                'project-hostel.php',
                'project-jwellery.php',
                'project-mask.php',
                'project-parking.php',
                'project-refrigerator.php'
            ];
            if(in_array($url,$projects) && $currect_page == "projects.php")
                echo 'active';
        }
    }
?>
<!doctype html>
<html class="no-js" lang="english">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EnR Consulting</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    
        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    </head>
    <body>
        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div class="header-top_area d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-md-5 ">
                                <div class="header_left">
                                    <p>Welcome to EnR consulting service</p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                        <ul>
                                            <li><a href="mailto:info@engagenreap.com"> <i class="fa fa-envelope"></i> info@engagenreap.com</a></li>
                                            <li><a href="tel:+44771024310"> <i class="fa fa-phone"></i> +44 7710 24310</a></li>
                                        </ul>
                                    </div>
                                    <div class="social_media_links">
                                        <a href="https://www.facebook.com/EnRConsultancyServices/" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/EnRConsultancyServices/" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="https://twitter.com/services_enr" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/company/engage-reap-consultancy-services" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <a href="https://www.youtube.com/channel/UCfK_1VsaSyxQwcFhacPE8tw" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="main-header-area">
                    <div class="container">
                        <div class="header_bottom_border">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2">
                                    <div class="logo">
                                        <a href="index.php">
                                            <!--<img src="img/logo.png" alt="">-->
                                            <h3 style="color: white; font-weight: 900;">Engage N' Reap</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a class="<?php active('index.php');?>" href="index.php">home</a></li>
                                                <li><a class="<?php active('about.php');?>" href="about.php">About</a></li>
                                                <li><a class="<?php active('projects.php');?>" href="projects.php">Projects</a></li>
                                                <li><a class="<?php active('services.php');?>" href="services.php">Services</a></li>
                                                <li><a class="<?php active('contact.php');?>" href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a  href="#">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->