<?php
require_once("./db.inc.php");
require_once("./function.inc.php");


if (isset($_POST["submit"])) {
    $fName = $_POST["fname"];
    $lName = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwd2 = $_POST["pwd2"];

    $emptyInput = emptyInputSignup($fName, $lName, $username, $email, $pwd, $pwd2);
    $invalidUsername = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $pwd2);
    $uidExists = uidExists($conn, $username, $email);


    if ($emptyInput !== false) {
        header("Location:../../signup/index.php?error=emptyinputs");
        exit();
    }

    if ($invalidUsername !== false) {
        header("Location:../../signup/index.php?error=invalidUsername");
        exit();
    }

    if ($invalidEmail !== false) {
        header("Location:../../signup/index.php?error=invalidEmail");
        exit();
    }

    if ($pwdMatch !== false) {
        header("Location:../../signup/index.php?error=pwdMatch");
        exit();
    }

    if ($uidExists !== false) {
        header("Location:../../signup/index.php?error=uidExists");
        exit();
    }

    createUser($conn, $fName, $lName, $username, $email, $pwd);
} else {
    header("Location:../../signup/index.php");
    exit();
}
