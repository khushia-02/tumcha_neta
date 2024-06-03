<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo "<script>
        alert('Please log in first.');
        window.location.href = 'index.php';
        </script>";
    exit();
}

$username = $_SESSION['username']; // Get the username from the session
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Update Profile</h1>
        <div class="form-group col-md-4">
            <label for="candidate_username">Username:</label>
            <input type="text" id="candidate_username" name="candidate_username" value="<?php echo htmlspecialchars($username); ?>" readonly required>
             </div>

        <!-- Process Line -->
        <div class="process-line d-flex justify-content-between">
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-user"></i></div>
                <div class="step-text">Basic Details</div>
                <div class="step-line"></div>
            </div>
           
            <div class="process-step"> 
                <div class="step-icon"><i class="fas fa-info-circle"></i></div>
                <div class="step-text">Additional Details</div>
                <div class="step-line"></div>
            </div>
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="step-text">Political Ideologies</div>
                <div class="step-line"></div>
            </div>
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-briefcase"></i></div>
                <div class="step-text">Work</div>
                <div class="step-line"></div>
            </div>
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-link"></i></div>
                <div class="step-text">Social media links</div>
                <div class="step-line"></div>
            </div>
        </div>

        <!-- Basic Details Form Section -->
       <!-- Basic Details Form Section -->
       <div id="basic-details" class="form-section">
    <h3>Basic Details</h3>
    <form method="post" action="register_candidate_further.php" id="frmPinCode">
    <div class="form-row">
    <div class="form-group col-md-4">
        <input type="text" class="textbox" name="candidate_area_pincode" id="pincode" placeholder="Enter Pincode" autocomplete="new-password">
        <input type="button" class="btn btn-primary" value="Enter" onclick="get_details()">
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="textbox" id="city" placeholder="City" name="candidate_city"><br /><br />
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="textbox" id="state" placeholder="State" name="candidate_state">
    </div>
</div>


        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="candidate_area_current">Current Area:</label>
                <input type="text" id="candidate_area_current" name="candidate_area_current" required>
            </div>
            <div class="form-group col-md-4">
                <select id="candidate_gender" name="candidate_gender" class="form-control" placeholder="Gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="candidate_dob">Date of Birth:</label>
                <input type="date" id="candidate_dob" name="candidate_dob" onchange="calculateAge()" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="age">Age:</label>
                <input type="text" id="age" name="candidate_age" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="education_type">Education Type:</label>
                <select id="education_type" name="candidate_education" required>
                    <option value="" disabled selected>Select Education</option>
                    <option value="10th_pass">10th Pass</option>
                    <option value="12th_pass">12th Pass</option>
                    <option value="diploma">Diploma</option>
                    <option value="graduate">Graduate</option>
                    <option value="post_graduate">Post Graduate</option>
                    <option value="phd">PhD</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="self_profession">Profession:</label>
                <input type="text" id="self_profession" name="self_profession">
            </div>
            <div class="form-group col-md-4">
                <label for="candidate_email">Email:</label>
                <input type="email" id="candidate_email" name="candidate_email">
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>

        <!-- additional details form -->
        <div id="additional_details" class="form-section" style="display: none;">
            <h3>Additional Details</h3>
            <form method="post" action="candidate_additional_information.php">
               

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="about_detail">About Detail:</label>
                        <textarea id="about_detail" name="about_detail" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marriage_status">Marital Status:</label>
                        <select id="marriage_status" name="candidate_marriage_status" class="form-control">
                            <option value="">Select Status</option>
                            <option value="married">Married</option>
                            <option value="unmarried">Unmarried</option>
                            <option value="divorced">Divorced</option>
                            <option value="prefer_not_to_say">Prefer not to say</option>
                        </select>
                    </div>
                    <div id="spouse_name_group" class="form-group col-md-4" style="display: none;">
                        <label for="spouse_name">Spouse Name:</label>
                        <input type="text" id="spouse_name" name="spouse_name" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="office_mail">Office mail ID:</label>
                        <input type="email" id="office_mail" name="candidate_office_email" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="office_contact">Office Contact:</label>
                        <input type="number" id="office_contact" name="candidate_office_contact" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="candidate_office_address">Candidate Office Address:</label>
                        <input type="text" id="candidate_office_address" name="candidate_office_address" class="form-control">
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary"><br><br>
            </form>
        </div>
        <div id="party-details" class="form-section" style="display: none;">
            <h3>Party Ideologies</h3>
            <form method="post" action="candidate_party.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="candidate_username">Username:</label>
                    <input type="text" id="candidate_username" name="candidate_username" class="form-control" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="party">Select Party:</label>
                        <select id="party" name="party" class="form-control">
                            <option value="na">Select name:</option>
                            <option value="bjp">Bhartiya Janta Party</option>
                            <option value="congress">Congress</option>
                            <option value="shivsena">Shivsena</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div id="party_name_group" class="form-group col-md-4" style="display: none;">
                        <label for="party_name">Party Name:</label>
                        <input type="text" id="party_name" name="party_name" class="form-control">
                    </div>
                    <div id="default_party_logo" class="form-group col-md-4" style="display: none;">
                        <label for="default_logo">Default Logo:</label><br>
                        <img id="default_logo_img" src="" alt="Default Logo" class="img-thumbnail" style="height:100px; width:auto">
                        <input type="hidden" id="default_logo_path" name="default_logo_path">
                    </div>
                    <div id="party_logo_group" class="form-group col-md-4" style="display: none;">
                        <label for="party_logo_input">Party Logo:</label>
                        <input type="file" id="party_logo_input" name="party_logo_input" class="form-control">
                        <img id="party_logo" src="" alt="Party Logo" class="img-thumbnail mt-2" style="display: none;">
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="banner">Profile Banner:</label>
                    <input type="file" id="banner_image" name="banner_image" class="form-control-file">
                </div>

                    <div class="form-group col-md-4">
                        <label for="ideologies">Ideologies(description):</label>
                        <textarea id="ideologies" name="ideologies" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="party_position">Position:</label>
                        <input type="text" id="party_position" name="party_position" class="party_position" required>
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary"><br><br>
            </form>
        </div>
        <!-- Candidate work Form Section -->
        <div id="work-details" class="form-section" style="display: none;">
            <h3>Work and Area of expertise</h3>
            <form action="submit_candidate_works.php" method="POST">
                <div class="form-group">
                    <label for="candidate_username_available">Username:</label>
                    <input type="text" id="candidate_username_available" name="candidate_username_available" required maxlength="50">
                </div>
                <div id="work-entries">
                    <div class="work-entry">
                        <div class="form-group col-md-4">
                            <label for="year">Year:</label>
                            <input type="number" id="year" name="year[]" class="form-control" required min="1900" max="2100">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="district">District:</label>
                            <input type="text" id="district" name="district[]" class="form-control" maxlength="100">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="area">Area:</label>
                            <input type="text" id="area" name="area[]" class="form-control" maxlength="100">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="pincode">Pincode:</label>
                            <input type="number" id="pincode" name="pincode[]" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="candidate_areas_of_workingfor">Areas of Working For:</label>
                            <select id="candidate_areas_of_workingfor" name="candidate_areas_of_workingfor[]" class="form-control">
                                <option value="Engineering">Engineering</option>
                                <option value="Health">Health</option>
                                <option value="Education">Education</option>
                                <option value="Revenue">Revenue</option>
                                <option value="Taxation">Taxation</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="details_of_working">Details of Working:</label>
                            <textarea id="details_of_working" name="details_of_working[]" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="work_img">Work images:</label>
                            <div class="work-images">
                                <input type="file" id="work_image" name="work_image[]" class="form-control-file"><br>
                            </div>
                            <button type="button" class="btn btn-secondary add-more-images">+ Add More Images</button>
                        </div>
                        <div class="remove-entry"><i class="fas fa-minus-circle"></i></div>
                    </div>
                </div>

                <button type="button" class="btn btn-secondary" id="add-work-entry">+ Add More Work</button>
                <button type="submit" class="btn btn-primary">Submit and Continue</button>
            </form>
        </div>

        <!-- Social Media Section -->
        <div id="terms-conditions" class="form-section" style="display: none;">
            <div class="form-container">
                <h2>Candidate Social Links Form</h2>
                <form method="post" action="register_candidate_social_links.php">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="youtube">YouTube:</label>
                            <input type="url" id="youtube" name="youtube" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="facebook">Facebook:</label>
                            <input type="url" id="facebook" name="facebook" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="instagram">Instagram:</label>
                            <input type="url" id="instagram" name="instagram">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="twitter">Twitter:</label>
                            <input type="url" id="twitter" name="twitter">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="linkedin">LinkedIn:</label>
                            <input type="url" id="linkedin" name="linkedin"  required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="whatsapp_channel_link">WhatsApp Channel:</label>
                            <input type="url" id="whatsapp_channel_link" name="whatsapp_channel_link">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="additional_links">Additional Links (e.g., websites,published book links):</label>
                            <input type="url" id="additional_links" name="additional_links">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="canidate_linked_NGO">Candidate Linked NGO:</label>
                            <input type="text" id="candidate_linked_NGO" name="candidate_linked_NGO">
                        </div>
                    </div>
                    <div class="form-row">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="city.js"></script>
    <script src="date.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    document.getElementById('marriage_status').addEventListener('change', function() {
        var spouseNameGroup = document.getElementById('spouse_name_group');
        if (this.value === 'married') {
            spouseNameGroup.style.display = 'block';
        } else {
            spouseNameGroup.style.display = 'none';
        }
    });
    </script>
  
    <script>
        $(document).ready(function() {
            // Form Section Visibility Toggle
            $('.process-step').click(function() {
                var stepIndex = $(this).index();
                $('.form-section').hide();
                $('#' + $('.form-section').eq(stepIndex).attr('id')).show();
            });

            // Add more work entries
            $('#add-work-entry').click(function() {
                var newEntry = `
                    <div class="work-entry">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="year">Year:</label>
                                <input type="number" id="year" name="year[]" class="form-control" required min="1900" max="2100">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="district">District:</label>
                                <input type="text" id="district" name="district[]" class="form-control" maxlength="100">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="area">Area:</label>
                                <input type="text" id="area" name="area[]" class="form-control" maxlength="100">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="pincode">Pincode:</label>
                                <input type="number" id="pincode" name="pincode[]" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="candidate_areas_of_workingfor">Areas of Working For:</label>
                                <select id="candidate_areas_of_workingfor" name="candidate_areas_of_workingfor[]" class="form-control">
                                    <option value="Engineering">Engineering</option>
                                    <option value="Health">Health</option>
                                    <option value="Education">Education</option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Taxation">Taxation</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="details_of_working">Details of Working:</label>
                                <textarea id="details_of_working" name="details_of_working[]" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="remove-entry"><i class="fas fa-minus-circle"></i></div>
                    </div>
                `;
                $('#work-entries').append(newEntry);
            });

            // Remove work entry
            $(document).on('click', '.remove-entry', function() {
                $(this).closest('.work-entry').remove();
            });

            $('#add-education-entry').click(function() {
                var newEntry = `
                    <div class="education-form">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="education_type">Education Type:</label>
                                <input type="text" id="education_type" name="education_type[]" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="education_year_of_completion">Year of Completion:</label>
                                <input type="number" id="education_year_of_completion" name="education_year_of_completion[]" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="education_institute_name">Institute Name:</label>
                                <input type="text" id="education_institute_name" name="education_institute_name[]" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="education_university_name">University Name:</label>
                                <input type="text" id="education_university_name" name="education_university_name[]" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="qualification">Qualification:</label>
                                <input type="text" id="qualification" name="qualification[]" required>
                            </div>
                        </div>
                        <div class="remove-entry"><i class="fas fa-minus-circle"></i></div>
                    </div>
                `;
                $('#forms-container').append(newEntry);
            });

            // Remove education entry
            $(document).on('click', '.remove-entry', function() {
                $(this).closest('.education-form').remove();
            });
        });

    </script>
<script>
document.getElementById('party').addEventListener('change', function() {
    var partyNameGroup = document.getElementById('party_name_group');
    var partyLogoGroup = document.getElementById('party_logo_group');
    var defaultPartyLogo = document.getElementById('default_party_logo');
    var defaultLogoImg = document.getElementById('default_logo_img');
    var defaultLogoPath = document.getElementById('default_logo_path');
    var partyLogoInput = document.getElementById('party_logo_input');
    var partyLogo = document.getElementById('party_logo');

    if (this.value === 'other') {
        partyNameGroup.style.display = 'block';
        partyLogoGroup.style.display = 'block';
        defaultPartyLogo.style.display = 'none';
        defaultLogoImg.src = '';
        defaultLogoPath.value = '';
        partyLogo.src = '';
    } else {
        partyNameGroup.style.display = 'none';
        partyLogoGroup.style.display = 'none';
        defaultPartyLogo.style.display = 'block';
        if (this.value === 'bjp') {
            defaultLogoImg.src = 'bjp_logo.webp'; // Replace with actual path to the BJP default logo image
            defaultLogoPath.value = 'bjp_logo.webp'; // Set the hidden input value
        } else if (this.value === 'congress') {
            defaultLogoImg.src = 'congress.svg'; // Replace with actual path to the Congress default logo image
            defaultLogoPath.value = 'congress.svg'; // Set the hidden input value
        } else if (this.value === 'shivsena') {
            defaultLogoImg.src = 'ShivSena.svg'; // Replace with actual path to the Shivsena default logo image
            defaultLogoPath.value = 'ShivSena.svg'; // Set the hidden input value
        }
    }
});

document.getElementById('party_logo_input').addEventListener('change', function(event) {
    var partyLogo = document.getElementById('party_logo');
    var file = event.target.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            partyLogo.src = e.target.result;
            partyLogo.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        partyLogo.src = '';
        partyLogo.style.display = 'none';
    }
});
</script>
<script>
    document.getElementById('add-work-entry').addEventListener('click', function() {
        let workEntry = document.querySelector('.work-entry').cloneNode(true);
        workEntry.querySelectorAll('input').forEach(input => input.value = '');
        workEntry.querySelectorAll('textarea').forEach(textarea => textarea.value = '');
        workEntry.querySelector('.work-images').innerHTML = '<input type="file" id="work_image" name="work_image[]" class="form-control-file">';
        document.getElementById('work-entries').appendChild(workEntry);
    });

    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('add-more-images')) {
            let imageInput = document.createElement('input');
            imageInput.type = 'file';
            imageInput.name = 'work_image[]';
            imageInput.className = 'form-control-file';
            e.target.previousElementSibling.appendChild(imageInput);
        }
        if (e.target && e.target.closest('.remove-entry')) {
            e.target.closest('.work-entry').remove();
        }
    });
</script>
</body>

</html>