<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<?php include 'config.php'; ?>

<div class="wrapper">
  <nav class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <h3>Welcome <?php echo $row['candidate_username']; ?></h3>
    </div>
    <ul class="list-unstyled components">
      <li><a href="#profile">Profile</a></li>
      <li><a href="#settings">Settings</a></li>
      <li><a href="#logout">Logout</a></li>
    </ul>
  </nav>

  <div class="content">
    <button id="sidebarToggle" class="btn">☰</button>
    <section class="home-section">
      <div class="card1">
        <div class="card1-body">
          <div class="d-flex flex-column align-items-center text-center">
            <?php if ($row): ?>
              <img src="data:image/jpeg;base64,<?php base64_encode($row['candidate_profile_path']) ?>" alt="Admin" class="rounded-circle profile-pic" width="100" onerror="this.onerror=null;this.src='../candidate_uploads/2.jpeg';">
              <div class="mt-5">
                <h4><?php echo $row['candidate_username']; ?></h4>
              </div>
            <?php else: ?>
              <p>No candidate data found.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="card2">
        <div class="card2-body">
          <?php if ($row): ?>
            <div class="row text-center">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-6 text-secondary">
                <?php echo $row['candidate_fullname']; ?>
              </div>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <form method="post">
            <span id="emailDisplay"><?= $row['candidate_email'] ?></span>
            <input type="email" name="newEmail" id="newEmailInput" class="form-control" style="display: none;">
            <button type="button" id="editEmail" class="btn btn-sm btn-primary">Edit Email</button>
            <button type="submit" id="saveEmail" class="btn btn-sm btn-success" style="display: none;">Save Email</button>
        </form>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-6 text-secondary">
                <?php echo $row['candidate_contact']; ?>
              </div>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-sm-3">
                <h6 class="mb-0">Password</h6>
              </div>
              <div class="col-sm-6 text-secondary">
                <span id="passwordDisplay" style="display: none;"><?= $row['password_generation'] ?></span>
              </div>
            </div>
          <?php else: ?>
            <p>No candidate data found.</p>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </div>
</div>

<script src="dash.js"></script>
<script>
    // JavaScript to toggle visibility and handle form submission
    document.getElementById('editEmail').addEventListener('click', function() {
        var emailDisplay = document.getElementById('emailDisplay');
        var newEmailInput = document.getElementById('newEmailInput');
        var saveEmailBtn = document.getElementById('saveEmail');

        // Toggle visibility of email display and input field
        emailDisplay.style.display = 'none';
        newEmailInput.style.display = 'block';
        saveEmailBtn.style.display = 'block';

        // Set value of input field to current email address
        newEmailInput.value = emailDisplay.textContent;
    });
</script>
</body>
</html>