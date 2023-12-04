<?php 

    include("./con.php");
    session_start();

    if(isset($_POST["skin"]) && isset($_SESSION["acc_id"]))
    {
        $skin_name = $_POST["skin"];
        $acc_id = $_SESSION["acc_id"];

        $query = "SELECT * FROM tbl_skins WHERE skin_name = ? AND account_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $skin_name, $acc_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){

            $queryUpdate = "UPDATE tbl_details SET skin = ? WHERE account_id = ?";
            $stmtUpdate = $conn->prepare($queryUpdate);
            $stmtUpdate->bind_param("si", $skin_name, $acc_id);
            $stmtUpdate->execute();
        }else{
            echo "invalid";
        }
    }
?>