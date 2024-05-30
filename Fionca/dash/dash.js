document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.getElementById('sidebar');
    var sidebarToggle = document.getElementById('sidebarToggle');
    var sidebarCollapse = document.getElementById('sidebarCollapse');
    
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('collapsed');
    });
    
    sidebarCollapse.addEventListener('click', function() {
      sidebar.classList.toggle('collapsed');
    });
  });

  $(document).ready(function() {
    $('#changePassword').click(function() {
      var newPasswordInput = $('#newPasswordInput');
      var passwordDisplay = $('#passwordDisplay');
  
      // Toggle visibility of input field and display span
      newPasswordInput.toggle();
      passwordDisplay.toggle();
  
      // If input field is visible, focus on it
      if (newPasswordInput.is(':visible')) {
        newPasswordInput.focus();
      } else {
        // Otherwise, update the display span with the new password
        passwordDisplay.val(newPasswordInput.val());
      }
    });
  });
  