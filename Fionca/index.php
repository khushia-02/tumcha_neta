 <?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php include './includes/head.php'; ?>
<?php include './includes/header.php'; ?>

<head>
    <style>
        /* Custom CSS for Candidate Profiles */

/* Custom CSS for Candidate Profiles */

.team-section {
  margin-top: 50px;
}

.candidates-wrapper {
  overflow-x: auto;
  white-space: nowrap;
}

.team-block-one {
  display: inline-block;
  vertical-align: top;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin-right: 20px;
  max-width: 300px; /* Adjust the maximum width as needed */
}

.image-box {
  overflow: hidden;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
}

.image-box img {
  width: auto;
  display: block;
  height: 150px
}

.lower-content {
  padding: 20px;
}

.content-box h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.designation {
  font-size: 16px;
  color: #777;
  margin-bottom: 20px;
}

.ovellay-box {
  padding-top: 10px;
  border-top: 1px solid #eee;
}

.social-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.social-links li {
  display: inline-block;
  margin-right: 10px;
}

.social-links li:last-child {
  margin-right: 0;
}

.social-links a {
  color: #555;
  font-size: 18px;
}

/* Responsive Styling */
@media (max-width: 768px) {
  .team-block-one {
    margin-right: 10px;
    margin-bottom: 20px;
    width: 200px; /* Adjust width as needed */
  }

  .content-box h3 {
    font-size: 18px;
  }

  .designation {
    font-size: 14px;
  }
}
    </style>
</head>
<!-- page wrapper -->

<body class="boxed_wrapper ltr">
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

<?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tumcha_neta"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve and sanitize search input
    $fullName = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : '';

    // Fetch candidates based on search input
    $sql = !empty($fullName) ?
        "SELECT * FROM candidate_registration WHERE candidate_fullname LIKE '%$fullName%'" :
        "SELECT * FROM candidate_registration";

    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing query: " . $conn->error);
    }
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="container">
        <aside class="filters">
            <div class="filter-category">
                <h3 class="candi-search">Search your candidate</h3>
                <ul>
                    <li>
                        <label for="fullName">Full Name:</label>
                        <input type="text" id="fullName" name="fullName" list="candidateList" value="<?php echo htmlspecialchars($fullName); ?>">
                    </li>
                    <li>
                        <button type="submit" class="submit-btn">Submit</button>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</form>

<section class="team-section">
    <div class="auto-container">
        <div class="upper-box clearfix">
            <div class="sec-title style-two pull-left">
                <h2>Candidates</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="filter.php"><i class="fas fa-user"></i>View all Candidates</a>
            </div>
        </div>
        <div class="candidates-wrapper">
            <?php
            // Check if any candidates are found
            if ($result->num_rows > 0) {
                // Output data of the candidates
                while ($row = $result->fetch_assoc()) {
                    // Display the candidate using the function
                    displayCandidate($row);
                }
            } else {
                echo "No results found";
            }
            ?>
        </div>
    </div>
</section>

<?php
// Function to display a candidate
function displayCandidate($row)
{
    echo "<div class='team-block-one'>";
    echo "<div class='inner-box'>";
    echo "<figure class='image-box'><img src='" . htmlspecialchars($row["candidate_profile_path"]) . "' alt=''></figure>";
    echo "<div class='lower-content'>";
    echo "<div class='content-box'>";
    echo "<h3><a href='service-2.php?username=" . urlencode($row["candidate_username"]) . "'>" . htmlspecialchars($row["candidate_fullname"]) . "</a></h3>";
    echo "<span class='designation'>Senior Manager</span>";
    echo "</div>";
    echo "<div class='ovellay-box'>";
    echo "<h3><a href='service-2.php?username=" . urlencode($row["candidate_username"]) . "'>" . htmlspecialchars($row["candidate_fullname"]) . "</a></h3>";
    echo "<span class='designation'>Senior Manager</span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

// Close connection
$conn->close();

?>
    <!--
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
                </div>-->


    <!-- Candidate details list end -->

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

    <?php include './includes/footer.php'; ?>

    <!--Scroll to top-->
    <button class="scroll-top style-two scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- sidebar cart item -->
    <!-- <div class="xs-sidebar-group info-group info-sidebar">
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
    </div> -->
    <!-- END sidebar widget item -->

    <?php include './includes/javascript.php'; ?>

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
        document.getElementById('togglePassword').addEventListener('click', function(e) {
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

        document.getElementById('registrationForm').addEventListener('submit', function(e) {
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


    <!-- fetch data -->
    <script>
        $(document).ready(function() {
            $('#fullName').keyup(function() {
                var input = $(this).val();
                $.ajax({
                    url: 'fetch_candidates.php',
                    method: 'POST',
                    data: {
                        input: input
                    },
                    success: function(data) {
                        $('#candidatesList').html(data);
                    }
                });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#fullName').keyup(function() {
                var fullName = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'search_candidates.php', // PHP script to handle search
                    data: {
                        fullName: fullName
                    },
                    success: function(response) {
                        $('#candidatesList').html(response);
                    }
                });
            });
        });
    </script>

    <!-- fetch data ended-->
</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Fionca/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 09:17:17 GMT -->

</html>