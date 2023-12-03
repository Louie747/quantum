<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC_HEADER</title>
</head>
<body>
<header>



<nav class="nav_header">
    <ul>
        <li id="ricky"><a href="../HTML_FILES/HOMEPAGE.php">Rick and Roll</a></li>
        <li><a href="../HTML_FILES/ABOUT.php">About</a></li>
        <li><a href="../HTML_FILES/NEWS.php">News and Social</a></li>
        <li><a href="../HTML_FILES/REVIEW.php">Review</a></li>

        <div class="dropdown">
            <?php
                
                if(isset($_SESSION["acc_id"]))
                {
                    $username = $_SESSION["username"];
                    echo "
                    <li onclick='myFunction()' class='dropbtn'>$username</li>

                    <div id='myDropdown' class='dropdown-content'>
                        <a href='../../backend/logout.php'>LOGOUT</a>
        
                        <hr>
        
                        <a href='../HTML_FILES/ACC_PROFILE.php'>ACCOUNT</a>
                    </div>
                    ";
                }else{
                    echo "<a href='./SIGN.php' class='profile'><li class='dropbtn'>PROFILE</li></a>";
                }
            
            ?>
            
        </div>

        <li id="market"><a href="../HTML_FILES/MARKETPLACE.php"><img src="../CSS/MARKETPLACE/CSS/BACKGROUND/IMAGES/store.png" alt="storeicon"></a></li>
        
        
        
    </ul>
</nav>

</header>
</body>
</html>