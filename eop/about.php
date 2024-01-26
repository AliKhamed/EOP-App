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
    <title>EOP</title>
    
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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to EOP </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>The increase in the use of technology in daily life activities has led to the growth and popularity of Internet portal sites. Portals are gateways that provide information ranging from general to specific interests.<br><br> EOP (Educational Organization Portal) is a web-based system offers several services for visitor, admins and organization staff, it designed to give users a resource for locating and navigating to Web-based resources that support educational services, it designed to achieve less of time and cost.</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="images/about/about-2.jpg" alt="About">
                    </div>  <!-- about imag -->
                </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Why Choose us</h4>
                            <p> EOP (Educational Organization Portal) is a web-based system offers several services for visitor, admins and organization staff, it designed to give users a resource for locating and navigating to Web-based resources that support educational services, it designed to achieve less of time and cost.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p>The mission of the EOP Center is to enhance the quality & efficiency of teaching and learning by making e-learning part of the core curricula of all science parts.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Our vission</h4>
                            <p>Through the educational system, high-quality, in order to build the Egyptian citizen, according to the system of values of civilization and humanity a system of decentralized depends on community participation actor and producer.</p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    <!--====== COUNTER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <!--<section id="teachers-part" class="pt-65 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50 pb-35">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div>--> <!-- section title -->
                <!--</div>
            </div>--> <!-- row -->
            <!--<div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-1.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> --><!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-2.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div>--> <!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-3.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div>--> <!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-4.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div>--> <!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-5.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div> --><!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-6.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div>--> <!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-7.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div>--> <!-- singel teachers -->
                <!--</div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="images/teachers/t-8.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                            <span>Vice chencelor</span>
                        </div>
                    </div>--> <!-- singel teachers -->
                <!--</div>
            </div>--> <!-- row -->
        <!--</div> --><!-- container -->
    <!--</section>-->
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    <section id="testimonial" class="bg_cover pt-115 pb-120" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/t-1.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Recommendation in education portal is helpful for students to know the important learning resources in schools.</p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/t-2.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Effective recommendation letters contain the “Who, Why, Where, When, What, and How” that you may be familiar with from programming.</p>
                            <h6>Ali Hussien</h6>
                            <span>Bsc, Programming</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/t-3.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Make a list of strengths. As you sit down to write your letter, think of what has impressed you about the person you are recommending.  </p>
                            <h6>Roba El Husieny</h6>
                            <span>Bsc, Business</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <?php
                $connPartnar = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
                        if ($connPartnar->connect_error) {
                            die("Connection failed: " . $connPartnar->connect_error);
                        }
                        $sqlPartnar = "SELECT Image FROM Partnars ORDER By ID desc";
                        $resultPartnar = $connPartnar->query($sqlPartnar);
                        if ($resultPartnar->num_rows > 0) {
                            // output data of each row
                            while($row = $resultPartnar->fetch_assoc()) {
                                $itemImage = $row['Image'];
                echo'
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="data:image/jpeg;base64,'.base64_encode($itemImage).'" alt="Logo">
                    </div>
                </div>';
                    }
                }
                ?>
            </div> <!-- row -->
            <br>
            <br>
            <h5 style="position: center;vertical-align:middle;text-align:center;">Partnars</h5>
        </div> <!-- container -->
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

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Location</h6>
                            </div>
                            <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div> <!-- map -->
                        </div> <!-- support -->
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
