<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include("../backend/con.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MARKETPLACE/CSS/MARKETPLACE.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>

    <!-- HEADER -->


    <?php 
    include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"
    ?>

    <main>
      <div class="wrapper">
        <div class="marketplace">
          <div class="marketplace_header">
            <?php 
                $gold = 0;
                if(!empty($_SESSION["acc_id"])){
                  $acc_id = $_SESSION["acc_id"];
                  $query = "SELECT * FROM tbl_details WHERE account_id = ?";
                  $stmt = $conn->prepare($query);
                  $stmt->bind_param("i", $acc_id);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  $data = $result->fetch_assoc();
                  $gold = $data["gold"];

                  if(empty($gold)) $gold = 0;
                }
            ?>
            <h2>MARKETPLACE <img id="coins" src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png"> 
            <span>: <?php echo $gold; ?></span></h2>
        
            
            <div class="marketplace_content">
              <button type="submit" class="color-js" value="head-red" id="red">RED SNAKE SKIN COLOR <br> <span><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png" alt="coin"> 10 GOLD COINS</span></button>
              <button type="submit" class="color-js" value="head-green" id="green" >GREEN SNAKE SKIN COLOR <br> <span><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png" alt="coin"> 10 GOLD COINS</span></button>
              <button type="submit" class="color-js" value="head-blue" id="blue">BLUE SNAKE SKIN COLOR <br> <span><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png" alt="coin"> 10 GOLD COINS</span></button>
              <button type="submit" class="color-js" value="head-yellow" id="yellow">YELLOW SNAKE SKIN COLOR <br> <span><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png" alt="coin"> 10 GOLD COINS</span></button>
              <button type="submit" class="color-js" value="head-purple" id="purple">PURPLE SNAKE SKIN COLOR <br><span><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png" alt="coin"> 10 GOLD COINS</span></button>
              <button type="submit" class="color-js" value="head-pink" id="pink">PINK SNAKE SKIN COLOR <br> <span><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/coin.png" alt="coin"> 10 GOLD COINS</span></button>
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
<script src="../jquery/marketplace.js"></script>
</body>
</html>