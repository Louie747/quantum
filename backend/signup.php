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
            echo "hello";
        }

    }
?>