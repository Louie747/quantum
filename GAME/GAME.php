<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include("../backend/con.php"); ?>
<?php

  if(empty($_SESSION["acc_id"])){
    header("Location: ../HTML_FILES/LOGIN.php");
  }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/SNAKEGAMEs.css">
    <title>game</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- GAME EFFECTS -->
    <audio id="eatSound" src="CSS/BACKGROUND/SOUNDS/EAT.mp3"></audio>
    <audio id="teleport" src="CSS/BACKGROUND/SOUNDS/TELEPORT.mp3"></audio>
    <audio id="speed" src="CSS/BACKGROUND/SOUNDS/SPEED.mp3"></audio>
    <audio id="gameover" src="CSS/BACKGROUND/SOUNDS/GAMEOVER.mp3"></audio>

    <audio id="backgroundMusic" src="CSS/BACKGROUND/SOUNDS/background.mp3" loop autoplay></audio>
    
    <script src="JAVASCRIPT/snake.js" defer></script>
</head>
<body>

    <!-- HEADER -->
    <?php 
    include "../PHP_INCLUDES/GAME_HEADER/GAME_HEADER.php"
    ?>


    <!-- Popup Screen -->
    <div class="overlay">
            <div class="popup">
                <!-- Content of your popup -->
                <div class="options">
                  
                <div class="option">
                  <button id = "option-1" onclick="window.location.href='tutorial.php'">TUTORIAL</button>
                  </div>
                  
                  <div class="option">
                  <button id = "option-2" onclick="closePopup()">PLAY GAME</button>
                  </div>
                </div>
                <span class="close-btn" onclick="closePopup()">X</span>
                <!-- Add your content here -->
            </div>
        </div>

    <div class="wrapper">
      <div class="game_backgrnd">
        <div class="rickandroll">
        <p>R</p>
        <p>I</p>
        <p>C</p>
        <p>K</p>
      </div>
        <div class="game_wrap">
          <div class="game_details">
            <span class="score">Score: 0</span>
            <span class="high_score">High score: 0</span>
          </div>
        <div class="play_board"></div>
        </div>
        <div class="rickandroll">
        <p>R</p>
        <p>O</p>
        <p>L</p>
        <p>L</p>
      </div>
      </div>
    </div>

    
    <!-- FOOTER -->
    <?php 
    include "../PHP_INCLUDES/FOOTER/FOOTER.php"
    ?>

</body>
</html>