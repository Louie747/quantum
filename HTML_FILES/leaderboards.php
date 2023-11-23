<!DOCTYPE html>
<html lang="en">
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

                    <tr>
                        <th>1</th>
                        <th>PLAYER #23</th>
                        <th>533</th>
                    </tr>

                    <tr>
                        <th>2</th>
                        <th>PLAYER #33</th>
                        <th>513</th>
                    </tr>

                    <tr>
                        <th>2</th>
                        <th>PLAYER #24</th>
                        <th>493</th>
                    </tr>

                    <tr>
                        <th>3</th>
                        <th>PLAYER #25</th>
                        <th>443</th>
                    </tr>

                    <tr>
                        <th>4</th>
                        <th>PLAYER #88</th>
                        <th>425</th>
                    </tr>

                    <tr>
                        <th>5</th>
                        <th>PLAYER #44</th>
                        <th>325</th>
                    </tr>
                </table>

                <div class="personal_score">
                        <h2>5</h2>
                        <h2>PLAYER #68</h2>
                        <h2>125</h2>
                </div>

                <div class="home_rest">
                    <button type="button">HOME</button>
                    <button type="button">RESTART</button>

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