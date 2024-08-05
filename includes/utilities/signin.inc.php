<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once("./db.inc.php");
    require_once("./function.inc.php");



    if (emptyInputLogin($email, $pwd) !== false) {
        header("Location: ../../signin/index.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $pwd);
} else {
    header("Location:../../signin/index.php");
    exit();
}
