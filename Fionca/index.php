<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Fionca/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 09:17:06 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Fionca - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon-2.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper ltr">
<!-- login  form start-->
<div id="overlay"></div>
    <div id="popupDialog">
        <div id="loginForm" class="form-container">
            <h2>Login</h2>
            <form action="login_data.php" method="post" class="login">
                <label for="email">Email:</label>
                <input type="email" name="candidate_email" placeholder="Enter your email">
                <label for="password">Password:</label>
                <input type="password" name="password_generation" placeholder="Enter your password">
                <button type="button" id="togglePassword" aria-label="Toggle Password Visibility" style="position: absolute; top: 73%; right: 230px; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                <button type="submit" class="button-login">Login</button>
                <span class="toggle-link" onclick="toggleForm()">Don't have an account? Register</span>
            </form>
        </div>
        <div id="registrationForm" class="form-container" style="display:none;">
            <h2>Register</h2>
            <form action="registration_data.php" method="post" class="register">
                <label FOR="username">Username</label>
                <input type="text" class="username" name="candidate_username" placeholder="Enter Your Username" required>
                <label for="fullname">Fullname</label>
                <input type="text" class="full_name" name="candidate_fullname" placeholder="Enter Your Full Name" required pattern="^[a-zA-Z\s]{1,50}$" title="Full Name should only contain letters and spaces, up to 50 characters.">
                <label for="email">Email:</label>
                <input type="email" class="email" name="candidate_email" placeholder="Enter Your Email" required>
                <label for="contact">Contact:</label>
                <input type="tel" class="contact" name="candidate_contact" placeholder="Enter Your Phone Number" required pattern="^\d{10}$" title="Phone number should be exactly 10 digits.">
                <label for="password">Password:</label>
                <input type="password" id="password" class="password" name="password_generation" placeholder="Enter Your Password" required pattern="^(?=.*[A-Za-z])(?=.*\d.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must be at least 8 characters long and contain at least one uppercase letter, one symbol, and two numbers.">
                <button type="button" id="togglePassword" aria-label="Toggle Password Visibility" style="position: absolute; top: 73%; right: 230px; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                <button type="submit" class="button-register">Register</button>
                <span class="toggle-link" onclick="toggleForm()">Already have an account? Login</span>
            </form>
        </div>
        <button onclick="closeFn()" class="close">Close</button>
    </div>
   
<!-- login form end-->
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader style-two"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>


    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span>Close</span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://azim.commonsupport.com/Fionca/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Finance</a></li>
                    <li><a href="index.html">Idea</a></li>
                    <li><a href="index.html">Service</a></li>
                    <li><a href="index.html">Growth</a></li>
                    <li><a href="index.html">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->


    <!-- main header -->
    <header class="main-header style-two">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <ul class="info top-left pull-left">
                        <li><a href="index-2.html">About</a></li>
                        <li><a href="index-2.html">Careers</a></li>
                        <li><a href="index-2.html">Services</a></li>
                        <li><a href="index-2.html">Agents</a></li>
                    </ul>
                    <div class="top-right pull-right">
                        <ul class="social-links clearfix">
                            <li>Connect Socially</li>
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="upper-inner clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""></a></figure>
                    </div>
                    <div class="info-box pull-right">
                        <ul class="info-list clearfix">
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                <p>Call Our Support<br /><a href="tel:01005200369">0100 5200 369</a></p>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>838 Andy Street, Madison, <br />New Jersy 08003</p>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                <p>Our Working Hours <br />Mon - Sat: 8 am - 6 pm</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-lower">
            <div class="outer-box">
                <div class="auto-container">
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Page One</a></li>
                                            <li><a href="index-2.html">Home Page Two</a></li>
                                            <li><a href="index-3.html">Home Page Three</a></li>
                                            <li><a href="index-4.html">Home Page Four</a></li>
                                            <li><a href="index-5.html">Home Page Five</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                    <li><a href="index-5.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="index-2.html">About</a>
                                        <ul>
                                            <li><a href="about-1.html">About Us 01</a></li>
                                            <li><a href="about-2.html">About Us 02</a></li>
                                            <li><a href="team.html">Experts Team</a></li>
                                            <li><a href="pricing.html">Our Pricing</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Services</a>
                                        <ul>
                                            <li><a href="service-1.html">Service Page 01</a></li>
                                            <li><a href="service-2.html">Service Page 02</a></li>
                                            <li><a href="financial-analysis.html">Financial Analysis</a></li>
                                            <li><a href="taxation-planning.html">Taxation Planning</a></li>
                                            <li><a href="investment-trading.html">Investment Trading</a></li>
                                            <li><a href="wealth-marketing.html">Wealth Marketing</a></li>
                                            <li><a href="planning-strategies.html">Planning Strategies</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Elements</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 1</h4></li>
                                                        <li><a href="feature-element-1.html">Feature 01</a></li>
                                                        <li><a href="feature-element-2.html">Feature 02</a></li>
                                                        <li><a href="feature-element-3.html">Feature 03</a></li>
                                                        <li><a href="about-element-1.html">About 01</a></li>
                                                        <li><a href="about-element-2.html">About 02</a></li>
                                                        <li><a href="about-element-3.html">About 03</a></li>
                                                        <li><a href="about-element-4.html">About 04</a></li>
                                                        <li><a href="stats-element.html">Stats Element</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 2</h4></li>
                                                        <li><a href="news-element-1.html">News 01</a></li>
                                                        <li><a href="news-element-2.html">News 02</a></li>
                                                        <li><a href="funfact-element-1.html">Fun Fact 01</a></li>
                                                        <li><a href="funfact-element-2.html">Fun Fact 02</a></li>
                                                        <li><a href="service-element-1.html">Service 01</a></li>
                                                        <li><a href="service-element-2.html">Service 02</a></li>
                                                        <li><a href="skills-element.html">Skills Element</a></li>
                                                        <li><a href="clients-element.html">Clients</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 3</h4></li>
                                                        <li><a href="team-element-1.html">Team 01</a></li>
                                                        <li><a href="team-element-2.html">Team 02</a></li>
                                                        <li><a href="pricing-element.html">Pricing</a></li>
                                                        <li><a href="testimonial-element-1.html">Testimonial 01</a></li>
                                                        <li><a href="testimonial-element-2.html">Testimonial 02</a></li>
                                                        <li><a href="testimonial-element-3.html">Testimonial 03</a></li>
                                                        <li><a href="work-element-1.html">Working 01</a></li>
                                                        <li><a href="work-element-2.html">Working 02</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 4</h4></li>
                                                        <li><a href="project-element-1.html">Project 01</a></li>
                                                        <li><a href="project-element-2.html">Project 02</a></li>
                                                        <li><a href="chart-element.html">Chart Element</a></li>
                                                        <li><a href="footer-element-1.html">Footer 01</a></li>
                                                        <li><a href="footer-element-2.html">Footer 02</a></li>
                                                        <li><a href="footer-element-3.html">Footer 03</a></li>
                                                        <li><a href="footer-element-4.html">Footer 04</a></li>
                                                        <li><a href="footer-element-5.html">Footer 05</a></li>
                                                    </ul>
                                                </div>                                       
                                            </div>                                            
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-classic.html">Blog Classic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>                              
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#" onclick="popupFn(); return false;">Login</a></li>
                                    <div class="content">
        <?php if (isset($_SESSION['user'])): ?>
            <p class="welcome-message">Welcome, <?php echo htmlspecialchars($_SESSION['user']['candidate_fullname']); ?>!</p>
            <form action="logout.php" method="post">
                <button type="submit" class="logout-button">Logout</button>
            </form>
        <?php else: ?>
           
        <?php endif; ?>
    </div>
                                </ul>
                            </div>
                        </nav>
                        <div class="menu-right-content clearfix">
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><i class="flaticon-search-1"></i></button>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img src="assets/images/small-logo-2.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section style-two">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-4.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>towards a bright future </h5>
                        <h1>Perfect Insurance <br />When it Matters</h1>
                        <p>Beniam quis nostrud exercitation sed lamco laboris nis aliquip <br />repraderit luptate velit excepteur ocaan ipsum.</p>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two"><i class="fas fa-atom"></i>How We Help</a>
                            <a href="index-6.html" class="user-btn-two"><i class="far fa-user"></i>Find an Agent</a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-5.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box centred">
                        <h1>We Provide Not Just <br />Coverage, But Advice</h1>
                        <p>Beniam quis nostrud exercitation sed lamco laboris nis aliquip <br />repraderit luptate velit excepteur ocaan ipsum.</p>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two"><i class="fas fa-atom"></i>How We Help</a>
                            <a href="index-6.html" class="user-btn-two"><i class="far fa-user"></i>Find an Agent</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-6.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1>The Right Caring <br />For Whole Family</h1>
                        <p>Beniam quis nostrud exercitation sed lamco laboris <br />repraderit luptate velit excepteur ocaan.</p>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two mar-0"><i class="fas fa-atom"></i>How We Help</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- feature-style-two -->
    <section class="feature-style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <p>Exercy tation ullamco laboris nisit aliquip dolor esse cillum dolore tau fugiat nulla</p>
                            </div>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="index-2.html">For Individuals</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-5.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <p>Exercy tation ullamco laboris nisit aliquip dolor esse cillum dolore tau fugiat nulla</p>
                            </div>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="index-2.html">For Business</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <p>Exercy tation ullamco laboris nisit aliquip dolor esse cillum dolore tau fugiat nulla</p>
                            </div>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="index-2.html">Claim Center</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/feature-7.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <p>Exercy tation ullamco laboris nisit aliquip dolor esse cillum dolore tau fugiat nulla</p>
                            </div>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="index-2.html">Fully Committed</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-two end -->


    <!-- about-style-two -->
    <section class="about-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_three">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>About fionca</h5>
                                <h2>We Care About Your Life’s Important Things</h2>
                            </div>
                            <div class="text">
                                <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris voluptate velit excepteur duis aute irure dolor voluptate voluptatem accusa ntium dolor lemq laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis ent quas sed ipsum dui architecto beatae.</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-shield-1"></i></div>
                                            <h5><a href="index-2.html">Deeper Experience</a></h5>
                                            <p>Conseqrue dolorn repreh deris velit excepteur duis aute.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-broker"></i></div>
                                            <h5><a href="index-2.html">Thoughtful Solutions</a></h5>
                                            <p>Conseqrue dolorn repreh deris velit excepteur duis aute.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-safe-5"></i></div>
                                            <h5><a href="index-2.html">Safely Investments</a></h5>
                                            <p>Conseqrue dolorn repreh deris velit excepteur duis aute.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-briefcase"></i></div>
                                            <h5><a href="index-2.html">Growing Succes</a></h5>
                                            <p>Conseqrue dolorn repreh deris velit excepteur duis aute.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="image_block_two">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                            <div class="content-box">
                                <i class="fas fa-headphones-alt"></i>
                                <h4>Save Money, Save Life!</h4>
                                <h5>Any questions? Call <a href="tel:01005200369">0100 5200 369</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- stats-section -->
    <section class="stats-section centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <figure class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></figure>
                        <h3>540+ Policies Completed</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <figure class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></figure>
                        <h3>630+ Trusted Customers</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <figure class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></figure>
                        <h3>125+ Opened Locations</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <figure class="icon-box"><img src="assets/images/icons/icon-6.png" alt=""></figure>
                        <h3>100% Client Satisfaction</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stats-section end -->


    <!-- service-style-two -->
    <section class="service-style-two bg-color-2">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
        <div class="auto-container">
            <div class="sec-title light centred">
                <h5>our PRODUCTS</h5>
                <h2>Insurance Areas You <br />Can Fully Trust</h2>
                <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh velit <br />excepteur duis aute irure dolor voluptate voluptatem accusa</p>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-company"></i></div>
                            <h4><a href="index-2.html">Home Insurance</a></h4>
                            <p>Acepteur sintas haecat sed non dui proident sunt culpas sed ipsum tempor.</p>
                            <div class="link"><a href="index-2.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-car-1"></i></div>
                            <h4><a href="index-2.html">Auto Insurance</a></h4>
                            <p>Acepteur sintas haecat sed non dui proident sunt culpas sed ipsum tempor.</p>
                            <div class="link"><a href="index-2.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-airport"></i></div>
                            <h4><a href="index-2.html">Travel Insurance</a></h4>
                            <p>Acepteur sintas haecat sed non dui proident sunt culpas sed ipsum tempor.</p>
                            <div class="link"><a href="index-2.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-umbrella-2"></i></div>
                            <h4><a href="index-2.html">Small Business</a></h4>
                            <p>Acepteur sintas haecat sed non dui proident sunt culpas sed ipsum tempor.</p>
                            <div class="link"><a href="index-2.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-broker"></i></div>
                            <h4><a href="index-2.html">Life Insurance</a></h4>
                            <p>Acepteur sintas haecat sed non dui proident sunt culpas sed ipsum tempor.</p>
                            <div class="link"><a href="index-2.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-cardiogram"></i></div>
                            <h4><a href="index-2.html">Health Insurance</a></h4>
                            <p>Acepteur sintas haecat sed non dui proident sunt culpas sed ipsum tempor.</p>
                            <div class="link"><a href="index-2.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- protect-form -->
    <section class="protect-form centred">
        <div class="auto-container">
            <div class="inner-box">
                <h2>Coverage That Protect Your World!</h2>
                <h3>Not sure which policy suits you the best? Find our agent</h3>
                <form action="https://azim.commonsupport.com/Fionca/index-2.html" method="post" class="zip-form">
                    <div class="form-group clearfix">
                        <input type="text" name="zip" placeholder="Enter ZipCode" required="">
                        <button class="theme-btn style-two" type="submit"><i class="far fa-user"></i>Find an Agent</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- protect-form end -->


    <!-- our-mission -->
    <section class="our-mission bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-6.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_four">
                        <div class="content-box">
                            <div class="tabs-box">
                                <div class="tab-btn-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li class="tab-btn active-btn" data-tab="#tab-1">Vision</li>
                                        <li class="tab-btn" data-tab="#tab-2">Mission</li>
                                        <li class="tab-btn" data-tab="#tab-3">Strategy</li>
                                    </ul>
                                </div>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="content-inner">
                                            <h3>Living a Confident Life</h3>
                                            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate voluptatem accusa ntium doloremque laudantium totam rem.</p>
                                            <ul class="list-item clearfix">
                                                <li>Aliquip ex ea consequat sed duis</li>
                                                <li>Irure dolor voluptate velit esse</li>
                                                <li>Cillum dolore eu fugiat nulla pariatur</li>
                                                <li>Excepteur sint occaecat cupidatat non</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-2">
                                        <div class="content-inner">
                                            <h3>Living a Confident Life</h3>
                                            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate voluptatem accusa ntium doloremque laudantium totam rem.</p>
                                            <ul class="list-item clearfix">
                                                <li>Aliquip ex ea consequat sed duis</li>
                                                <li>Irure dolor voluptate velit esse</li>
                                                <li>Cillum dolore eu fugiat nulla pariatur</li>
                                                <li>Excepteur sint occaecat cupidatat non</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-3">
                                        <div class="content-inner">
                                            <h3>Living a Confident Life</h3>
                                            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate voluptatem accusa ntium doloremque laudantium totam rem.</p>
                                            <ul class="list-item clearfix">
                                                <li>Aliquip ex ea consequat sed duis</li>
                                                <li>Irure dolor voluptate velit esse</li>
                                                <li>Cillum dolore eu fugiat nulla pariatur</li>
                                                <li>Excepteur sint occaecat cupidatat non</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_one">
                        <div class="video-inner">
                            <figure class="image-box"><img src="assets/images/resource/mission-1.jpg" alt=""></figure>
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-mission end -->


    <!-- team-section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="upper-box clearfix">
                <div class="sec-title style-two pull-left">
                    <h5>insurance team</h5>
                    <h2>Our Expert Agents</h2>
                </div>
                <div class="btn-box pull-right">
                    <a href="index-2.html"><i class="fas fa-user"></i>view all persons</a>
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- view-plans -->
    <section class="view-plans">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                <div class="text pull-left">
                    <h5>Let’s get started</h5>
                    <h2>Not sure about the right insurance for you?</h2>
                    <h3>We have got some best insurance plans and solutions</h3>
                </div>
                <div class="btn-box pull-right">
                    <a href="index-2.html" class="theme-btn style-one">View All Plans</a>
                </div>
            </div>
        </div>
    </section>
    <!-- view-plans end -->


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>testimonials</h5>
                <h2>What Client’s Saying</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-6.png" alt=""></figure>
                            <h5>Nelson Edward</h5>
                            <span class="designation">Insurance Group</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-7.png" alt=""></figure>
                            <h5>Thomas Saleh</h5>
                            <span class="designation">Insurance Group</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-8.png" alt=""></figure>
                            <h5>Nelson Edward</h5>
                            <span class="designation">Insurance Group</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-6.png" alt=""></figure>
                            <h5>Nelson Edward</h5>
                            <span class="designation">Insurance Group</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-7.png" alt=""></figure>
                            <h5>Thomas Saleh</h5>
                            <span class="designation">Insurance Group</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right"></i>
                            <p>Fugiat nulla pariatur excepteur sint sed cupidatat non proident, sunt in culp quip deserunt mollit animy est laborum sed perspiciatis unde omnis iste.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="assets/images/resource/testimonial-8.png" alt=""></figure>
                            <h5>Nelson Edward</h5>
                            <span class="designation">Insurance Group</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- policy-section -->
    <section class="policy-section bg-color-2">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_five">
                        <div class="content-box">
                            <div class="sec-title light left">
                                <h5>try a policy</h5>
                                <h2>Get Free Quote</h2>
                                <p>Et mini veniam quis nostrud ipsum exercitastion ullamco ipsum laboris sed ipsum ut perspiciatis unde.</p>
                            </div>
                            <ul class="info-list clearfix">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Company Head Office</h4>
                                    <p>838 Andy Street, Madison, New Jersy 08003</p>
                                </li>
                                <li>
                                    <i class="fas fa-phone-volume"></i>
                                    <h4>Request a Callback</h4>
                                    <p><a href="tel:01005200369">0 (100) 5200 369</a> / <a href="tel:01005200123">0 (100) 5200 123</a></p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <h4>Email Support</h4>
                                    <p><a href="mailto:info@my-domain.com">info@my-domain.com </a> / <a href="mailto:support@info.com">support@info.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div id="content_block_six">
                        <div class="content-box">
                            <div class="tabs-box">
                                <div class="tab-btn-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li class="tab-btn active-btn" data-tab="#tab-4">Life</li>
                                        <li class="tab-btn" data-tab="#tab-5">Home</li>
                                        <li class="tab-btn" data-tab="#tab-6">Car</li>
                                        <li class="tab-btn" data-tab="#tab-7">Health</li>
                                    </ul>
                                </div>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-4">
                                        <div class="content-inner">
                                            <p>Select a product to start a quote. Or call us at <a href="tel:01005200369">0100-5200-369</a></p>
                                            <form action="https://azim.commonsupport.com/Fionca/index-2.html" method="post">
                                                <div class="form-group">
                                                    <i class="fas fa-user"></i>
                                                    <input type="text" name="name" placeholder="Name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-envelope-open"></i>
                                                    <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-chess-knight"></i>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                           <option data-display="Select">Select a plan</option>
                                                           <option value="1">Life Insurance</option>
                                                           <option value="2">Home Insurance</option>
                                                           <option value="3" disabled>A disabled option</option>
                                                           <option value="4">Car Insurance</option>
                                                           <option value="5">Health Insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn style-two">start my insurance plan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-5">
                                        <div class="content-inner">
                                            <p>Select a product to start a quote. Or call us at <a href="tel:01005200369">0100-5200-369</a></p>
                                            <form action="https://azim.commonsupport.com/Fionca/index-2.html" method="post">
                                                <div class="form-group">
                                                    <i class="fas fa-user"></i>
                                                    <input type="text" name="name" placeholder="Name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-envelope-open"></i>
                                                    <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-chess-knight"></i>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                           <option data-display="Select">Select a plan</option>
                                                           <option value="1">Life Insurance</option>
                                                           <option value="2">Home Insurance</option>
                                                           <option value="3" disabled>A disabled option</option>
                                                           <option value="4">Car Insurance</option>
                                                           <option value="5">Health Insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn style-two">start my insurance plan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-6">
                                        <div class="content-inner">
                                            <p>Select a product to start a quote. Or call us at <a href="tel:01005200369">0100-5200-369</a></p>
                                            <form action="https://azim.commonsupport.com/Fionca/index-2.html" method="post">
                                                <div class="form-group">
                                                    <i class="fas fa-user"></i>
                                                    <input type="text" name="name" placeholder="Name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-envelope-open"></i>
                                                    <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-chess-knight"></i>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                           <option data-display="Select">Select a plan</option>
                                                           <option value="1">Life Insurance</option>
                                                           <option value="2">Home Insurance</option>
                                                           <option value="3" disabled>A disabled option</option>
                                                           <option value="4">Car Insurance</option>
                                                           <option value="5">Health Insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn style-two">start my insurance plan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-7">
                                        <div class="content-inner">
                                            <p>Select a product to start a quote. Or call us at <a href="tel:01005200369">0100-5200-369</a></p>
                                            <form action="https://azim.commonsupport.com/Fionca/index-2.html" method="post">
                                                <div class="form-group">
                                                    <i class="fas fa-user"></i>
                                                    <input type="text" name="name" placeholder="Name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-envelope-open"></i>
                                                    <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-chess-knight"></i>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                           <option data-display="Select">Select a plan</option>
                                                           <option value="1">Life Insurance</option>
                                                           <option value="2">Home Insurance</option>
                                                           <option value="3" disabled>A disabled option</option>
                                                           <option value="4">Car Insurance</option>
                                                           <option value="5">Health Insurance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn style-two">start my insurance plan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- policy-section end -->


    <!-- news-section -->
    <section class="news-section style-two">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Read the articles</h5>
                <h2>What’s Happening</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 31, 2020</li>
                                </ul>
                                <h3><a href="blog-details.html">Take Action For Benefits Of Your Business</a></h3>
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 30, 2020</li>
                                </ul>
                                <h3><a href="blog-details.html">Improve Your Investment Through Money</a></h3>
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li>By <a href="index.html">Fionca</a></li>
                                    <li>January 29, 2020</li>
                                </ul>
                                <h3><a href="blog-details.html">Isolate & Reframe Beliefs For The Future</a></h3>
                                <p>Exea conse quat duis irurey dolor sed reprehen derit volupta velit cilum lorem incididunt labore sed magna exceptur aliqua.</p>
                                <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- clients-section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- main-footer -->
    <footer class="main-footer alternet-2">
        <div class="footer-top">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo-2.png" alt=""></a></figure>
                                <div class="text">
                                    <p>Tempor incididunt ut labore eut dolore veniam quis nostrud exercitation ullamc consequat. Duis aute irure.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ 08003</li>
                                    <li><i class="fas fa-envelope"></i>Email <a href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                    <li><i class="fas fa-headphones"></i>Support <a href="tel:01005200369">0100 5200 369</a></li>
                                </ul>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Useful Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">What We Offers</a></li>
                                        <li><a href="index.html">Testimonials</a></li>
                                        <li><a href="index.html">Our Projectss</a></li>
                                        <li><a href="index.html">Latest News</a></li>
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>What We Do</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="index.html">Financial Advice</a></li>
                                        <li><a href="index.html">Business Planning</a></li>
                                        <li><a href="index.html">Startup Help</a></li>
                                        <li><a href="index.html">Investment Strategy</a></li>
                                        <li><a href="index.html">Management Services</a></li>
                                        <li><a href="index.html">Market Research</a></li>
                                        <li><a href="index.html">SEO Optimization</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h4>Newslette</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>Get in your inbox the latest News</p>
                                    </div>
                                    <form action="https://azim.commonsupport.com/Fionca/contact.html" method="post" class="newsletter-form">
                                        <div class="form-group">
                                            <i class="far fa-user"></i>
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <i class="far fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email address" required="">
                                        </div>
                                        <div class="form-group message-btn">
                                            <button class="theme-btn style-two" type="submit">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright"><p>&copy; 2020 <a href="index.html">FIONCA</a> - Business & Consulting. All rights reserved.</p></div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top style-two scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="upper-box">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/sidebar-logo.png" alt="" /></a>
                            </div>
                            <div class="text">
                                <p>Exercitation ullamco laboris nis aliquip sed conseqrure dolorn repreh deris ptate velit ecepteur duis.</p>
                            </div>
                        </div>
                        <div class="side-menu-box">
                            <div class="side-menu">
                                <nav class="menu-box">
                                    <div class="menu-outer">
                                        
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="info-box">
                            <h3>Get in touch</h3>
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ</li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                <li><i class="fas fa-headphones-alt"></i><a href="tel:101005200369">+1  0100 5200 369</a></li>
                                <li><i class="far fa-clock"></i>Monday to Friday: 9am - 6pm</li>
                            </ul>
                            <form action="https://azim.commonsupport.com/Fionca/contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                    <button type="submit" class="theme-btn style-one">subscribe now</button>
                                </div>
                            </form>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>
<script>
        function popupFn() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("popupDialog").style.display = "block";
        }

        function closeFn() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("popupDialog").style.display = "none";
        }

        function toggleForm() {
            var loginForm = document.getElementById("loginForm");
            var registrationForm = document.getElementById("registrationForm");
            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registrationForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registrationForm.style.display = "block";
            }
        }
    </script>
    <script>
         document.getElementById('togglePassword').addEventListener('click', function (e) {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if (type === 'password') {
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        });

        document.getElementById('registrationForm').addEventListener('submit', function (e) {
            const fullname = document.querySelector('.full_name').value;
            const email = document.querySelector('.email').value;
            const contact = document.querySelector('.contact').value;
            const password = document.querySelector('.password').value;

            const fullnamePattern = /^[a-zA-Z\s]{1,50}$/;
            const contactPattern = /^\d{10}$/;
            const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (!fullnamePattern.test(fullname)) {
                alert('Full Name should only contain letters and spaces, up to 50 characters.');
                e.preventDefault();
            } else if (!contactPattern.test(contact)) {
                alert('Phone number should be exactly 10 digits.');
                e.preventDefault();
            } else if (!passwordPattern.test(password)) {
                alert('Password must be at least 8 characters long and contain at least one uppercase letter, one symbol, and two numbers.');
                e.preventDefault();
            }
        });
   
    </script>
</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Fionca/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 09:17:17 GMT -->
</html>