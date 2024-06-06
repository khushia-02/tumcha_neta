<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   
    <style>
        .banner-image {
            width: 100%;
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .square-image {
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            position: relative;
            overflow: hidden;
        }
        .square-image img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: auto;
        }
        .toggle-section {
            margin-top: 20px;
        }
        .toggle-btns {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .toggle-btns button {
            padding: 10px 20px;
            cursor: pointer;
        }
        .toggle-content {
            display: none;
        }
        .toggle-content.active {
            display: block;
        }
    </style>
    <title>
        Candidate Profile
    </title>
</head>

<body class="boxed_wrapper ltr">

    <?php include './includes/head.php'; ?>
    <?php include './includes/header.php'; ?>

    <?php
include 'service_about.php';

// Assuming $username is retrieved dynamically
$username = 'khushi'; // Replace with dynamic username

$candidateData = getCandidateData($username);
$fullname = $candidateData['fullname'] ?? '';
$profile_picture = $candidateData['profile_picture'] ?? '';
$party_logo = $candidateData['party_logo'] ?? '';
$ideologies = $candidateData['ideologies'] ?? '';

$age = $candidateData['candidate_age'] ?? '';
$birthdate = $candidateData['candidate_dob'] ?? '';
$education = $candidateData['candidate_education'] ?? '';
$profession = $candidateData['self_profession'] ?? '';
$pincode = $candidateData['candidate_area_pincode'] ?? '';
$city = $candidateData['candidate_city'] ?? '';
$email = $candidateData['candidate_email'] ?? '';
$profile_banner = $candidateData['profile_banner'] ?? '';
?>

    <section class="view-plans">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
        <div class="auto-container">
            <!-- <div class="inner-container clearfix"> -->
            <div class="banner-image" style="background-image: url('<?php echo htmlspecialchars($profile_banner); ?>');"></div>
            <!-- </div> -->
        </div>
    </section>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_one">
                        <div class="video-inner">
                            <figure class="image-box square-image">
                                <img src="<?php echo htmlspecialchars($profile_picture); ?>" alt="Profile Picture">
                            </figure>
                            <div class="video-btn">
                                <img src="<?php echo htmlspecialchars($party_logo); ?>" alt="Party Logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content_block_four">
                    <div class="content-box">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Basic Details</li>
                                    <li class="tab-btn" data-tab="#tab-2">About</li>
                                    <li class="tab-btn" data-tab="#tab-3">Additional Details</li>
                                </ul>
                            </div>
                            <div class="auto-container">
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content-inner">
                                        <h3><?php echo htmlspecialchars($fullname); ?></h3>
                                        <ul class="list-item clearfix">
                                            <li>Age: <?php echo htmlspecialchars($age); ?></li>
                                            <li>Birthdate: <?php echo htmlspecialchars($birthdate); ?></li>
                                            <li>Education: <?php echo htmlspecialchars($education); ?></li>
                                            <li>Profession: <?php echo htmlspecialchars($profession); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="content-inner">
                                        <h3>About</h3>
                                        <ul class="list-item clearfix">
                                            <?php
                                            $ideology_points = explode("\n", $ideologies);
                                            foreach ($ideology_points as $point) {
                                                echo "<li>" . htmlspecialchars($point) . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab" id="tab-3">
                                    <div class="content-inner">
                                        <h3>Additional Details</h3>
                                        <ul class="list-item clearfix">
                                            <li>Pincode: <?php echo htmlspecialchars($pincode); ?></li>
                                            <li>City: <?php echo htmlspecialchars($city); ?></li>
                                            <li>Email: <?php echo htmlspecialchars($email); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Toggle Section -->
        <!-- New Toggle Section -->
        <div class="toggle-section">
            <div class="toggle-btns">
                <button class="toggle-btn" data-toggle="about">About</button>
                <button class="toggle-btn" data-toggle="photos">Photos</button>
                <button class="toggle-btn" data-toggle="videos">Videos</button>
                <button class="toggle-btn" data-toggle="work">Work</button>
            </div>
            <div class="toggle-content" id="toggle-about">
                <p>About Content...</p>
            </div>
            <div class="toggle-content" id="toggle-photos">
                <p>Photos Content...</p>
            </div>
            <div class="toggle-content" id="toggle-videos">
                <p>Videos Content...</p>
            </div>
            <div class="toggle-content" id="toggle-work">
                <p>Work Content...</p>
            </div>
        </div>
    </div>
    <!-- end of toggle section -->


        <!-- service-style-three -->
    <!-- <section class="service-style-three service-page-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/service/service-5.jpg" alt="">
                                <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="financial-analysis.html">Finance Consulting</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="financial-analysis.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/service/service-6.jpg" alt="">
                                <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="taxation-planning.html">Tax Management</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="taxation-planning.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/service/service-7.jpg" alt="">
                                <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="investment-trading.html">Economic Planning</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="investment-trading.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/service/service-8.jpg" alt="">
                                <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="financial-analysis.html">Strategy Thinking</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="financial-analysis.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/service/service-9.jpg" alt="">
                                <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="taxation-planning.html">Market Analysis</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="taxation-planning.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/service/service-10.jpg" alt="">
                                <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="investment-trading.html">Content Optimize</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="investment-trading.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- service-style-three end -->

    <!-- pricing-section -->
    <!-- <section class="pricing-section service-page-2">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>We make it happen</h5>
                <h2>Our Pricing Plans</h2>
                <p>Tempor incididunt ut labore et dolore magna aliquat enim veniam quis nostrud exercitation ullamco
                    laboris nis aliquip consequat duis.</p>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Small Plan</h3>
                                <div class="price-box">
                                    <span>recommended</span>
                                    <h2>$149</h2>
                                    <p>/ Month</p>
                                </div>
                                <span class="text">This Plan Includes Global Relations</span>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix">
                                    <li>All Financial Tasks</li>
                                    <li>Economic Market Survey</li>
                                    <li><del>Sales Operations</del></li>
                                    <li><del>Auto Intelligence</del></li>
                                    <li><del>24/7 Support</del></li>
                                    <li><del>Technology Services</del></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="index-3.html">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one active-block">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Smart Plan</h3>
                                <div class="price-box">
                                    <span>recommended</span>
                                    <h2>$299</h2>
                                    <p>/ Month</p>
                                </div>
                                <span class="text">This Plan Includes Financial Analysis</span>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix">
                                    <li>All Financial Tasks</li>
                                    <li>Economic Market Survey</li>
                                    <li>Sales Operations</li>
                                    <li>Auto Intelligence</li>
                                    <li><del>24/7 Support</del></li>
                                    <li><del>Technology Services</del></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="index-3.html">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Super Plan</h3>
                                <div class="price-box">
                                    <span>recommended</span>
                                    <h2>$549</h2>
                                    <p>/ Month</p>
                                </div>
                                <span class="text">This Plan Includes Free Consultancy</span>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix">
                                    <li>All Financial Tasks</li>
                                    <li>Economic Market Survey</li>
                                    <li>Sales Operations</li>
                                    <li>Auto Intelligence</li>
                                    <li>24/7 Support</li>
                                    <li>Technology Services</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="index-3.html">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- pricing-section end -->


    <!-- clients-section -->
    <!-- <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
            </div>
        </div>
    </section> -->
    <!-- clients-section end -->


    <!-- fun-fact -->
    <!-- <section class="fun-fact centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="254">0</span>
                        </div>
                        <p>Expert Consultants</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="930">0</span>
                        </div>
                        <p>Our Trusted Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="826">0</span>
                        </div>
                        <p>Orders in Queue</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="720">0</span>
                        </div>
                        <p>Projects Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- fun-fact end -->


    <?php include './includes/footer.php'; ?>

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>

    <script>
        document.querySelectorAll('.toggle-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.toggle-content').forEach(content => {
                    content.classList.remove('active');
                });
                document.getElementById('toggle-' + button.getAttribute('data-toggle')).classList.add('active');
            });
        });
    </script>
<?php include './includes/javascript.php'; ?>
 
</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Fionca/service-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 09:17:53 GMT -->

</html>