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
            $data = $result->fetch_assoc();
            $hashedPassword = $data["password"];

            if(password_verify($password, $hashedPassword))
            {
                echo "success";
                $_SESSION["acc_id"] = $data["account_id"];
                $_SESSION["username"] = $data["username"];
            }else{
                echo "invalid";
            }
        }
    }

?>