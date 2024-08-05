<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expenova - Sign In</title>
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
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body class="d-flex flex-column bg-dark">
    <!-- Navigation -->
    <div class="container-fluid p-0 sticky-top">
        <?php include_once '../includes/navigation.php' ?>
    </div>
    <!-- Main Content -->
    <div class="container-fluid bg-dark text-white p-5 my-content h-100 d-flex justify-content-center align-items-center">
        <div class="container col-lg-3 col-sm-7 col-12 ">
            <form id="signinForm" action="../includes/utilities/signin.inc.php" method="post">
                <div class="mb-5 border-bottom p-2">
                    <h1 class="text-white"><span class="text-primary expenova-custom">SIGN IN</span> <span class="expenova-custom letter-spacing-2"> - EXPENOVA</span></h1>
                </div>
                <?php
                if (isset($_GET['error']) && $_GET['error'] === 'wrongpassword') {
                    echo "<div class='alert alert-danger' role='alert'>
                    Wrong Password Try Again...
                </div>";
                }

                if (isset($_GET['error']) && $_GET['error'] === 'nouser') {
                    echo "<div class='alert alert-danger' role='alert'>
                    Account not found.. check again...
                </div>";
                }

                if (isset($_GET['error']) && $_GET['error'] === 'emptyinput') {
                    echo "<div class='alert alert-danger' role='alert'>
                    check all fields ...
                </div>";
                }

                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" oninput="validateEmail(event)">
                    <div id="emailHelp" class="form-text text-white mt-1">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
                </div>
                <button type="submit" class="btn btn-outline-primary px-4 btn-lg mt-3" name="submit">Sign In</button>
            </form>
            <p class="mt-3">Don't have an account? <a href="../signup/index.php">Sign up</a> </p>
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

    <script src="../js/signin.js"></script>
</body>

</html>