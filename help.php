<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/help.css">
    <title>Hosting</title>

</head>

<body>
    <?php include 'includes/navigationBar.php'; ?>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">

                    <span class="fs-4">Bookingly Help</span>
                </a>
            </header>

            <div class="p-5 mb-4 rounded-3 box1">
                <div class="container-fluid py-5 center">
                    <h1 class="display-5 fw-bold">Hosting Help</h1>
                    <p class="col-md-8 fs-4">You can easily post your house or host your property with a few simple steps. There might be some paper that needs filling up but they won’t take much of your time. For more info click the button below.

                    </p>
                    <a class="btn btn-warning btn-lg" href="hosting.php" type="button">Host now!</a>
                </div>
            </div>

            <div class="row align-items-md-stretch ">
                <div class="col-md-6 lefties">
                    <div class="h-100 p-5 text-bg-warning rounded-3">
                        <h2>Rent a house</h2>
                        <p>Find a house or property that fits your criteria, want a small home that can host 4 people? You can find it here. For more info on how to find the property you want click the button below.
                        </p>
                        <a class="btn btn-dark btn-lg" href="rent.php" type="button">Rent now!</a>
                    </div>
                </div>
                <div class="col-md-6 righties">
                    <div class="h-100 p-5 bg-dark border rounded-3 text-light">
                        <h2>Account Help</h2>
                        <p>To be able to host or rent a house/property you will need to sign up, we will only need a few papers or identification to verify your identity and legitimacy. For more info please click the button below.
                        </p>
                        <a class="btn btn-warning btn-lg" href="register.php" type="button">Setup Account</a>
                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                © 2022 bookingly
            </footer>
        </div>
    </main>






    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>