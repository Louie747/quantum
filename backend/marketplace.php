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
            echo "exist";
        }else{

            $querySelect = "SELECT * FROM tbl_details WHERE account_id = ?";
            $stmtSelect = $conn->prepare($querySelect);
            $stmtSelect->bind_param("i", $acc_id);
            $stmtSelect->execute();
            $resultSelect = $stmtSelect->get_result();

            if($resultSelect->num_rows > 0){
                $data = $resultSelect->fetch_assoc();
                $gold = $data["gold"];

                if($gold >= 10){
                    $updateGold = intval($gold) - 10;
                    $queryUpdate = "UPDATE tbl_details SET gold = ? WHERE account_id = ?";
                    $stmtUpdate = $conn->prepare($queryUpdate);
                    $stmtUpdate->bind_param("ii", $updateGold, $acc_id);
                    $stmtUpdate->execute();

                    $query = "INSERT INTO tbl_skins(account_id, skin_name) VALUES(?,?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("is", $acc_id, $skin_name);
                    $stmt->execute();
                }else{
                    echo "invalid";
                }
            }

            
            
        }
    }
?>