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
    
    // constants in project about database and session data
    
        $_SESSION['servername'] = "localhost" ;
        $_SESSION['serverusername'] = "root" ;
        $_SESSION['serveruserpassword'] = "" ;
        $_SESSION['dbname'] = "EOP" ;
        $_SESSION['uid'];
        $_SESSION['uname'];
        $_SESSION['uemail'];
        $_SESSION['utype'];
   
    ?>
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
                                    <a href="Login/index.php" class="main-btn">login</a>
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
                                        <a href="Login/index.php" class="main-btn">login</a>
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
   
    <!--====== SLIDER PART START ======-->

    <?php
    if (empty($_SESSION['utype'])){
	    echo '
	    <section id="slider-part" class="slider-active">
	        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-1.jpg)" data-overlay="4">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xl-7 col-lg-9">
	                        <div class="slider-cont">
	                            <h1 data-animation="bounceInLeft" data-delay="1s">Udergraduate</h1>
	                            <p data-animation="fadeInUp" data-delay="1.3s">A generation of auto-didacts, educated by the Internet and leveraged by technology, will eventually starve the industrial-education system.</p>
	                            <ul>
	                                <!--<li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>-->
	                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="Login/index.php">Get Started</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> <!-- row -->
	            </div> <!-- container -->
	        </div> <!-- single slider -->
	        
	        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-2.jpg)" data-overlay="4">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xl-7 col-lg-9">
	                        <div class="slider-cont">
	                            <h1 data-animation="bounceInLeft" data-delay="1s">Postgraduate</h1>
	                            <p data-animation="fadeInUp" data-delay="1.3s">Learning is like rowing upstream: not to advance is to drop back.</p>
	                            <ul>
	                                <!--<li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>-->
	                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="Login/index.php">Get Started</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> <!-- row -->
	            </div> <!-- container -->
	        </div> <!-- single slider -->
	        
	        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-3.jpg)" data-overlay="4">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xl-7 col-lg-9">
	                        <div class="slider-cont">
	                            <h1 data-animation="bounceInLeft" data-delay="1s">Careers</h1>
	                            <p data-animation="fadeInUp" data-delay="1.3s">Choose a job you love, and you will never have to work a day in your life.</p>
	                            <ul>
	                                <!--<li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>-->
	                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="Login/index.php">Get Started</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> <!-- row -->
	            </div> <!-- container -->
	        </div> <!-- single slider -->
	    </section>';
	}else{
		echo '
	    <section id="slider-part" class="slider-active">
	        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-1.jpg)" data-overlay="4">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xl-7 col-lg-9">
	                        <div class="slider-cont">
	                            <h1 data-animation="bounceInLeft" data-delay="1s">Udergraduate</h1>
	                            <p data-animation="fadeInUp" data-delay="1.3s">A generation of auto-didacts, educated by the Internet and leveraged by technology, will eventually starve the industrial-education system.</p>
	                            <ul>
	                                <!--<li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>-->
	                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="university.php">Get Started</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> <!-- row -->
	            </div> <!-- container -->
	        </div> <!-- single slider -->
	        
	        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-2.jpg)" data-overlay="4">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xl-7 col-lg-9">
	                        <div class="slider-cont">
	                            <h1 data-animation="bounceInLeft" data-delay="1s">Postgraduate</h1>
	                            <p data-animation="fadeInUp" data-delay="1.3s">Learning is like rowing upstream: not to advance is to drop back.</p>
	                            <ul>
	                                <!--<li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>-->
	                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="masters.php">Get Started</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> <!-- row -->
	            </div> <!-- container -->
	        </div> <!-- single slider -->
	        
	        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-3.jpg)" data-overlay="4">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xl-7 col-lg-9">
	                        <div class="slider-cont">
	                            <h1 data-animation="bounceInLeft" data-delay="1s">Careers</h1>
	                            <p data-animation="fadeInUp" data-delay="1.3s">Choose a job you love, and you will never have to work a day in your life.</p>
	                            <ul>
	                                <!--<li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>-->
	                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="jobs.php">Get Started</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div> <!-- row -->
	            </div> <!-- container -->
	        </div> <!-- single slider -->
	    </section>';
	}
    ?>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Best educational portal to learn everything</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a>
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Medicine</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a>
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-2.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Engineering</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a>
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-3.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Programming</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a>
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-4.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Language</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a>
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-5.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Business</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a>
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-6.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Low</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to EOP </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>The increase in the use of technology in daily life activities has led to the growth and popularity of Internet portal sites. Portals are gateways that provide information ranging from general to specific interests.<br><br> EOP (Educational Organization Portal) is a web-based system offers several services for visitor, admins and organization staff, it designed to give users a resource for locating and navigating to Web-based resources that support educational services, it designed to achieve less of time and cost.</p>
                        <a href="about.php" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <?php
                	echo '
	               		<div class="col-lg-6 offset-lg-1">
	                    <div class="about-event mt-50">
                        <div class="event-title">
                        <h3>Upcoming events</h3>
                        </div> <!-- event title -->
                        <ul>';
                        $conn = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT Name, EDate, StartTime, EndTime, Address, Image FROM Event ORDER By ID desc LIMIT 3";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						    	$itemName = $row['Name'];
						    	$itemDate = $row['EDate'];
								echo '
					                        <li>
				                                <div class="singel-event">
				                                    <span><i class="fa fa-calendar"></i>'.$row['EDate'].'</span>
				                                    <a href="events-singel.php?eventname='.$itemName.'&eventdate='.$itemDate.'"><h4>'.$row['Name'].'</h4></a>
				                                    <span><i class="fa fa-clock-o"></i> '.$row['StartTime'].' - '.$row['EndTime'].'</span>
				                                    <span><i class="fa fa-map-marker"></i> '.$row['Address'].' </span>
				                                </div>
				                            </li>
					                       ';
							}
						}
						echo ' </ul> 
					                    </div> <!-- about event -->
					                </div>';
                ?>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="images/about/bg-1.png" alt="About">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== APPLY PART START ======-->
    
    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for scholarship</h3>
                            <p>EOP offers a number of scholarships, preferential rates and corporate discounts on tuition fees. Get more information and start your journey with us today.</p>
                            <a href="scholarship.php" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Apply for master</h3>
                            <p>Within our Master programmes you both deepen your professional skills and your knowledge in the area of General Management for a successful future as professional or executive. </p>
                            <a href="masters.php" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
            	<?php
        	 		$connCourse = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
					if ($connCourse->connect_error) {
					    die("Connection failed: " . $connCourse->connect_error);
					}
					$sqlCourse = "SELECT Image, Name, Teacher FROM Courses ORDER By ID desc";
					$resultCourse = $connCourse->query($sqlCourse);
					if ($resultCourse->num_rows > 0) {
					    // output data of each row
					    while($row = $resultCourse->fetch_assoc()) {
					    	$itemName = $row['Name'];
					    	$itemImage = $row['Image'];
					    	$itemTeacher = $row['Teacher'];
            				echo'
				            	<div class="col-lg-4">
				                    <div class="singel-course">
				                        <div class="thum">
				                            <div class="image">
				                                <img src="data:image/jpeg;base64,'.base64_encode($itemImage).'" alt="Course">
				                            </div>
				                        </div>
				                        <div class="cont">
				                            <a href="courses-singel.php"><h4>'.$itemName.'</h4></a>
				                            <div class="course-teacher">
				                                <div class="thum">
				                                    <a href="#"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
				                                </div>
				                                <div class="name">
				                                    <a href="#"><h6>'.$itemTeacher.'</h6></a>
				                                </div>
				                            </div>
				                        </div>
				                    </div> <!-- singel course -->
				                </div>';
				            }
				        }
				    echo "</div>";
                ?>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>
    
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
    <!--====== COURSE PART ENDS ======-->
   
    <!--====== VIDEO FEATURE PART START ======-->
    
    <!--<section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/bg-1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=bRRtdzJH1oE"><i class="fa fa-play"></i></a>
                    </div>--> <!-- row -->
                <!--</div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Our Facilities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Global Certificate</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div>--> <!-- singel feature -->
                            <!--</li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Alumni Support</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div>--> <!-- singel feature -->
                            <!--</li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Books & Library</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div>--> <!-- singel feature -->
                            <!--</li>
                        </ul>
                    </div>--> <!-- feature -->
                <!--</div>
            </div>--> <!-- row -->
        <!--</div> --><!-- container -->
        <!--<div class="feature-bg"></div>--> <!-- feature bg -->
    <!--</section>-->
    
    <!--====== VIDEO FEATURE PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <!--<section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div>--> <!-- section title -->
                    <!--<div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Career with us</a>
                    </div>--> <!-- teachers cont -->
                <!--</div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-1.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php"><h6>Mark alen</h6></a>
                                        <span>Vice chencelor</span>
                                    </div>
                                </div>--> <!-- singel teachers -->
                            <!--</div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php"><h6>David card</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> --><!-- singel teachers -->
                            <!--</div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php"><h6>Rebeka alig</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> --><!-- singel teachers -->
                            <!--</div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php"><h6>Hanna bein</h6></a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div>--> <!-- singel teachers -->
                            <!--</div>
                        </div>--> <!-- row -->
                    <!--</div> --><!-- teachers -->
                <!--</div>
            </div>--> <!-- row -->
        <!--</div> --><!-- container -->
    <!--</section>-->
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== PUBLICATION PART START ======-->
    
    <section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Publications</h5>
                        <h2>From Store </h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <a href="books.php" class="main-btn">All Books</a>
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                   <?php
	                	$connBook = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
						if ($connBook->connect_error) {
						    die("Connection failed: " . $connBook->connect_error);
						}
						$sqlBook = "SELECT Image, Title, Writer FROM Books ORDER By ID DESC LIMIT 4";
						$resultBook = $connBook->query($sqlBook);
						if ($resultBook->num_rows > 0) {
						    // output data of each row
						    while($row = $resultBook->fetch_assoc()) {
						    	$itemName = $row['Title'];
						    	$itemImage = $row['Image'];
						    	$itemWriter = $row['Writer'];
	                	echo'
	                	<div class="col-lg-3 col-md-6 col-sm-8">
	                    <div class="singel-publication mt-30">
	                        <div class="image">
	                            <img src="data:image/jpeg;base64,'.base64_encode($itemImage).'" alt="Publication">
	                            <div class="add-cart">
	                                <ul>
	                                    <!--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>-->
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="cont">
	                            <div class="name"style="position: .center;vertical-align:middle;text-align:center;margin-left: 25%">
	                                <a href="book-singel.php?bookname='.$itemName.'&bookwriter='.$itemWriter.'"><h6> '.$itemName.' </h6></a>
	                                <span>By '.$itemWriter.'</span>
	                            </div>
	                            <!--<div class="button text-right">
	                                <a href="#" class="main-btn">Buy Now ($50)</a>
	                            </div>-->
	                        </div>
	                    </div> <!-- singel publication -->
	                    </div>';
			                }
			            }
                    ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PUBLICATION PART ENDS ======-->
   
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
   
    <!--====== NEWS PART START ======-->
    
    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the news</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
            	<?php
            	$connNews = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
						if ($connNews->connect_error) {
						    die("Connection failed: " . $connNews->connect_error);
						}
						$sqlNews = "SELECT Image, Title, NDate, AdminName, Description FROM News ORDER By ID desc LIMIT 1";
						$resultNews = $connNews->query($sqlNews);
						if ($resultNews->num_rows > 0) {
						    // output data of each row
						    while($row = $resultNews->fetch_assoc()) {
						    	$itemName = $row['Title'];
						    	$itemImage = $row['Image'];
						    	$itemAdmin = $row['AdminName'];
						    	$itemDate = $row['NDate'];
						    	$itemDescrip = $row['Description'];
				            	echo '
				                <div class="col-lg-6">
				                    <div class="singel-news mt-30">
				                        <div class="news-thum pb-25">
				                            <img src="data:image/jpeg;base64,'.base64_encode($itemImage).'" alt="News">
				                        </div>
				                        <div class="news-cont">
				                            <ul>
				                                <li><a><i class="fa fa-calendar"></i>'.$itemDate.' </a></li>
				                                <li><a> <span>By</span> '.$itemAdmin.'</a></li>
				                            </ul>
				                            <a><h3>'.$itemName.'</h3></a>
				                            <p>'.$itemDescrip.'</p>
				                        </div>
				                    </div> <!-- singel news -->
				                </div>';
				            }
				        }

				        echo'<div class="col-lg-6">';
				        $connNews3 = new mysqli($_SESSION['servername'], $_SESSION['serverusername'], $_SESSION['serveruserpassword'], $_SESSION['dbname']);
						if ($connNews3->connect_error) {
						    die("Connection failed: " . $connNews3->connect_error);
						}
						$sqlNews3 = "SELECT Image, Title, NDate, AdminName, Description FROM News WHERE ID != (SELECT MAX(ID) FROM News) ORDER BY ID DESC LIMIT 3";
						$resultNews3 = $connNews3->query($sqlNews3);
						if ($resultNews3->num_rows > 0) {
						    // output data of each row
						    while($row = $resultNews3->fetch_assoc()) {
						    	$itemName = $row['Title'];
						    	$itemImage = $row['Image'];
						    	$itemAdmin = $row['AdminName'];
						    	$itemDate = $row['NDate'];
						    	$itemDescrip = $row['Description'];
				       			 echo'
				                    <div class="singel-news news-list">
				                        <div class="row">
				                            <div class="col-sm-4">
				                                <div class="news-thum mt-30">
				                                    <img src="data:image/jpeg;base64,'.base64_encode($itemImage).'" alt="News">
				                                </div>
				                            </div>
				                            <div class="col-sm-8">
				                                <div class="news-cont mt-30">
				                                    <ul>
				                                        <li><a href="#"><i class="fa fa-calendar"></i> '.$itemDate.'</a></li>
				                                        <li><a href="#"> <span>By</span> '.$itemAdmin.'</a></li>
				                                    </ul>
				                                    <a href="#"><h3>'.$itemName.'</h3></a>
				                                    <p>'.$itemDescrip.'</p>
				                                </div>
				                            </div>
				                        </div> <!-- row -->
				                    </div> <!-- singel news -->
				                   ';
				               }
				           }
		                echo'</div>';
                ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== NEWS PART ENDS ======-->
   
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
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
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
