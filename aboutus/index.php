<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expenova - About Us</title>
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
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body class="d-flex flex-column vh-100 bg-dark text-white">
    <!-- Navigation -->
    <div class=" container-fluid p-0 sticky-top">
        <?php include_once '../includes/navigation.php' ?>
    </div>

    <!-- main content goes here ...  -->
    <div class="accordion bg-dark col-lg-10 col-sm-12 ms-auto me-auto mt-3 accordion-flush p-lg-5 p-2 p-md-5 " id="accordionExample">
        <h2 class="text-center mb-5">About Us</h2>
        <div class="accordion-item bg-dark text-white">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Introduction
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>
                        <strong class="text-info"> Purpose:</strong> <br>
                        Our website is designed to simplify and streamline the process of managing your expenses and income. We understand that keeping track of finances can be overwhelming, which is why we've created a user-friendly platform to help you take control of your financial life.
                        <br> <br>
                        <strong class="text-info"> Functionality:</strong> <br>
                        With our expense and income management website, you can:

                        Easily track your expenses and income in one central location
                        Set personalized budgets and savings goals to help you stay on track
                        Analyze your spending habits and identify areas where you can save money
                        Generate detailed reports and insights to gain a clear understanding of your financial health
                        Access your financial information anytime, anywhere, from any device
                        Unique Selling Points:
                        What sets our website apart:
                        <br> <br>
                        <strong class="text-info"> User-Friendly Interface:</strong> <br>
                        Our intuitive interface makes it easy for users of all skill levels to navigate and utilize our platform effectively.
                        Customization Options: We offer a range of customization options to tailor the platform to your individual financial needs and preferences.
                        Robust Security Measures: Your privacy and security are our top priorities. We employ industry-leading security measures to protect your financial data.
                        Continuous Updates and Improvements: We are committed to continuously updating and improving our platform to provide you with the best possible user experience.
                        <br> <br>

                        <strong class="text-info"> How We Can Help:</strong> <br>
                        Whether you're a budgeting novice or a seasoned financial pro, our website is designed to empower you to make informed financial decisions and achieve your financial goals. From managing day-to-day expenses to planning for long-term financial success, we're here to support you every step of the way.
                        <br> <br>
                        <strong class="text-info"> Get Started:</strong> <br>
                        Ready to take control of your finances? <a href="../signup/index.php">Sign up </a>for a free account today and start managing your expenses and income with ease!
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark text-white">
            <h2 class="accordion-header" id="headingTwoo">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                    Our Story
                </button>
            </h2>
            <div id="collapseTwoo" class="accordion-collapse collapse" aria-labelledby="headingTwoo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>
                        Our story is one of ambition and dedication. It all started with a simple idea: to simplify financial management for everyone. Frustrated by the lack of user-friendly options, our founders set out on a mission to create a platform that marries usability with robust functionality. Over the years, our project has grown from a concept into a fully realized website, fueled by the dedication and hard work of our team. Despite numerous challenges, we've continuously refined and improved our platform to better serve our users. Looking ahead, our vision remains unwavering: to be the go-to destination for individuals and businesses seeking a hassle-free way to manage their finances. We're committed to innovation, continuous improvement, and, above all, the satisfaction of our users.
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark text-white">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Overview
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>
                        Our platform provides a comprehensive suite of tools to help users track expenses, monitor income streams, and create budgets tailored to their financial goals. Whether you're managing personal finances or running a small business, our intuitive interface and powerful features make financial management simple and efficient.
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark text-white">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Mission
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>
                        Our mission is to empower individuals and businesses to achieve financial wellness by providing them with the tools and resources they need to make informed decisions and take control of their financial futures.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team  -->
    <section class="text-center mt-3">
        <h2 class="mb-4">Meet Our Team</h2>
        <div class="container p-lg-5 d-flex align-items-center justify-content-lg-around justify-content-center flex-wrap">
            <div class="card lg-me-5 mb-5 bg-secondary" style="width: 21rem;">
                <img src="../img/dimuth.jpg" class="card-img-top img-cutz" alt="...">
                <div class="card-body card-body-cutz">
                    <h5 class="card-title text-white">Dimuth Adithya</h5>
                    <p class="card-text">
                        Dimuth is our backend developer, specializing in PHP and database management. With expertise in server-side programming and data manipulation, Dimuth ensures our website's functionality is robust and reliable.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">PHP</li>
                    <li class="list-group-item">MYSQL</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="card lg-me-5 mb-5 bg-secondary" style="width: 25rem;">
                <img src="../img/nipuni.jpg" class="card-img-top img-cutz" alt="...">
                <div class="card-body card-body-cutz">
                    <h5 class="card-title text-white">Nipuni Navindya</h5>
                    <p class="card-text">
                        Nipuni is our lead developer, responsible for overseeing the technical aspects of our website. With a strong background in web development and a passion for creating user-friendly interfaces, John ensures that our website runs smoothly and efficiently.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Web Development</li>
                    <li class="list-group-item">Technical Leadership</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="card lg-me-5 mb-5 bg-secondary" style="width: 21rem;">
                <img src="../img/tharuka.jpg" class="card-img-top img-cutz" alt="...">
                <div class="card-body card-body-cutz">
                    <h5 class="card-title text-white">Dulmini Tharuka</h5>
                    <p class="card-text">
                        Tharuka is our talented UI/UX designer, bringing creativity and innovation to our website's design. With an eye for detail and a user-centric approach, Dulmini creates visually stunning and intuitive interfaces that enhance the user experience.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">HTML</li>
                    <li class="list-group-item">CSS</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="card lg-me-5 mb-5 bg-secondary" style="width: 21rem;">
                <img src="../img/sherone.jpg" class="card-img-top img-cutz" alt="...">
                <div class="card-body card-body-cutz">
                    <h5 class="card-title text-white">Sheronne Anjalee</h5>
                    <p class="card-text">
                        Sheronne is our frontend developer, responsible for bringing our website's design to life using HTML, CSS, and JavaScript. With proficiency in frontend technologies, Sheronne creates dynamic and responsive web pages that engage users and enhance their browsing experience.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">BOOTSTRAP</li>
                    <li class="list-group-item">JAVASCRIPT</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="card lg-me-5 mb-5 bg-secondary" style="width: 21rem;">
                <img src="../img/vishaka.jpg" class="card-img-top img-cutz" alt="...">
                <div class="card-body card-body-cutz">
                    <h5 class="card-title text-white">Vishaka Harshani</h5>
                    <p class="card-text">
                        Vishaka is our second frontend developer, contributing to the implementation of visual elements and user interface enhancements on our website. With proficiency in HTML, CSS, and JavaScript, Vishaka collaborates with the team to create dynamic and responsive web pages that elevate the user experience.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"></li>
                    <li class="list-group-item">HTML</li>
                    <li class="list-group-item">CSS</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="card-link text-dark fs-3"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedbacks  -->


    <section class="">
        <h2 class="text-center mb-4 mt-3">Feedbacks</h2>
        <div>
            <div class="container p-lg-5 ">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="card text-body bg-secondary">
                            <div class="card-body p-4">
                                <h4 class="mb-0">Recent comments</h4>
                                <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                            </div>

                            <hr class="my-0" />

                            <?php
                            include_once "../includes/utilities/db.inc.php";

                            $sql = "SELECT * FROM feedback";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { ?>
                                    <div class='card-body p-4'>
                                        <div class='d-flex flex-start'>
                                            <img class='rounded-circle shadow-1-strong me-3' src=<?php echo $row['src']; ?> alt='avatar' width='60' height='60' />
                                            <div>
                                                <h6 class='fw-bold mb-1'><?php echo $row['name']; ?></h6>
                                                <div class='d-flex align-items-center mb-3'>
                                                    <p class='mb-0'>
                                                        <?php echo $row['created_on']; ?>
                                                        <span class='badge bg-success'>Approved</span>
                                                    </p>
                                                    <a href='#!' class='link-muted'><i class='fas fa-pencil-alt ms-2'></i></a>
                                                    <a href='#!' class='text-success'><i class='fas fa-redo-alt ms-2'></i></a>
                                                    <a href='#!' class='link-danger'><i class='fas fa-heart ms-2'></i></a>
                                                </div>
                                                <p class="mb-0">
                                                    <?php echo $row['comment']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                            <hr class="my-0" style="height: 1px;" />
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- add feedback  -->
    <div class="container p-lg-5 p-md-5 col-lg-4 mt-5 mb-5">
        <h3 class="m-0">Add Some Feedback Here</h3>
        <small class="text-danger">Show some Love.. <span class="text-danger">❤</span></small>
        <br> <br> <br>
        <form action="../includes/utilities/feedback.inc.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name..." name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Comment</label>
                <textarea name="comment" id="" class="form-control" placeholder="Enter Your Feedback here.." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
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
    <script src="../js/about.js"></script>
</body>

</html>