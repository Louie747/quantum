<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATAR_PROFILES.css">
    <title>AVATAR_PROFILE</title>
</head>
<body>

    <!-- HEADER -->


    <?php 
    include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
    ?>

    <main>
      <div class="wrapper">
        <div class="profile">
          <div class="prof_avatars_text">
            <h2>CHOOSE YOUR PROFILE</h2>
          </div>

          <div class="prof_avatars">
            <button class="avatar-js"><img src="../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/RICK_SAMPLE.jpg"></button>
            <button class="avatar-js"><img src="../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/JERRY_SAMPLE.jpg"></button>
            <button class="avatar-js"><img src="../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/MORTY_SAMPLE.jpg"></button>
            
          </div>

          <div class="prof_avatars">
            <button class="avatar-js"><img src="../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/SQUACH_SAMPLE.jpg"></button>
            <button class="avatar-js"><img src="../CSS/PROFILES/AVATAR_PROFILES/CSS/AVATARS/SUM_SAMPLE.jpg"></button>
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