<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/hosting.php">

    <title>Host Listing</title>

</head>



<body>
    <?php include 'includes/navigationBar.php'; ?>
    <?php include 'includes/account-navbar-dashboard.php';
    $email = $_SESSION['EMAIL'];

    ?>



    <div class="row rowmeta">
        <div class="col-lg-12">
            <div class="card m-5 p-5">
                <div class="container">
                    <div class="label fs-5">
                        <h1>See your hosting dashboard now!</h1>
                        <p>Check your hosting status with our new hosting dashboard now!</p>
                        <a href="hosting-dashboard/dashboard.php?EMAIL=<?php echo $email ?>"><button type="button" class="btn btn-warning">DASHBOARD</button></a>

                        <hr class="my-5" />
                        <p>Check your listings, See your status, this dashboard helps you to monitor your hosting easily!
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>