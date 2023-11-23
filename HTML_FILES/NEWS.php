<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/NEWS_&_ABOUT/NEWS/CSS/news1.css">
    <title>Document</title>
</head>
<body>


     <!-- HEADER -->


     <?php 
     include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
     ?>
     
    <main>
        <div class="maincontent">
            <div class="news">

                <!--  Header -->
                


                <!--  Content -->
                    
                <div class="newscontainer">
                    <img src="../CSS/NEWS_&_ABOUT/NEWS/CSS/BACKGROUND/IMAGES/PICTURES/news1.jpg">
                    <div class="description">
                      <h2>Slithering Through Dimensions🐍</h2>
                      <hr>
                      <p>Introducing "Rick and Morty: Slithering Through Dimensions🐍" 
                      the most dimension-hopping, mind-bending snake game you'll ever play! 
                      Join Rick and Morty on an epic journey through the multiverse, 
                      where you'll devour your way to victory while avoiding cosmic peril. 
                      Get ready to slither and slide through alternate realities with the maddest duo in the galaxy. 
                      Can you survive the chaos and conquer the infinite snakeiverse? Stay tuned for a portal-jumping adventure like no other!</p>
                    </div>
                </div>

                <div class="newscontainer">
                    <img src="../CSS/NEWS_&_ABOUT/NEWS/CSS/BACKGROUND/IMAGES/PICTURES/news1.jpg">
                    <div class="description">
                      <h2>Slithering Through Dimensions🐍</h2>
                      <hr>
                      <p>Introducing "Rick and Morty: Slithering Through Dimensions🐍" 
                      the most dimension-hopping, mind-bending snake game you'll ever play! 
                      Join Rick and Morty on an epic journey through the multiverse, 
                      where you'll devour your way to victory while avoiding cosmic peril. 
                      Get ready to slither and slide through alternate realities with the maddest duo in the galaxy. 
                      Can you survive the chaos and conquer the infinite snakeiverse? Stay tuned for a portal-jumping adventure like no other!</p>
                    </div>
                </div>

                <div class="newscontainer">
                    <img src="../CSS/NEWS_&_ABOUT/NEWS/CSS/BACKGROUND/IMAGES/PICTURES/news1.jpg">
                    <div class="description">
                      <h2>Slithering Through Dimensions🐍</h2>
                      <hr>
                      <p>Introducing "Rick and Morty: Slithering Through Dimensions🐍" 
                      the most dimension-hopping, mind-bending snake game you'll ever play! 
                      Join Rick and Morty on an epic journey through the multiverse, 
                      where you'll devour your way to victory while avoiding cosmic peril. 
                      Get ready to slither and slide through alternate realities with the maddest duo in the galaxy. 
                      Can you survive the chaos and conquer the infinite snakeiverse? Stay tuned for a portal-jumping adventure like no other!</p>
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