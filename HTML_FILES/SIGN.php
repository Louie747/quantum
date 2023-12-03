<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/LOGIN_&_SIGNIN/SIGNIN/CSS/sign.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>

    <!-- HEADER -->


    <?php 
    include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
    ?>

    <main>

    <!-- ADS -->
    

    

     <div class="ad-container" id="adContainer1">
        <a href="https://shopee.ph/?gad_source=1&gclid=Cj0KCQiA3uGqBhDdARIsAFeJ5r0nBJVfTlMgDNppSt-9x7s_rCRWonMg1i6PjVIG2Dm59qItKJz0i3MaAkqTEALw_wcB"><img src="../CSS/LOGIN_&_SIGNIN/SIGNIN/CSS/BACKGROUND/IMAGES/lazada.png" alt="Advertisement 1">
        <p>Check out our special offer!</p></a>
        <button class="closeAd">Close Ad</button>
    </div>

    <div class="ad-container" id="adContainer2">
        <a href="https://www.lazada.com.ph/shop/online-shopping-ph/?path=index.htm"><img src="../CSS/LOGIN_&_SIGNIN/SIGNIN/CSS/BACKGROUND/IMAGES/shapi.png" alt="Advertisement 2">
        <p>Hurry up! Limited time discount!</p></a>
        <button class="closeAd">Close Ad</button>
    </div>

        <div class="signin">
                <div class="sign">

                    <div class="input_box">
                        <input type="text" placeholder="ENTER USERNAME" id="username" name="uname" required >
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="ENTER PASSWORD" id="password" name="pword" required >
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="RE-ENTER PASSWORD" id="confirmPass" name="rpword" required >
                    </div>

                    <div class="input_submit">
                      <button class="submit_btn">CREATE</button>
                    </div>

                    <h2>Already have an account?<a href="LOGIN.PHP"> click here!</a></h2>

                </div>
            </form>
        </div>


    </main>

    <!-- FOOTER -->
    <?php 
    include "../PHP_INCLUDES/FOOTER/FOOTER.php"
    ?>

   <!-- VIDEO AD MODAL -->
   <div id="videoAdModal" class="ad-container">
        <video id="videoAd" width="100%" height="100%" controls>
            <source src="../CSS/LOGIN_&_SIGNIN/SIGNIN/CSS/BACKGROUND/IMAGES/ads.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>


     <!-- SCRIPT -->
     <script>
        document.addEventListener("DOMContentLoaded", function () {
            const adContainer1 = document.getElementById("adContainer1");
            const adContainer2 = document.getElementById("adContainer2");

            // Display the first ad after 5 seconds
            setTimeout(function () {
                adContainer1.style.display = "block";
            }, 5000);

            // Display the second ad after 8 seconds
            setTimeout(function () {
                adContainer2.style.display = "block";
            }, 8000);

            // Add event listeners for close buttons
            document.querySelectorAll(".closeAd").forEach(function (button) {
                button.addEventListener("click", function () {
                    this.closest(".ad-container").style.display = "none";
                });
            });
        });

    </script>
<script src="../jquery/signup.js"></script>
</body>
</html>