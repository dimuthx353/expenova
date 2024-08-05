<?php
session_start();
$username = $_SESSION["username"];

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
    <link rel="stylesheet" href="../css/dashbaord.css">
</head>

<body class="d-flex flex-column vh-100 bg-dark text-white">
    <!-- Navigation -->
    <div class=" container-fluid p-0 sticky-top">
        <?php include_once '../includes/navigation.php' ?>
    </div>

    <!-- Main Content -->
    <h1 class="text-center text-white shadow-lg p-3 mt-5 container">Add Transactions</h1>
    <?php
    if (isset($_GET['error']) && $_GET['error'] === 'emptyInputs') {
        echo "<div class='alert alert-danger col-lg-4 col-md-8 col-sm-12 m-auto mt-5' role='alert'>
        Check All fields and try again
    </div>";
    }
    if (isset($_GET['error']) && $_GET['error'] === 'invalidAmount') {
        echo "<div class='alert alert-danger col-lg-4 col-md-8 col-sm-12 m-auto mt-5' role='alert'>
        Invalid Amount .
    </div>";
    }
    if (isset($_GET['error']) && $_GET['error'] === 'none') {
        echo "<div class='alert alert-success col-lg-4 col-md-8 col-sm-12 m-auto mt-5' role='alert'>
        Transaction Added Successfully.
    </div>";
    }
    ?>
    <div class="container-fluid d-flex flex-wrap justify-center align-center">
        <div class="text-white  p-5 col-lg-6 col-12 col-md-6 entry">
            <div class="col-lg-9 d-flex flex-column m-auto">
                <h3 class="text-success mb-4  p-3 text-center">Add Income</h3>
                <form action="../includes/utilities/income.inc.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Income Title</label>
                        <input type="text" class="form-control" name="income_title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Amount</label>
                        <input type="number" class="form-control" name="income_amount">
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
        <div class="text-white  p-5 col-lg-6 col-12 col-md-6 entry">
            <div class="col-lg-9 d-flex flex-column m-auto">
                <h3 class="text-danger mb-4 p-3 text-center">Add Expenses</h3>
                <form action="../includes/utilities/expense.inc.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Expense Title</label>
                        <input type="text" class="form-control" name="expense_title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Amount</label>
                        <input type="number" class="form-control" name="expense_amount">
                    </div>
                    <button type="submit" class="btn btn-danger" name="submit">Add</button>
                </form>
            </div>
        </div>
        <div class="container text-white mb-5">
        </div>
    </div>

    <div class="col-lg-12 d-flex flex-wrap justify-content-center mb-5">
        <h1 class="text-center text-white shadow-lg p-3 mt-5 container">Transaction History</h1>

        <div class="col-lg-5 col-sm-10 me-lg-5">
            <div class="container">
                <div class="table-responsive">
                    <table class="table-hover table table-success table-striped-columns table-bordered shadow-lg">
                        <!-- Income Table  -->
                        <h3 class="text-success mb-5 text-center  p-3">Income Details</h3>
                        <thead class="">
                            <tr class="">
                                <th scope="col">Title</th>
                                <th scope="col">Amount (LKR)</th>
                                <th scope="col">Date and Time</th>
                                <th scope="col">Functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "../includes/utilities/db.inc.php";

                            $user_id = $_SESSION['uid'];

                            $sql = "SELECT * FROM incomes WHERE user_id = $user_id;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['created_at']; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=incomes'; ?>"><i class="bi bi-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $incomeTotal += $row["amount"]
                                    ?>
                            <?php }
                            } else {
                                echo "0 results";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-lg-5 col-sm-10">
            <div class="table-responsive">
                <div class="container">
                    <table class="table-hover table table-danger table-striped-columns table-bordered shadow-lg">
                        <!-- Expense Table  -->
                        <h3 class="text-danger mb-5 text-center p-3">Expense Details</h3>
                        <thead class="">
                            <tr class="">
                                <th scope="col">Title</th>
                                <th scope="col">Amount (LKR)</th>
                                <th scope="col">Date and Time</th>
                                <th scope="col">Functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM expenses WHERE user_id = $user_id;";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['created_at']; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo '../includes/utilities/delete.php?id=' . $row['id'] . '&type=expenses'; ?>"><i class="bi bi-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $expenseTotal += $row["amount"]
                                    ?>
                            <?php }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Final balance  -->
    <h1 class="text-center text-white mb-5 shadow-lg p-3 mt-5 container">Transaction Summary</h1>
    <div class="container text-center">
        <div class="row cuz-row mt-5 d-flex justify-content-center">
            <div class="shadow col-12 col-sm-12 col-md-4 mb-sm-5 col-lg-3 me-auto p-5  text-info border-primary mb-5">
                <h3 style="letter-spacing: 3px;">Balance</h3>
                <p class="text-white mt-5 display-6">
                    <span class="count">
                        <?php
                        echo $incomeTotal - $expenseTotal;
                        ?>
                    </span>
                    <span>LKR</span>
                </p>
            </div>
            <div class="shadow col-12 col-sm-12 col-md-4 mb-sm-5 col-lg-3 me-auto p-5 text-success border-primary mb-5">
                <h3 style="letter-spacing: 3px;">Income Total</h3>
                <p class="text-white mt-5 display-6">
                    <span class="count">
                        <?php
                        echo $incomeTotal;
                        ?>
                    </span>
                    <span>LKR</span>
                </p>
            </div>
            <div class="shadow col-12 col-sm-12 col-md-4 mb-sm-5 col-lg-3 me-auto p-5  text-danger border-primary mb-5">
                <h3 style="letter-spacing: 3px;">Expense Total</h3>
                <p class="text-white mt-5 display-6 ">
                    <span class="count">
                        <?php
                        echo $expenseTotal;
                        ?>
                    </span>
                    <span>LKR</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Chart Overview  -->
    <h1 class="text-center text-white mt-5 shadow-lg container">Chart Overview</h1>
    <div class="chart-container mt-5 mb-5 col-lg-8 col-12">
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <div class="mb-5">
    </div>


    <!-- Footer  -->
    <?php
    include_once('../includes/footer.php');
    ?>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="../js/dashboard.js"></script>
    <script src="../js/signin.js"></script>
    <script src="../js/chart.js"></script>
</body>

</html>