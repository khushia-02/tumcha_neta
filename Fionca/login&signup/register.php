<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <section class="w3l-mockup-form" style="background: linear-gradient(to bottom, #8C52FF 0%, #FFDE59 100%);">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/signup.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2 style="color: #5E17EB">Register Now</h2>
                        <p>Welcome to CinemaBinema</p>
                        <form id="registrationForm" action="registration_data.php" method="post">
                            <input type="text" class="username" name="candidate_username" placeholder="Enter Your Username" required>
                            <input type="text" class="full_name" name="candidate_fullname" placeholder="Enter Your Full Name" required pattern="^[a-zA-Z\s]{1,50}$" title="Full Name should only contain letters and spaces, up to 50 characters.">
                            <input type="email" class="email" name="candidate_email" placeholder="Enter Your Email" required>
                            <input type="tel" class="contact" name="candidate_contact" placeholder="Enter Your Phone Number" required pattern="^\d{10}$" title="Phone number should be exactly 10 digits.">
                            <div style="position: relative;">
                                <input type="password" id="password" class="password" name="password_generation" placeholder="Enter Your Password" required pattern="^(?=.*[A-Za-z])(?=.*\d.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must be at least 8 characters long and contain at least one uppercase letter, one symbol, and two numbers.">
                                <button type="button" id="togglePassword" aria-label="Toggle Password Visibility" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                            <button name="submit" class="btn" style="background-color: #5E17EB;" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account? <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script>
        /*
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.main-mockup').fadeOut(100, function(c) {
                    $('.main-mockup').remove();
                });
            });
        });*/

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
</body>

</html>
