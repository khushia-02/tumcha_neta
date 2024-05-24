<head>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>

<div id="overlay"></div>
    <div id="popupDialog">
        <div id="loginForm" class="form-container">
            <h2>Login</h2>
            <form action="./login&signup/login_data.php" method="post" class="login">
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
                        <!-- <figure class="logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""></a></figure> -->
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
                            <i class="far fa-user"></i>
                                <p><a href="#" onclick="popupFn(); return false;">Login/<br>SignUp</a></p>
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

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
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
