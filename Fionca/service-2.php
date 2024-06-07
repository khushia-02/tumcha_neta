<!DOCTYPE html>
<html lang="en">

<head>
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
        .video-btn img {
            width: 150px; /* Adjust the width as needed */
            height: auto;
        }
        .social-media-section {
            position: fixed;
            top: 50%;
            right: 20px; /* Adjust the distance from the right side as needed */
            transform: translateY(-50%);
        }

        .social-links {
            list-style: none;
            padding: 0;
        }

        .social-links li {
            display: block;
            margin-bottom: 10px; /* Adjust the spacing between icons as needed */
        }

        .social-links li a {
            font-size: 24px; /* Adjust the size of icons as needed */
            color: #333; /* Adjust the color of icons as needed */
        }
    </style>
    <title>Candidate Profile</title>
</head>

<body class="boxed_wrapper ltr">

    <?php include './includes/head.php'; ?>
    <?php include './includes/header.php'; ?>

    <?php
    include 'service_about.php';

    $username = isset($_GET['username']) ? $_GET['username'] : '';

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
        <!-- <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div> -->
        <div class="auto-container">
            <div class="banner-image" style="background-image: url('<?php echo htmlspecialchars($profile_banner); ?>');"></div>
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
            <div class="col-lg-6 col-md-12 col-sm-12">
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
    </div>

    <div class="social-media-section">
        <ul class="social-links clearfix">
            <li><a href="<?php echo htmlspecialchars($candidateData['facebook'] ?? ''); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo htmlspecialchars($candidateData['twitter'] ?? ''); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo htmlspecialchars($candidateData['instagram'] ?? ''); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo htmlspecialchars($candidateData['linkedin'] ?? '');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div>

    <!-- contact-style-two -->
    <section class="contact-style-two" style="background-image: url(assets/images/background/contact-3.jpg);">
        <div class="auto-container">
            <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
                <div class="sec-title left light">
                    <h5>try our service</h5>
                    <h2>Drop Us a Line</h2>
                    <p>Ad mini veniam quis nostrud ipsum exercitas tion ullamco <br />ipsum laboris sed ut perspiciatis unde.</p>
                </div>
                <form method="post" action="send_email.php" id="contact-form" class="default-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <input type="hidden" name="recipient" value="<?php echo htmlspecialchars($candidateData['candidate_email']); ?>">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn style-one" type="submit" name="submit-form">request estimate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- contact-style-two end -->

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
    <!-- end of toggle section -->

    <?php include './includes/footer.php'; ?>

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>

    <script>
        document.querySelectorAll('.toggle-btn').forEach(button =>
        {
    button.addEventListener('click', () => {
        document.querySelectorAll('.toggle-content').forEach(content => {
            content.classList.remove('active');
        });
        document.getElementById('toggle-' + button.getAttribute('data-toggle')).classList.add('active');
    });
});
</script>
<?php include './includes/javascript.php'; ?>

</body>
</html>
