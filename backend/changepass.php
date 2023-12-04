<?php 

    include("./con.php");
    session_start();

    if(isset($_POST["newPass"]) && $_SESSION["acc_id"] && isset($_POST["current"]))
    {
        $currentPass = $_POST["current"];
        $newPass = $_POST["newPass"];
        $acc_id = $_SESSION["acc_id"];

        $query = "SELECT * FROM tbl_account WHERE account_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $acc_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $hashedPassword = $data["password"];

            if(password_verify($currentPass, $hashedPassword)){
                $hashPass = password_hash($newPass, PASSWORD_DEFAULT);
                $query = "UPDATE tbl_account SET password = ? WHERE account_id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("si", $hashPass, $acc_id);
                $stmt->execute();
                echo "success";
            }else{
                echo "invalid";
            }
        }
        
        

    }

?>