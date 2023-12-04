<?php

    include("./con.php");
    session_start();

    if(isset($_POST["avatar"]) && isset($_SESSION["acc_id"]))
    {
        $avatar = $_POST["avatar"];
        $acc_id = $_SESSION["acc_id"];

        $query = "SELECT * FROM tbl_details WHERE account_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $acc_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if($result->num_rows <= 0){
            $queryInsert = "INSERT INTO tbl_details(account_id, avatar) VALUES(?, ?)";
            $stmtInsert = $conn->prepare($queryInsert);
            $stmtInsert->bind_param("is", $acc_id, $avatar);
            $stmtInsert->execute();
        }else{
            $queryUpdate = "UPDATE tbl_details SET avatar = ? WHERE account_id = ?";
            $stmtUpdate = $conn->prepare($queryUpdate);
            $stmtUpdate->bind_param("si", $avatar, $acc_id);
            $stmtUpdate->execute();
            
        }
    }

?>