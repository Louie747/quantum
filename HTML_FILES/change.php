<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include("../backend/con.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PROFILES/ACCOUNT_PROFILE/CSS/change.css">
    <title>ACCOUNT PROFILE</title>
</head>
<body>
    <!-- HEADER -->
    <?php 
    include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
    ?>

    <main>
      <div class="wrapper">
        <div class="username">
            <h1>CHANGE PASSWORD</h1>
                <div class="change">
                    <input type="text" name="current" id="current" placeholder="CURRENT PASSWORD">
                    <input type="password" name="newpass" id="newpass" placeholder="NEW PASSWORD">
                    <input type="password" name="repass" id="repass" placeholder="RE-PASSWORD">
                    <input type="submit" id="submit" value="SUBMIT">
                </div>
        </div> 
      </div>
    </main>
    <!-- FOOTER -->
    <?php 
    include "../PHP_INCLUDES/FOOTER/FOOTER.php"
    ?>


    
    
    
    
    <!-- SCRIPT -->

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>

</body>
</html>