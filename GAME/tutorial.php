<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/tutorial.css">
    <title>tutorial</title>

    <!-- GAME EFFECTS -->

    
</head>
<body>

    <!-- HEADER -->
    <!-- <?php 
    include "../PHP_INCLUDES/GAME_HEADER/GAME_HEADER.php"
    ?> -->

    <main>

        <div class="wrapper">
            <div class="content">
                <button class="w3-button w3-black w3-display-left" id="left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" id="right" onclick="plusDivs(1)">&#10095;</button>
                <img class="mySlides" src="CSS/BACKGROUND/IMAGES/tutorial1.png">
                <img class="mySlides" src="CSS/BACKGROUND/IMAGES/tutorial2.png">
                <img class="mySlides" src="CSS/BACKGROUND/IMAGES/tutorial3.png">
                <img class="mySlides" src="CSS/BACKGROUND/IMAGES/tutorial4.png">
                <img class="mySlides" src="CSS/BACKGROUND/IMAGES/tutorial5.png">
                
            </div>
            <button onclick="window.location.href = 'GAME.php';" id="play">PLAY GAME</button>
            
        </div>
    </main>


    
    

    
    <!-- FOOTER -->
    <?php 
    include "../PHP_INCLUDES/FOOTER/FOOTER.php"
    ?>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
            
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
    </script>

</body>
</html>