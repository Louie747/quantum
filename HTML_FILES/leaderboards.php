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
    <link rel="stylesheet" href="../CSS/LEADERBOARDS/CSS/leaderboards.css">
    <title>LEADERBOARDS</title>
</head>
<body>

    <!-- HEADER -->
    <?php 
    include "../PHP_INCLUDES/GAME_HEADER/GAME_HEADER.php"
    ?>

    

<div class="parent_wrapper">
        <div class="child_wrapper">
            <div class="leaderboard_header">
                <img src="../CSS/LEADERBOARDS/CSS/BACKGROUND/IMAGES/avatar icon.png" alt="">
            </div>
            
            <div class="leaderboard_details">
                <h2>Leaderboard</h2>

                <table>
                    <tr>
                        <th>RANK:</th>
                        <th>ACCOUNT:</th>
                        <th>SCORES:</th>
                    </tr>
                    <?php
                        $rowCount = 0; 
                        $query = "SELECT ac.username, tr.score, tr.account_id FROM tbl_ranking tr 
                        INNER JOIN tbl_account ac ON ac.account_id = tr.account_id 
                        ORDER BY tr.score DESC;";
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        while(($row = $result->fetch_assoc()) && ($rowCount != 10)){
                                $rowCount++;
                    ?>
                    <tr>
                        <th><?php echo $rowCount; ?></th>
                        <th><?php echo $row["username"]; ?></th>
                        <th><?php echo $row["score"]; ?></th>
                    </tr>
                    <?php } ?>

                </table>

                <div class="personal_score">
                        <?php
                            $userRank = 0;
                            $rankCount = 0;
                            $userScore = 0;
                            $query = "SELECT * FROM tbl_ranking ORDER BY score DESC";
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($row = $result->fetch_assoc()){
                                    $rankCount++;
                                if($row["account_id"] == $_SESSION["acc_id"]){
                                    $userRank = $rankCount;
                                    $userScore = $row["score"];
                                }
                            }
                        ?>
                        <h2><?php echo $userRank; ?></h2>
                        <h2><?php echo $_SESSION["username"]; ?></h2>
                        <h2><?php echo $userScore; ?></h2>
                </div>

                <div class="home_rest">
                    <a href="./HOMEPAGE.php"><button type="button">HOME</button></a>
                    <a href="../GAME/GAME.php"><button type="button">RESTART</button></a>

                </div>
                

                <div class="share">
                    <button><img src="../CSS/LEADERBOARDS/CSS/BACKGROUND/IMAGES/SHARE.png"></button>
                </div>
            </div>
        </div>
    </div>
    


    
    
    
    
    
    <!-- FOOTER -->
    <?php 
    include "../PHP_INCLUDES/FOOTER/FOOTER.php"
    ?>


    
</body>
</html>