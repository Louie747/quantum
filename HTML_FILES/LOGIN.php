<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/LOGIN_&_SIGNIN/LOGIN/CSS/LOGIN.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>

<!-- HEADER -->


<?php 
include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
?>

    <main>

        <div class="signin">
            <form action="" method="post">
                <div class="sign">

                    <div class="input_box">
                        <input type="text" placeholder="ENTER USERNAME" id="username" name="uname"  >
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="ENTER PASSWORD" id="password" name="pword"  >
                    </div>

                    <div class="input_submit">
                        <button class="submit_btn">START</button>
                    </div>

                </div>
            </form>
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

        <script src="../jquery/login.js"></script>
</body>
</html>