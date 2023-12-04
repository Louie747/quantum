<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include("../backend/con.php"); ?>
<?php 
  if(empty($_SESSION["acc_id"])){
    header("Location: ./LOGIN.php");
  }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PROFILES/ACCOUNT_PROFILE/CSS/ACC_PROFILEs.css">
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
        <div class="username">
          <?php 
              $acc_id = $_SESSION["acc_id"];
              $query = "SELECT * FROM tbl_details WHERE account_id = ?";
              $stmt = $conn->prepare($query);
              $stmt->bind_param("i", $acc_id);
              $stmt->execute();
              $result = $stmt->get_result();
              $data = $result->fetch_assoc();
              $avatar = "";
              if(is_null($data["avatar"])){
                $avatar = "../CSS/PROFILES/ACCOUNT_PROFILE/CSS/AVATARS/RICK_SAMPLE.jpg";
              }else{
                $avatar = $data["avatar"];
              }
          ?>
          <button onclick = "window.location.href='../HTML_FILES/AVATAR_PROFILE.php';"><img src="<?php echo $avatar; ?>"> </button>

          <div class="username_text">
            <h2><?php echo $_SESSION["username"]; ?></h2>
            <?php
                $score = 0;
                if(!empty($_SESSION["acc_id"]))
                {
                  $acc_id = $_SESSION["acc_id"];
                  $query = "SELECT * FROM tbl_ranking WHERE account_id = ?";
                  $stmt = $conn->prepare($query);
                  $stmt->bind_param("i", $acc_id);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  $data = $result->fetch_assoc();

                  if(!empty($data["score"])){
                    $score = $data["score"];
                  }
                } 
            ?>
            <h2>Highest score: <?php echo $score; ?></h2>
            
            <a href="skins.php"><button onclick="" type="submit">change skin</button></a>
            <a href="change.php"><button onclick="" type="submit">change password</button></a>
            <a href="../backend/logout.php"><button>sign out</button></a>
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