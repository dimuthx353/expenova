<?php

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in
    $username = $_SESSION['username'];
    $status = $_SESSION["status"];
?>
    <!-- Navigation bar with "Username" and "Logout" -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid ">
            <img src="<?php echo (isset($imageLocation) ? $imageLocation : '../img/logo.png'); ?>" class="logo" alt="">
            <a class="navbar-brand text-primary fw-bold" id="expenova" href="#">
                <div class="wrapper">
                    <svg class="">
                        <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                            E X P E N O V A
                        </text>
                    </svg>
                </div>
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end w-100">
                    <li class="nav-item">
                        <a class="nav-link text-white active letter-spacing my-location-dashboard" aria-current="page" href="<?php echo (isset($dashboardPage) ? $dashboardPage : '../dashboard/index.php'); ?>">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white letter-spacing my-location-about-us" href="<?php echo (isset($aboutpage) ? $aboutpage : '../aboutus/index.php'); ?>">ABOUT US</a>
                    </li>
                    <?php
                    if ($status == 1) {
                        echo "<li class='nav-item'>
                        <a class='nav-link text-white letter-spacing my-location-admin' href=' ../admin/index.php'>ADMIN</a>
                    </li>";
                    };
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-white letter-spacing" href="../logout/index.php">LOGOUT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white letter-spacing" href="#"><i class="bi bi-person-fill text-secondary"> <small class="text-secondary"><?php echo strtoupper($username); ?> </small></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
<?php
} else {
    // User is not logged in
?>
    <!-- Navigation bar with "Sign In" and "Sign Up" -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <img src="<?php echo (isset($imageLocation) ? $imageLocation : '../img/logo.png'); ?>" class="logo" alt="">
            <a class="navbar-brand text-primary fw-bold" id="expenova" href="#">
                <div class="wrapper">
                    <svg class="">
                        <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                            E X P E N O V A
                        </text>
                    </svg>
                </div>
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end w-100">
                    <li class="nav-item">
                        <a class="nav-link text-white active letter-spacing my-location-home" aria-current="page" href="<?php echo (isset($homePage) ? $homePage : '../index.php'); ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white letter-spacing my-location-sign-in" href="<?php echo (isset($signPage) ? $signPage : '../signin/index.php'); ?>">SIGN IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white letter-spacing my-location-sign-up" href="<?php echo (isset($signUpPage) ? $signUpPage : '../signup/index.php'); ?>">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white letter-spacing my-location-about-us" href="<?php echo (isset($aboutpage) ? $aboutpage : '../aboutus/index.php'); ?>">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
}
?>