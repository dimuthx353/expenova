<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expenova - Sign Up</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="application/javascript" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />




    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body class="d-flex flex-column bg-dark text-white">
    <!-- Navigation -->
    <div class="container-fluid p-0 sticky-top">
        <?php include_once '../includes/navigation.php' ?>
    </div>
    <!-- Main Content -->
    <div class="container-fluid bg-dark text-white p-5 my-content mt-5">
        <div class="container col-lg-6 col-sm-7 col-xl-4 col-12 px-lg-5 p-0 ">
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error === "emptyinputs") {
                    echo '
                <div class="">
                <div class="alert alert-danger text-capitalize" role="alert">
                check all fields
                </div>
                </div>
                ';
                }
                if ($error === "invalidUsername") {
                    echo '
                <div class="">
                <div class="alert alert-danger text-capitalize" role="alert">
                invalid username
                </div>
                </div>
                ';
                }
                if ($error === "invalidEmail") {
                    echo '
                <div class="">
                <div class="alert alert-danger text-capitalize" role="alert">
                invalid email
                </div>
                </div>
                ';
                }

                if ($error === "pwdMatch") {
                    echo '
                <div class="">
                <div class="alert alert-danger text-capitalize" role="alert">
                password did not match
                </div>
                </div>
                ';
                }
                if ($error === "uidExists") {
                    echo '
                <div class="">
                <div class="alert alert-danger text-capitalize" role="alert">
                username or email already exists.
                </div>
                </div>
                ';
                }
            }


            ?>
            <form id="signupForm" action="../includes/utilities/signup.inc.php" method="post">
                <div class="mb-3 border-bottom p-2">
                    <h1 class="text-white"><span class="text-info expenova-custom">SIGN UP</span> <span class=" expenova-custom"> - EXPENOVA</span> </h1>
                </div>
                <div class="d-flex">
                    <div class="mb-2 me-3 flex-fill">
                        <label for="exampleInputPassword1" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" oninput="validateInputs(event), updateFullName(event)">
                    </div>
                    <div class="mb-2 flex-fill">
                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" oninput="validateInputs(event) ,updateFullName(event)">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">UserName</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class=" mb-2">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" oninput="validateEmail(event)">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Create Password</label>
                    <input type="password" class="form-control" name="pwd" oninput="validatePasswords(event)">
                </div>
                <div class="">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="pwd2" oninput="validatePasswords()">
                    <div id="pwdErrMsg" class="form-text text-danger opacity-0 mt-2">Password Not Matching... Check Again!</div>
                </div>
                <button type="submit" class="btn btn-outline-info px-4 btn-lg" name="submit">Sign Up</button>
            </form>
            <p class="mt-3">Have an account? <a href="../signin/index.php">Sign in</a> </p>
        </div>
    </div>

    <!-- Footer  -->
    <?php
    include_once('../includes/footer.php');
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script src="../js/signup.js"></script>
</body>

</html>