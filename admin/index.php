<?php
include "../includes/utilities/db.inc.php";

session_start();
$username = $_SESSION["username"];
$status = $_SESSION["status"];

if ($status != 1) {
    header("Location: ../dashboard/index.php");
}

if (!$username) {
    header("Location: ../signin/index.php");
}

$balance = 0;
$incomeTotal = 0;
$expenseTotal = 0;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expenova - Dashboard</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="application/javascript" href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
    <!-- JQUERY CDN  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="d-flex flex-column vh-100 bg-dark text-white">
    <!-- Navigation -->
    <div class=" container-fluid p-0 sticky-top">
        <?php include_once '../includes/navigation.php' ?>
    </div>

    <!-- Overview -->
    <h1 class="text-center text-white mb-5 shadow-lg p-3 mt-5 container">Overview</h1>
    <?php
    $sql = "SELECT * FROM users WHERE status=0";
    $result = $conn->query($sql);
    $num_rows_users = $result->num_rows;

    $sql2 = "SELECT * FROM users WHERE status=1";
    $result2 = $conn->query($sql2);
    $num_rows_admin = $result2->num_rows;

    $sql3 = "SELECT * FROM feedback";
    $result3 = $conn->query($sql3);
    $num_rows_feedback = $result3->num_rows;
    ?>


    <div class="container text-center p-5">
        <div class="row cuz-row mt-5 d-flex justify-content-center">
            <div class="shadow col-12 col-sm-12 col-md-4 mb-sm-5 col-lg-4 me-auto p-5  text-info border-primary mb-5">
                <h3 style="letter-spacing: 3px;">Users</h3>
                <p class="text-white mt-5 display-4">
                    <span class="count">
                        <?php
                        echo $num_rows_users;
                        ?>
                    </span>
                    <span><i class="bi bi-people-fill"></i></span>
                </p>
            </div>
            <div class="shadow col-12 col-sm-12 col-md-4 mb-sm-5 col-lg-4 me-auto p-5 text-success border-primary mb-5">
                <h3 style="letter-spacing: 3px;">Admins</h3>
                <p class="text-white mt-5 display-4">
                    <span class="count">
                        <?php
                        echo $num_rows_admin;
                        ?>
                    </span>
                    <span><i class="bi bi-person-check"></i></span>
                </p>
            </div>
            <div class="shadow col-12 col-sm-12 col-md-4 mb-sm-5 col-lg-4 me-auto p-5  text-danger border-primary mb-5">
                <h3 style="letter-spacing: 3px;">Feedbacks</h3>
                <p class="text-white mt-5 display-4 ">
                    <span class="count">
                        <?php
                        echo $num_rows_feedback;
                        ?>
                    </span>
                    <span><i class="bi bi-chat-left-heart"></i></span>
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="table-responsive">
            <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
                <h1 class="text-center text-info mb-5 shadow-lg p-3 mt-5 container">User Details</h1>
                <thead class="">
                    <tr class="">
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created on</th>
                        <th scope="col">Funtions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users WHERE status=0;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['fName']; ?></td>
                                <td><?php echo $row['lName']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['createdOn']; ?></td>
                                <td><a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=users&page=admin'; ?>"><i class="bi bi-trash text-danger"></i></a></td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
                <h1 class="text-center text-success mb-5 p-3 shadow-lg mt-5 container">Admin Details</h1>
                <thead class="">
                    <tr class="">
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created on</th>
                        <th scope="col">Funtions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users WHERE status=1;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['fName']; ?></td>
                                <td><?php echo $row['lName']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['createdOn']; ?></td>
                                <td><a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=users&page=admin'; ?>"><i class="bi bi-trash text-danger"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
                <h1 class="text-center text-danger mb-5 p-3 shadow-lg mt-5 container">Feedback Details</h1>
                <thead class="">
                    <tr class="">
                        <th scope="col">Name</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created on</th>
                        <th scope="col">Funtions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM feedback;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['comment']; ?></td>
                                <td><?php echo $row['src']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['created_on']; ?></td>
                                <td><a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=feedback&page=admin'; ?>"><i class="bi bi-trash text-danger"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
                <h1 class="text-center text-warning mb-5 p-3 shadow-lg mt-5 container">Expense Details</h1>
                <thead class="">
                    <tr class="">

                        <th scope="col">User ID</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created on</th>
                        <th scope="col">Funtions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM expenses;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=expenses&page=admin'; ?>"><i class="bi bi-trash text-danger"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
                <h1 class="text-center text-light mb-5 p-3 shadow-lg mt-5 container">Income Details</h1>
                <thead class="">
                    <tr class="">
                        <th scope="col">Username</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created on</th>
                        <th scope="col">Funtions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM incomes;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=incomes&page=admin'; ?>"><i class="bi bi-trash text-danger"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
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

    <script src="../js/admin.js"></script>
    <script src="../js/signin.js"></script>
</body>

</html>