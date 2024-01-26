<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>EOP </title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <?php
    //header
        if ($_SESSION['utype'] == "admin"){
            $adminname = $_SESSION['uname'];
        echo ' <header id="header-part">
           
            <!--<div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-contact text-lg-left text-center">
                                <ul>
                                    <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                                    <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-opening-time text-lg-right text-center">
                                <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                            </div>
                        </div>
                    </div>--> <!-- row -->
                <!--</div>--> <!-- container -->
            <!--</div>--> <!-- header top -->
            
            <div class="header-logo-support pt-30 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="support-button float-right d-none d-md-block">
                                <div class="support float-left">
                                    <div class="icon">
                                        <img src="images/all-icon/support.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <p>Need Help? call us free</p>
                                        <span>010 000 777 00</span>
                                    </div>
                                </div>
                                <!--<div class="button float-left">
                                    <a href="Login/index.php" class="main-btn">Login</a>
                                </div>-->
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header logo support -->
            
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="active" href="index.php">Home</a>
                                            <!--<ul class="sub-menu">
                                                <li><a class="active" href="index-2.php">Home 01</a></li>
                                                <li><a href="index-3.php">Home 02</a></li>
                                                <li><a href="index-4.php">Home 03</a></li>
                                            </ul>-->
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.php">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a>Undergraduate</a>
                                            <ul class="sub-menu">
                                                <li><a href="university.php">Universities</a></li>
                                                <li><a href="scholarship.php">Scholarship</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="books.php">Books</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a>Postgraduate</a>
                                            <ul class="sub-menu">
                                                <li><a href="masters.php">Masters</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="training.php">Training</a></li>
                                                <!--<li><a href="courses-singel.php">Course Singel</a></li>-->
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a>Careers</a>
                                            <ul class="sub-menu">
                                                <li><a href="jobs.php">Jobs</a></li>
                                                <li><a href="events.php">Event</a></li>
                                            </ul>
                                        </li>
                                        <!--<li class="nav-item">
                                            <a href="events.php">Events</a>
                                            <ul class="sub-menu">
                                                <li><a href="events.php">Events</a></li>
                                                <li><a href="events-singel.php">Event Singel</a></li>
                                            </ul>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="teachers.php">Our Staff</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.php">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a><i class="fa fa-user" aria-hidden="true"></i> '.$adminname.'</a>
                                            <ul class="sub-menu">
                                                <li><a href="addcontent.php">Add Content</a></li>
                                                <li><a href="administration.php">Administration</a></li>
                                                <li><a href="deletecontent.php">Delete Content</a></li>
                                                <li><a href="profile.php">Profile</a></li>
                                                <li><a href="php/logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav> <!-- nav -->
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                            <div class="right-icon text-right">
                                <ul>
                                    <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>-->
                                </ul>
                            </div> <!-- right icon -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div>
            
        </header>';
        }else if ($_SESSION['utype'] == "staff"){
            $staffname = $_SESSION['uname'];
            echo ' <header id="header-part">
               
                <!--<div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="header-contact text-lg-left text-center">
                                    <ul>
                                        <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                                        <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="header-opening-time text-lg-right text-center">
                                    <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                                </div>
                            </div>
                        </div>--> <!-- row -->
                    <!--</div>--> <!-- container -->
                <!--</div>--> <!-- header top -->
                
                <div class="header-logo-support pt-30 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="images/logo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="support-button float-right d-none d-md-block">
                                    <div class="support float-left">
                                        <div class="icon">
                                            <img src="images/all-icon/support.png" alt="icon">
                                        </div>
                                        <div class="cont">
                                            <p>Need Help? call us free</p>
                                            <span>010 000 777 00</span>
                                        </div>
                                    </div>
                                    <!--<div class="button float-left">
                                        <a href="Login/index.php" class="main-btn">Login</a>
                                    </div>-->
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- header logo support -->
                
                <div class="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                            <a class="active" href="index.php">Home</a>
                                            <!--<ul class="sub-menu">
                                                <li><a class="active" href="index-2.php">Home 01</a></li>
                                                <li><a href="index-3.php">Home 02</a></li>
                                                <li><a href="index-4.php">Home 03</a></li>
                                            </ul>-->
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.php">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a>Undergraduate</a>
                                            <ul class="sub-menu">
                                                <li><a href="university.php">Universities</a></li>
                                                <li><a href="scholarship.php">Scholarship</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="books.php">Books</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a>Postgraduate</a>
                                            <ul class="sub-menu">
                                                <li><a href="masters.php">Masters</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="training.php">Training</a></li>
                                                <!--<li><a href="courses-singel.php">Course Singel</a></li>-->
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a>Careers</a>
                                            <ul class="sub-menu">
                                                <li><a href="jobs.php">Jobs</a></li>
                                                <li><a href="events.php">Event</a></li>
                                            </ul>
                                        </li>
                                        <!--<li class="nav-item">
                                            <a href="events.php">Events</a>
                                            <ul class="sub-menu">
                                                <li><a href="events.php">Events</a></li>
                                                <li><a href="events-singel.php">Event Singel</a></li>
                                            </ul>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="teachers.php">Our Staff</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.php">Contact</a>
                                        </li>
                                            <li class="nav-item">
                                                <a><i class="fa fa-user" aria-hidden="true"></i> '.$staffname.'</a>
                                                <ul class="sub-menu">
                                                    <li><a href="addcontent-staff.php">Add Content</a></li>
                                                    <li><a href="profile.php">Profile</a></li>
                                                    <li><a href="php/logout.php">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav> <!-- nav -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                                <div class="right-icon text-right">
                                    <ul>
                                        <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>-->
                                    </ul>
                                </div> <!-- right icon -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
                
            </header>';
        }else if ($_SESSION['utype'] == "student"){
            $studentname = $_SESSION['uname'];
            echo ' <header id="header-part">
               
                <!--<div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="header-contact text-lg-left text-center">
                                    <ul>
                                        <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                                        <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="header-opening-time text-lg-right text-center">
                                    <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                                </div>
                            </div>
                        </div>--> <!-- row -->
                    <!--</div>--> <!-- container -->
                <!--</div>--> <!-- header top -->
                
                <div class="header-logo-support pt-30 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="images/logo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="support-button float-right d-none d-md-block">
                                    <div class="support float-left">
                                        <div class="icon">
                                            <img src="images/all-icon/support.png" alt="icon">
                                        </div>
                                        <div class="cont">
                                            <p>Need Help? call us free</p>
                                            <span>010 000 777 00</span>
                                        </div>
                                    </div>
                                    <!--<div class="button float-left">
                                        <a href="Login/index.php" class="main-btn">Login</a>
                                    </div>-->
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- header logo support -->
                
                <div class="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                            <a class="active" href="index.php">Home</a>
                                            <!--<ul class="sub-menu">
                                                <li><a class="active" href="index-2.php">Home 01</a></li>
                                                <li><a href="index-3.php">Home 02</a></li>
                                                <li><a href="index-4.php">Home 03</a></li>
                                            </ul>-->
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.php">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a>Undergraduate</a>
                                            <ul class="sub-menu">
                                                <li><a href="university.php">Universities</a></li>
                                                <li><a href="scholarship.php">Scholarship</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="books.php">Books</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a>Postgraduate</a>
                                            <ul class="sub-menu">
                                                <li><a href="masters.php">Masters</a></li>
                                                <li><a href="courses.php">Courses</a></li>
                                                <li><a href="training.php">Training</a></li>
                                                <!--<li><a href="courses-singel.php">Course Singel</a></li>-->
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a>Careers</a>
                                            <ul class="sub-menu">
                                                <li><a href="jobs.php">Jobs</a></li>
                                                <li><a href="events.php">Event</a></li>
                                            </ul>
                                        </li>
                                        <!--<li class="nav-item">
                                            <a href="events.php">Events</a>
                                            <ul class="sub-menu">
                                                <li><a href="events.php">Events</a></li>
                                                <li><a href="events-singel.php">Event Singel</a></li>
                                            </ul>
                                        </li>-->
                                        <li class="nav-item">
                                            <a href="teachers.php">Our Staff</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.php">Contact</a>
                                        </li>
                                            <li class="nav-item">
                                                <a><i class="fa fa-user" aria-hidden="true"></i> '.$studentname.'</a>
                                                <ul class="sub-menu">
                                                    <li><a href="mydata-student.php">My Data</a></li>
                                                    <li><a href="profile.php">Profile</a></li>
                                                    <li><a href="php/logout.php">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav> <!-- nav -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                                <div class="right-icon text-right">
                                    <ul>
                                        <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>-->
                                    </ul>
                                </div> <!-- right icon -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
                
            </header>';
        }else{
            echo ' <header id="header-part">
               
                <!--<div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="header-contact text-lg-left text-center">
                                    <ul>
                                        <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                                        <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="header-opening-time text-lg-right text-center">
                                    <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                                </div>
                            </div>
                        </div>--> <!-- row -->
                    <!--</div>--> <!-- container -->
                <!--</div>--> <!-- header top -->
                
                <div class="header-logo-support pt-30 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="images/logo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="support-button float-right d-none d-md-block">
                                    <div class="support float-left">
                                        <div class="icon">
                                            <img src="images/all-icon/support.png" alt="icon">
                                        </div>
                                        <div class="cont">
                                            <p>Need Help? call us free</p>
                                            <span>010 000 777 00</span>
                                        </div>
                                    </div>
                                    <div class="button float-left">
                                        <a href="Login/index.php" class="main-btn">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- header logo support -->
                
                <div class="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="active" href="index.php">Home</a>
                                                <!--<ul class="sub-menu">
                                                    <li><a class="active" href="index-2.php">Home 01</a></li>
                                                    <li><a href="index-3.php">Home 02</a></li>
                                                    <li><a href="index-4.php">Home 03</a></li>
                                                </ul>-->
                                            </li>
                                            <li class="nav-item">
                                                <a href="about.php">About us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a>Undergraduate</a>
                                                <ul class="sub-menu">
                                                    <li><a href="university.php">Universities</a></li>
                                                    <li><a href="scholarship.php">Scholarship</a></li>
                                                    <li><a href="courses.php">Courses</a></li>
                                                    <li><a href="books.php">Books</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a>Postgraduate</a>
                                                <ul class="sub-menu">
                                                    <li><a href="masters.php">Masters</a></li>
                                                    <li><a href="courses.php">Courses</a></li>
                                                    <li><a href="training.php">Training</a></li>
                                                    <!--<li><a href="courses-singel.php">Course Singel</a></li>-->
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a>Careers</a>
                                                <ul class="sub-menu">
                                                    <li><a href="jobs.php">Jobs</a></li>
                                                    <li><a href="events.php">Event</a></li>
                                                </ul>
                                            </li>
                                            <!--<li class="nav-item">
                                                <a>Events</a>
                                                <ul class="sub-menu">
                                                    <li><a href="events.php">Events</a></li>
                                                    <li><a href="events-singel.php">Event Singel</a></li>
                                                </ul>
                                            </li>-->
                                            <li class="nav-item">
                                                <a href="teachers.php">Our Staff</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="contact.php">Contact</a>
                                            </li>
                                            <!--<li class="nav-item">
                                                <a href="contact.php">Login</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">As Student</a></li>
                                                    <li><a href="#">As Staff</a></li>
                                                    <li><a href="#">As Admin</a></li>
                                                </ul>
                                            </li>-->
                                        </ul>
                                    </div>
                                </nav> <!-- nav -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                                <div class="right-icon text-right">
                                    <ul>
                                        <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>-->
                                    </ul>
                                </div> <!-- right icon -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div>
                
            </header>';
        }
    ?>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-5.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Add Content</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Content</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    <div class="col-lg-12">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="adduniversity-tab" data-toggle="tab" href="#adduniversity" role="tab" aria-controls="adduniversity" aria-selected="true">Add University</a>
                            </li>
                            <li class="nav-item">
                                <a id="addscholarship-tab" data-toggle="tab" href="#addscholarship" role="tab" aria-controls="addscholarship" aria-selected="false">Add Scholarship</a>
                            </li>
                            <li class="nav-item">
                                <a id="addcourse-tab" data-toggle="tab" href="#addcourse" role="tab" aria-controls="addcourse" aria-selected="false">Add Course</a>
                            </li>
                            <li class="nav-item">
                                <a id="addbook-tab" data-toggle="tab" href="#addbook" role="tab" aria-controls="addbook" aria-selected="false">Add Book</a>
                            </li>
                            <li class="nav-item">
                                <a id="addmaster-tab" data-toggle="tab" href="#addmaster" role="tab" aria-controls="addmaster" aria-selected="false">Add Master</a>
                            </li>
                            <li class="nav-item">
                                <a id="addtraining-tab" data-toggle="tab" href="#addtraining" role="tab" aria-controls="addtraining" aria-selected="false">Add Training</a>
                            </li>
                            <li class="nav-item">
                                <a id="addjob-tab" data-toggle="tab" href="#addjob" role="tab" aria-controls="addjob" aria-selected="false">Add Job</a>
                            </li>
                            <li class="nav-item">
                                <a id="addevent-tab" data-toggle="tab" href="#addevent" role="tab" aria-controls="addevent" aria-selected="false">Add Event</a>
                            </li>
                            <li class="nav-item">
                                <a id="addteacher-tab" data-toggle="tab" href="#addteacher" role="tab" aria-controls="addteacher" aria-selected="false">Add Teacher</a>
                            </li>
                            <li class="nav-item">
                                <a id="addnews-tab" data-toggle="tab" href="#addnews" role="tab" aria-controls="addnews" aria-selected="false">Add News</a>
                            </li>
                        </ul> <!-- nav -->
                        <!------------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="adduniversity" role="tabpanel" aria-labelledby="adduniversity-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>University</h5>
                                                            <h2>Add new university</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/adduniversity.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="link" type="text" placeholder="Link" data-error="Link Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="requirement" placeholder="Requirement" data-error="Requirement is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="departmentNum" type="text" placeholder="Department Number" data-error="Department Number is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="staffNum" type="text" placeholder="Staff Number" data-error="Staff Number Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade " id="addscholarship" role="tabpanel" aria-labelledby="addscholarship-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Scholarship</h5>
                                                            <h2>Add new scholarship</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addscholarship.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="link" type="text" placeholder="Link" data-error="Link Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="requirement" placeholder="Requirement" data-error="Requirement is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="duration" type="text" placeholder="Duration" data-error="Duration Number is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="StudentNum" type="text" placeholder="Student Number" data-error="Student Number Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade " id="addcourse" role="tabpanel" aria-labelledby="addcourse-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Course</h5>
                                                            <h2>Add new course</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addcourse.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="category" type="text" placeholder="Category" data-error="Category Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <input name="teacher" type="text" placeholder="Teacher" data-error="Teacher Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="teacherabout" placeholder="Teacher About" data-error="Teacher About is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="summery" placeholder="Summery" data-error="Summery is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="requirement" placeholder="Requirement About" data-error="Requirement About is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="duration" type="text" placeholder="Duration" data-error="Duration is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="quizzes" type="text" placeholder="Quizzes" data-error="Quizzes is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="lectures" type="text" placeholder="Lectures" data-error="Lectures is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="students" type="text" placeholder="Students" data-error="Students is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <input name="link" type="text" placeholder="Link" data-error="Link is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade " id="addbook" role="tabpanel" aria-labelledby="addbook-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Book</h5>
                                                            <h2>Add new book</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addbook.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="title" type="text" placeholder="Title" data-error="Title is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="writer" type="text" placeholder="Wirter" data-error="Witer Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span> PDF  :</span>
                                                                            <input name="file" type="file" placeholder="" data-error="File is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade " id="addmaster" role="tabpanel" aria-labelledby="addmaster-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Master</h5>
                                                            <h2>Add new master</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addmaster.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="link" type="text" placeholder="Link" data-error="Link Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="requirement" placeholder="Requirement" data-error="Requirement is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="duration" type="text" placeholder="Duration" data-error="Duration Number is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="StudentNum" type="text" placeholder="Student Number" data-error="Student Number Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade " id="addtraining" role="tabpanel" aria-labelledby="addtraining-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Training</h5>
                                                            <h2>Add new training</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addtraining.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="link" type="text" placeholder="Link" data-error="Link Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="requirement" placeholder="Requirement" data-error="Requirement is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="duration" type="text" placeholder="Duration" data-error="Duration Number is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="trainersNum" type="text" placeholder="Trainers Number" data-error="Trainers Number Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="addjob" role="tabpanel" aria-labelledby="addjob-tab">
                                <div class="dashboard-cont">
                                    <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Job</h5>
                                                            <h2>Add new job</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addjob.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="title" type="text" placeholder="Title" data-error="Title is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="link" type="text" placeholder="Link" data-error="Link Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="requirement" placeholder="Requirement" data-error="Requirement is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="email" type="text" placeholder="Email" data-error="Email is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="mobile" type="text" placeholder="Mobile Number" data-error="Mobile Number Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- courses cont -->
                            </div>
                            <div class="tab-pane fade" id="addevent" role="tabpanel" aria-labelledby="addevent-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Event</h5>
                                                            <h2>Add new event</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addevent.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="edate" type="text" placeholder="Date like 2020-01-31" data-error="Date Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="address" type="text" placeholder="Address" data-error="Address Number is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="startTime" type="text" placeholder="Start Time like 12:00 AM" data-error="Start Time is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="endTime" type="text" placeholder="End Time like 03:00 PM" data-error="End Time is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="addteacher" role="tabpanel" aria-labelledby="addteacher-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>Teacher</h5>
                                                            <h2>Add new teacher</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addteacher.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="depart" type="text" placeholder="Department" data-error="Department is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="about" placeholder="About" data-error="About is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="email" type="text" placeholder="Email" data-error="Email is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="mobile" type="text" placeholder="Mobile" data-error="Mobile is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="addnews" role="tabpanel" aria-labelledby="addnews-tab">
                                <div class="dashboard-cont">
                                     <section id="contact-page" class="pt-90 pb-120 gray-bg">
                                        <div class="container">
                                            <div class="row" >
                                                <div class="col-lg-10">
                                                    <div class="contact-from mt-30">
                                                        <div class="section-title">
                                                            <h5>News</h5>
                                                            <h2>Add new News</h2>
                                                        </div> <!-- section title -->
                                                        <div class="main-form pt-45">
                                                            <form action="php/addnews.php" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="singel-form form-group">
                                                                            <input name="title" type="text" placeholder="Title" data-error="Title is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="singel-form form-group">
                                                                            <input name="ndate" type="text" placeholder="Date like 2020-01-31" data-error="Date is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="singel-form form-group">
                                                                            <textarea name="description" placeholder="Description" data-error="Description is required." required="required"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div>
                                                                            <span>Image :</span>
                                                                            <input name="image" type="file" placeholder="" data-error="Image is required." required="required">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div> <!-- singel form --> 
                                                                    </div>
                                                                    
                                                                    <!--<p class="form-message"></p>-->
                                                                    <div class="col-md-12">
                                                                        <br>
                                                                        <div class="singel-form">
                                                                            <button type="submit" name="add" class="main-btn">Add</button>
                                                                        </div> <!-- singel form -->
                                                                    </div> 
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div> <!-- main form -->
                                                    </div> <!--  contact from -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- container -->
                                    </section>
                                </div> <!-- dashboard cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
    </div>
    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
     <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo-3.png" alt="Logo"></a>
                            </div>
                            <p>EOP (Educational Organization Portal) is a web-based system offers several services for visitor, admins and organization staff, it designed to give users a resource for locating and navigating to Web-based resources that support educational services.</p>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.php"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="university.php"><i class="fa fa-angle-right"></i>Universities</a></li>
                                <li><a href="scholarship.php"><i class="fa fa-angle-right"></i>Scholarships</a></li>
                                <li><a href="courses.php"><i class="fa fa-angle-right"></i>Courses</a></li>
                            </ul>
                            <ul>
                                <li><a href="masters.php"><i class="fa fa-angle-right"></i>Masters</a></li>
                                <li><a href="training.php"><i class="fa fa-angle-right"></i>Trainings</a></li>
                                <li><a href="jobs.php"><i class="fa fa-angle-right"></i>Jobs</a></li>
                                <li><a href="events.php"><i class="fa fa-angle-right"></i>Events</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Luxor City, Luxor, Luxor Governorate</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>010 000 777 00</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@Louxor.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        
    </footer>
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>
