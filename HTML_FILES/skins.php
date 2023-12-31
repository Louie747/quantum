<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include("../backend/con.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PROFILES/ACCOUNT_PROFILE/CSS/skins.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ACCOUNT PROFILE</title>
</head>
<body>
    <!-- HEADER -->
    <?php 
    include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
    ?>

    <main>
      <div class="wrapper">
        <div class="skins">
            <h1>CHOOSE YOUR SKIN</h1>

            <div class="skins-content">
              <button type="submit" class="color-js" value="head-red" id="red">RED SNAKE SKIN COLOR </button>
              <button type="submit" class="color-js" value="head-green" id="green" >GREEN SNAKE SKIN COLOR </button>
              <button type="submit" class="color-js" value="head-blue" id="blue">BLUE SNAKE SKIN COLOR </button>
              <button type="submit" class="color-js" value="head-yellow" id="yellow">YELLOW SNAKE SKIN COLOR </button>
              <button type="submit" class="color-js" value="head-purple" id="purple">PURPLE SNAKE SKIN COLOR </button>
              <button type="submit" class="color-js" value="head-pink" id="pink">PINK SNAKE SKIN COLOR </button>
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

<script src="../jquery/skin.js"></script>
</body>
</html>