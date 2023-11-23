<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/REVIEW/CSS/REVIEWs.css">
    <title>Document</title>
</head>
<body>


<!-- HEADER -->


<?php 
include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
?>


        <!-- MAIN -->

    <main>
        <div class="maincontent">
            <div class="content">
                <div class="rev_content">
                    <div class="rev_content_header">
                        <h1>RATE US: ⭐ ⭐ ⭐ ⭐ ⭐</h1>
                    </div>

                    <div class="seperator">
                        <hr>
                    </div>

                    <div class="rev_content_main">
                        <form id="Feedback">
                            <div class="description">
                                <h2>We'd love to hear your suggestions, <br> 
                                    recommendations and feedback to our game!
                                </h2>

                                <textarea class="form_review" id="review" rows="3"></textarea>
                            </div>

                            <div class="submit">
                                <button type="submit" class="submitbtn"><span>SUBMIT</span></button>
                            </div>
                        </form>

                        <div class="seperator">
                            <hr>
                        </div>

                        <div class="rev_details_header">
                        <img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/review.png" alt="review img" id="logo1">
                        <img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/review_logo.png" alt="review logo img" id="logo2">
                        </div>

                        <div class="rev_details_header_description">
                            <h2> <span> 5.0 </span> ⭐ ⭐ ⭐ ⭐ ⭐ 5 REVIEWS</h2>
                        </div>

                        <div class="seperator">
                            <hr>
                        </div>

                        <div class="rev_details">

                            <table>
                                <tr>
                                    <th class="thimg"><img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/NEWS AVATARS/SUM_SAMPLE.jpg" alt=""></th>
                                    
                                    <th>
                                        <h2><br>⭐ ⭐ ⭐ ⭐ ⭐</h2>
                                        <p>
                                            Rick and Roll is a thrilling snake game with addictive gameplay 
                                            and nostalgic vibes. Highly recommended for casual gamers!       
                                        </p>
                                        
                                    </th>
                                    
                                </tr>


                                
                            </table>

                            <div class="seperator">
                                <hr>
                            </div>

                            <table>
                                <tr>
                                    <th class="thimg"><img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/NEWS AVATARS/RICK_SAMPLE.jpg" alt=""></th>
                                    
                                    <th>
                                        <h2><br>⭐ ⭐ ⭐ ⭐ ⭐</h2>
                                        <p>
                                            Rick and Roll's modern twist on the classic snake game is a must-play, 
                                            offering hours of entertainment and challenging levels.   
                                        </p>
                                        
                                    </th>
                                    
                                </tr>


                                
                            </table>

                            <div class="seperator">
                                <hr>
                            </div>

                            <table>
                                <tr>
                                    <th class="thimg"><img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/NEWS AVATARS/SUM_SAMPLE.jpg" alt=""></th>
                                    
                                    <th>
                                        <h2><br>⭐ ⭐ ⭐ ⭐ ⭐</h2>
                                        <p>
                                            Rick and Roll's intuitive controls and vibrant graphics 
                                            make it a top choice for snake game enthusiasts of all ages.     
                                        </p>
                                        
                                    </th>
                                    
                                </tr>


                                
                            </table>

                            <div class="seperator">
                                <hr>
                            </div>

                            <table>
                                <tr>
                                    <th class="thimg"><img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/NEWS AVATARS/RICK_SAMPLE.jpg" alt=""></th>
                                    
                                    <th>
                                        <h2><br>⭐ ⭐ ⭐ ⭐ ⭐</h2>
                                        <p>
                                            With its catchy soundtrack and smooth gameplay, 
                                            Rick and Roll brings a fresh and enjoyable experience to the snake game genre!       
                                        </p>
                                        
                                    </th>
                                    
                                </tr>


                                
                            </table>

                            <div class="seperator">
                                <hr>
                            </div>

                            <table>
                                <tr>
                                    <th class="thimg"><img src="../CSS/REVIEW/CSS/BACKGROUND/IMAGES/NEWS AVATARS/SUM_SAMPLE.jpg" alt=""></th>
                                    
                                    <th>
                                        <h2><br>⭐ ⭐ ⭐ ⭐ ⭐</h2>
                                        <p>
                                            In Rick and Roll, slithering through dynamic mazes and collecting 
                                            power-ups adds an exciting twist to the traditional snake game.       
                                        </p>
                                        
                                    </th>
                                    
                                </tr>


                                
                            </table>
                        </div>


                        
                    </div>

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