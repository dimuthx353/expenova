<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Metadata -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Expenova - Home</title>
  <!-- Favicon -->
  <link rel="icon" href="./img/logo.png" type="image/x-icon">
  <link rel="application/javascript" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Bootstrap Icon  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Font Awesome  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/navigation.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/footer.css">
</head>

<body class="d-flex flex-column bg-dark">
  <!-- Navigation -->
  <div class="container-fluid p-0 sticky-top">
    <?php
    $imageLocation = './img/logo.png';
    $signPage = './signin/index.php';
    $signUpPage = './signup/index.php';
    $homePage = './index.php';
    $aboutpage = './aboutus/index.php';

    include_once('./includes/navigation.php');
    ?>
  </div>
  <!-- Main Content -->
  <div class="container-fluid bg-dark mt-5 mb-5">
    <div class="container my-content bg-dark d-flex flex-wrap ">
      <!-- Sign In Section -->
      <div class="col-lg-6 col-12  h-100 d-flex justify-content-center align-items-center">
        <div class="my-div d-flex justify-content-center align-items-center my-shadow">
          <div class="d-flex my-h-200 flex-column justify-content-around">
            <h1 class="text-white"><span class="text-primary expenova-custom">SIGN IN</span> <span class="expenova-custom letter-spacing-2"> - EXPENOVA</span></h1>
            <p class="text-white w-80 text-center letter letter-spacing-2 ">"Unlock Your World: Expenova Login, Your Gateway to Efficiency!"</p>
            <a href="./signin/index.php">
              <button type="button" class="btn btn-outline-primary px-4 btn-lg">Sign In</button>
            </a>
            <div class=" w-100">
              <div class="social-media-icons d-flex justify-content-around align-items-center">
                <a href="https://www.facebook.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Facebook" data-bs-offset="0,10"> <i class=" fa-brands fa-square-facebook fa-2xl"></i></a>
                <a href="https://instagram.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Instagram" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-instagram fa-2xl"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Twitter" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-x-twitter fa-2xl"></i>
                </a>
                <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-whatsapp fa-2xl"></i>
                </a>
                </d>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign Up Section -->
      <div class="col-lg-6 col-12 h-100 d-flex justify-content-center  mb-5 align-items-center">
        <!-- Front of Sign Up Card -->
        <div id="card-two" class="my-div d-flex justify-content-center align-items-center my-shadow my-margin-bottom">
          <div class="d-flex front">
            <img src="./img/sign-up.png" alt="" class="d-block m-auto">
          </div>
          <!-- Back of Sign Up Card -->
          <div class="d-flex back my-h-200 flex-column justify-content-around">
            <h1 class="text-white"><span class="text-info expenova-custom">SIGN UP</span> <span class=" expenova-custom"> - EXPENOVA</span> </h1>
            <p class="text-white w-80 text-center letter letter-spacing-2">"Empower Your Journey: Join Expenova, Where Growth Begins!"</p>
            <a href="./signup/index.php">
              <button type="button" class="btn btn-outline-info px-4 btn-lg">Sign Up</button>
            </a>
            <div class=" w-100">
              <div class="social-media-icons d-flex justify-content-around align-items-center">
                <a href="https://www.facebook.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Facebook" data-bs-offset="0,10"> <i class="fa-brands fa-square-facebook fa-2xl"></i></a>

                <a href="https://instagram.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Instagram" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-instagram fa-2xl"></i>
                </a>

                <a href="https://twitter.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Twitter" data-bs-offset="0,10">
                  <i class=" fa-brands fa-square-x-twitter fa-2xl"></i>
                </a>

                <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-whatsapp fa-2xl"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
        <!-- Mobile Sign Up Card -->
        <div class="my-div justify-content-center align-items-center mobile-card my-shadow my-margin-bottom mt-5">
          <div class="d-flex back my-h-200 flex-column justify-content-around">
            <h1 class="text-white"><span class="text-info expenova-custom">SIGN UP</span> <span class=" expenova-custom"> - EXPENOVA</span> </h1>
            <p class="text-white w-80 text-center letter letter-spacing-2">"Empower Your Journey: Join Expenova, Where Growth Begins!"</p>
            <a href="./signup/index.php">
              <button type="button" class="btn btn-outline-info px-4 btn-lg">Sign Up</button>
            </a>
            <div class=" w-100">
              <div class="social-media-icons d-flex justify-content-around align-items-center">
                <a href="https://www.facebook.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Facebook" data-bs-offset="0,10"> <i class="fa-brands fa-square-facebook fa-2xl"></i></a>
                <a href="https://instagram.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Instagram" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-instagram fa-2xl"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Twitter" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-x-twitter fa-2xl"></i>
                </a>
                <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp" data-bs-offset="0,10">
                  <i class="fa-brands fa-square-whatsapp fa-2xl"></i>
                </a>
                </d>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer  -->
  <?php
  include_once('./includes/footer.php');
  ?>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="./js/index.js"></script>
  <script src="./js/footer.js"></script>
</body>

</html>
