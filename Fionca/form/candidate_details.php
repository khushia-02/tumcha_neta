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

        <!-- Process Line -->
        <div class="process-line d-flex justify-content-between">
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-user"></i></div>
                <div class="step-text">Basic Details</div>
                <div class="step-line"></div>
            </div>
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="step-text">Education Details</div>
                <div class="step-line"></div>
            </div>
            <div class="process-step">
                <div class="step-icon"><i class="fas fa-info-circle"></i></div>
                <div class="step-text">Additional Details</div>
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
        <div id="basic-details" class="form-section">
            <h3>Basic Details</h3>
            <form method="post" action="register_candidate.php" id="frmPinCode">
                <!-- <div class="form-row"> -->
                <div class="form-group col-md-4">
                    <label for="candidate_username">Username:</label>
                    <input type="text" id="candidate_username" name="candidate_username" required>
                </div>
                <!-- </div> -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <input type="text" class="textbox" name="pincode" id="pincode" placeholder="Enter Pincode"  autocomplete="new-password">
			        <input type="button" class="btn btn-primary" value="Enter" onclick="get_details()">
                    </div>
                    <div class="form-group col-md-4">   
                    <input type="text" class="textbox" id="city" disabled placeholder="City"><br/><br/>
                    </div>
                    <div class="form-group col-md-4">
                    <input type="text" class="textbox" id="state" disabled placeholder="State">
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
                        <input type="text" id="age" name="age" readonly>
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
                
                <input type="submit"class="btn btn-primary" value="Submit">
            </form>
        </div>

        <!-- Education Details Form Section -->
        <div id="education-details" class="form-section" style="display: none;">
            <h3>Education Details</h3>
            <form action="submit_education.php" method="post" id="education-form">
                <div id="forms-container">
                    <div class="education-form">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="education_type">Education Type:</label>
                                <input type="text" id="education_type" name="education_type" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="education_year_of_completion">Year of Completion:</label>
                                <input type="number" id="education_year_of_completion" name="education_year_of_completion" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="education_institute_name">Institute Name:</label>
                                <input type="text" id="education_institute_name" name="education_institute_name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="education_university_name">University Name:</label>
                                <input type="text" id="education_university_name" name="education_university_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="qualification">Qualification:</label>
                                <input type="text" id="qualification" name="qualification" required>
                            </div>
                        </div>
                        <div class="remove-entry"><i class="fas fa-minus-circle"></i></div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" id="add-education-entry">+ Add Another
                    Education</button>
                <button type="submit" class="btn btn-primary">Submit and Continue</button>
            </form>
        </div>

        <!-- Additional details Form Section -->
        <div id="upload-resume" class="form-section" style="display: none;">
            <h3>Additional Details</h3>
            <form method="post" action="candidate_additional_information.php">
                <div class="form-group">
                    <label for="candidate_username">Username:</label>
                    <input type="text" id="candidate_username" name="candidate_username" class="form-control" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="about_detail">About Detail:</label>
                        <textarea id="about_detail" name="about_detail" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="spouse_name">Spouse Name:</label>
                        <input type="text" id="spouse_name" name="spouse_name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="candidate_tagline">Candidate Tagline:</label>
                        <input type="text" id="candidate_tagline" name="candidate_tagline" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="candidate_video_path">Candidate Video Path (Google Drive link):</label>
                        <input type="url" id="candidate_video_path" name="candidate_video_path" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="candidate_office_address">Candidate Office Address:</label>
                        <input type="text" id="candidate_office_address" name="candidate_office_address" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="candidate_party_name">Candidate Party Name:</label>
                        <input type="text" id="candidate_party_name" name="candidate_party_name" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="candidate_logo_path">Candidate Logo Image:</label>
                        <input type="text" placeholder="Upload Image" accept="image/png, image/jpeg, image/jpg" onfocus="(this.type='file')" name="image" class="box" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="candidate_banner_path">Candidate Banner Image:</label>
                        <input type="text" placeholder="Upload Image" accept="image/png, image/jpeg, image/jpg" onfocus="(this.type='file')" name="image" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="candidate_books_pdf_path">Candidate Books PDF Path:</label>
                        <input type="text" id="candidate_books_pdf_path" name="candidate_books_pdf_path" class="form-control">
                    </div>
                </div>

                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>

        <!-- Candidate work Form Section -->
        <div id="additional-details" class="form-section" style="display: none;">
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
                            <input type="url" id="twitter" name="twitter" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="linkedin">LinkedIn:</label>
                            <input type="url" id="linkedin" name="linkedin">
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
                            <input type="text" id="canidate_linked_NGO" name="canidate_linked_NGO">
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
                                <input type="text" id="education_type" name="education_type" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="education_year_of_completion">Year of Completion:</label>
                                <input type="number" id="education_year_of_completion" name="education_year_of_completion" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="education_institute_name">Institute Name:</label>
                                <input type="text" id="education_institute_name" name="education_institute_name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="education_university_name">University Name:</label>
                                <input type="text" id="education_university_name" name="education_university_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="qualification">Qualification:</label>
                                <input type="text" id="qualification" name="qualification" required>
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

</body>

</html>