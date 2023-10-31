<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/hosting.css">
    <title>Hosting</title>

</head>

<body>
    <?php include 'includes/navigationBar.php'; ?>


    <div class="row rowmeta">
        <div class="col-lg-6 lefties">
            <div class="container">
                <div class="label">
                    <h1>HOST YOUR HOME NOW!</h1>
                    <p>Do you like what you see? You can also rent your very own house anytime and anywhere it's just a tap away by using Bookingly. You can post the image of your house and upload it for others to see.</p>
                    <?php
                    if (empty($_SESSION['EMAIL'])) {
                        echo '<input type="button" value="Host Now!" class="btn btn-warning" name="submit_renting" data-bs-toggle="modal" data-bs-target="#modal1">';
                    } else {
                        echo '<a href="step1.title.php" ><button type="button" class="btn btn-warning">Host Now!</button></a>';
                    }


                    ?>

                    <hr class="my-5" />
                    <p>A better way to stay!
                        Earn extra income by renting out your spare room to professionals, international students and tourists looking for a one day, weekly or even a monthly stay.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 righties">
            <div class="img">
                <img src="img/modern.JPG" alt="">
            </div>
        </div>
    </div>








    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>