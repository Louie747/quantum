<?php 
    include("./con.php");
    session_start();
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM tbl_account WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            echo "exist";
        }else{
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO tbl_account(username, password) VALUES(?,?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $username, $hashedPassword);
            $stmt->execute();

            $querySelect = "SELECT * FROM tbl_account WHERE username = ?";
            $stmtSelect = $conn->prepare($querySelect);
            $stmtSelect->bind_param("s", $username);
            $stmtSelect->execute();
            $result = $stmtSelect->get_result();
            $acc_id = "";

            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                $hashedPassword = $data["password"];
    
                if(password_verify($password, $hashedPassword))
                {
                    $acc_id = $data["account_id"];
                }else{
                    echo "invalid";
                }
            }
            
            $skinName = "head-yellow";
            $querySkin = "INSERT INTO tbl_skins(account_id, skin_name) VALUES(?, ?)";
            $stmtSkin = $conn->prepare($querySkin);
            $stmtSkin->bind_param("is", $acc_id, $skinName);
            $stmtSkin->execute();

            $skin = "head-yellow";
            $queryInsert = "INSERT INTO tbl_details(account_id, skin) VALUES(?, ?)";
            $stmtInsert = $conn->prepare($queryInsert);
            $stmtInsert->bind_param("is", $acc_id, $skin);
            $stmtInsert->execute();

        }

    }
?>