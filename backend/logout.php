<?php 
    session_start();
    unset($_SESSION["acc_id"]);
    unset($_SESSION["username"]);
    header("Location: ../HTML_FILES/LOGIN.php");
?>