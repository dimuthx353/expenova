<?php
function emptyInputSignup($fName, $lName, $username, $email, $pwd, $pwd2)
{
    $result = null;

    if (empty($fName) || empty($lName) || empty($username) || empty($email) || empty($pwd) || empty($pwd2)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidUid($username)
{
    $result = null;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = null;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function  pwdMatch($pwd, $pwd2)
{
    $result = null;

    if ($pwd !== $pwd2) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR email=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location:../../signup/index.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row['id'];
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

function createUser($conn, $fName, $lName, $username, $email, $pwd)
{
    $sql = "INSERT INTO users (fName,lName,username,email,pwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location:../../signup/index.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $fName, $lName, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('Location:../../signup/signUpComplete.php');
    exit();
}

function emptyInputLogin($email, $pwd)
{
    $result = null;

    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function loginUser($conn, $email, $pwd)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../signin/index.php?error=sqlerror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $pwdHashed = $row['pwd'];
        if (password_verify($pwd, $pwdHashed)) {
            session_start();
            $_SESSION["uid"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["status"] = $row["status"];

            if ($row["status"] == 1) {
                header("Location: ../../admin/index.php?admin=true");
                exit();
            } else {
                header("Location: ../../dashboard/index.php?admin=false");
                exit();
            }
        } else {
            header("Location: ../../signin/index.php?error=wrongpassword");
            exit();
        }
    } else {
        header("Location: ../../signin/index.php?error=nouser");
        exit();
    }
}



function addFeedback($name, $comment, $src, $conn)
{

    $sql = "INSERT INTO feedback (name,comment,src) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location:../../aboutus/index.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $name, $comment, $src);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('Location:../../aboutus/index.php');
    exit();
}

function emptyInputFinance($amount, $description)
{

    $result = null;

    if (empty($amount) || empty($description)) {
        header("Location:../../dashboard/index.php?error=emptyInputs");
        $result = true;
    }

    return $result;
}

function InvalidAmount($amount)
{
    $result = null;

    if ($amount <= 0) {
        header("Location:../../dashboard/index.php?error=invalidAmount");
        $result = true;
    }

    return $result;
}
