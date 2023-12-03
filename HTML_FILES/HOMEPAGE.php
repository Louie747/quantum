<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/HOMEPAGE/CSS/HOMEPAGE.css">
    <title>HOMEPAGE</title>
</head>
<body>

    <!-- HEADER -->


    
  <?php 
  include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"; 
  ?>

    <main>

    <div class="ad-container">
          <a href="https://shopee.ph/?gad_source=1&gclid=Cj0KCQiA3uGqBhDdARIsAFeJ5r3r1-jCSqCtIJoB5gmXmeK1y0fNSGcFZxoTY1krnueKZ6lrsyqmuXMaAgGbEALw_wcB"> <img src="../CSS/HOMEPAGE/CSS/BACKGROUND/IMAGES/ads.jpeg" alt="Advertisement"> </a>
          <p>Check out our amazing products!</p>
          <button id="closeAd">Close Ad</button>
        </div>

        <div class="start">
          <?php
            $location = "";
            if(isset($_SESSION["acc_id"]))
            {
              $location = "window.location.href='../GAME/GAME.php';";
            }else{
              $location = "window.location.href='./LOGIN.php'";
            }
          ?>
          <button onclick = "<?php echo $location; ?>" class="startbtn"><span>START</span></button>
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


            document.addEventListener("DOMContentLoaded", function () {
        const adContainer = document.querySelector(".ad-container");
        const closeAdButton = document.getElementById("closeAd");

        // Show the ad
        setTimeout(function () {
            adContainer.style.display = "block";
        }, 1000); // Display the ad after 5 seconds (adjust as needed)

        // Close the ad when the button is clicked
        closeAdButton.addEventListener("click", function () {
            adContainer.style.display = "none";
        });
    });
        </script>

</body>
</html>