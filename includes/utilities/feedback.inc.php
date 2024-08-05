<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $randomNumber = rand(0, 100);
    $src = "https://randomuser.me/api/portraits/men/" . $randomNumber . ".jpg";


    require_once("./db.inc.php");
    require_once("./function.inc.php");

    addFeedback($name, $comment, $src, $conn);
} else {
    header("Location:../../aboutus/index.php");
    exit();
}
