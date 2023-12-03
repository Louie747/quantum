<?php
session_start();
include("./con.php");

function updateGold($conn, $acc_id, $score) {
    $query = "SELECT * FROM tbl_details WHERE account_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $acc_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        if ($score >= 10) {
            $data = $result->fetch_assoc();
            $currentGold = intval($data["gold"]);
            $newGold = floor(intval($score) / 10);
            $newGold += $currentGold;
            $updateQuery = "UPDATE tbl_details SET gold = ? WHERE account_id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("ii", $newGold, $acc_id);
            $updateStmt->execute();
        }
    } else {
        if ($score >= 10) {
            $newGold = floor(intval($score) / 10);
            $insertQuery = "INSERT INTO tbl_details (account_id, gold) VALUES (?, ?)";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bind_param("ii", $acc_id, $newGold);
            $insertStmt->execute();
        }
    }
}

function updateScore($conn, $acc_id, $score) {
    $query = "SELECT * FROM tbl_ranking WHERE account_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $acc_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if (intval($score) > intval($data["score"])) {
            $updateQuery = "UPDATE tbl_ranking SET score = ? WHERE account_id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("ii", $score, $acc_id);
            $updateStmt->execute();
        }
    } else {
        $insertQuery = "INSERT INTO tbl_ranking VALUES (?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("ii", $acc_id, $score);
        $insertStmt->execute();
    }
}

if (isset($_POST["score"]) && isset($_SESSION["acc_id"])) {
    $acc_id = $_SESSION["acc_id"];
    $score = $_POST["score"];

    updateGold($conn, $acc_id, $score);
    updateScore($conn, $acc_id, $score);
}
?>
