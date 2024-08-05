<?php

include './db.inc.php';
session_start();
$uid = $_SESSION["uid"];


$sql_income = "SELECT id, amount, description FROM incomes WHERE user_id=$uid";
$result_income = $conn->query($sql_income);


$sql_expense = "SELECT id, amount, description FROM expenses WHERE user_id=$uid";
$result_expense = $conn->query($sql_expense);

$income_data = array();
$expense_data = array();

if ($result_income->num_rows > 0) {
    while ($row = $result_income->fetch_assoc()) {
        $income_data[] = $row;
    }
}

if ($result_expense->num_rows > 0) {
    while ($row = $result_expense->fetch_assoc()) {
        $expense_data[] = $row;
    }
}

$conn->close();


$data = array('income' => $income_data, 'expense' => $expense_data);


echo json_encode($data);
