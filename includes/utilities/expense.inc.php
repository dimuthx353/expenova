<?php
session_start();
require './db.inc.php';
require './function.inc.php';

if (!isset($_SESSION['uid'])) {
    die("Access denied");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['uid'];
    $username = $_SESSION['username'];

    $amount = $_POST['expense_amount'];
    $description = $_POST['expense_title'];



    $emptyInputFinance = emptyInputFinance($amount, $description);
    $InvalidAmount = InvalidAmount($amount);

    if (!$emptyInputFinance || !$emptyInputFinance) {
        $stmt = $conn->prepare("INSERT INTO expenses (user_id, amount, description,username) VALUES (?, ?, ?,?)");
        $stmt->bind_param("idss", $user_id, $amount, $description, $username);

        if ($stmt->execute()) {
            header("Location:../../dashboard/index.php?error=none");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
