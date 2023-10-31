<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.summary.css">

    <title>Summary</title>

</head>
<?php
include 'database/database.php';
session_start();
$hostid = $_SESSION['host_id'];
$email = $_SESSION['EMAIL'];
$sqlresult = mysqli_query($conn, "SELECT * from `room` WHERE `host_id` = '$hostid'");
$row = mysqli_fetch_array($sqlresult);



?>

<body>
    <div class="row">
        <div class="col-lg-6 LEFT">
            <div class="container">
                <div class="section-header">
                    <div class="image">
                        <img src="img/BOOKINGLY.png" alt="">
                    </div>
                </div>
                <div class="section-body1">
                    <div class="text-center">
                        <h1 class="h5-custom"> Check out your listing!</h1>
                        <h5>This listing will be visible to guests 24 hours after you publish. You can add more info or make changes anytime.</h5>
                    </div>

                </div>
                <div class="section-footer">

                </div>


            </div>

        </div>
        <div class="col-lg-6 RIGHT">

            <div class="container">
                <div class="section-header">

                </div>
                <form action="validation.php" method="post">
                    <div class="section-body2">
                        <div class="card">


                            <div class="p-2">
                                <center>
                                    <h1><?php echo $row[25]  ?></h1>
                                </center>
                            </div>


                            <div class="p-4 text-black" style="background-color: #f8f9fa;">

                                <div class="d-flex justify-content-center text-center py-1">
                                    <div class="px-3">
                                        <p class="mb-1 h1"><?php echo $row[4] ?></p>
                                        <p class="small text-muted mb-0">Guest</p>
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-1 h1"><?php echo $row[6] ?></p>
                                        <p class="small text-muted mb-0">Bedrooms</p>
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-1 h1"><?php echo $row[7] ?></p>
                                        <p class="small text-muted mb-0">Bathrooms&nbsp; </p>
                                    </div>
                                    <div class="px-3">
                                        <p class="mb-1 h1"><?php echo $row[5] ?></p>
                                        <p class="small text-muted mb-0">Beds</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-4 text-black">
                                <div class="mb-5">


                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p class="lead fw-normal mb-1">About</p>
                                        <p>Host By:<?php echo  $row[1]  ?></p>
                                        <p class="font-italic mb-1"><?php echo  $row[3] ?> of a <?php echo   $row[2] ?> in <?php echo  $row[8] ?> </p>
                                        <p class="font-italic mb-1"><?php echo  $row[26] ?></p>
                                        <center>
                                            <p class="font-italic mb-1">Address:</p>
                                            <p class="font-italic mb-0"><?php echo  $row[8] ?> | <?php echo  $row[9] ?> | <?php echo  $row[10] ?> | <?php echo  $row[11] ?> | <?php echo  $row[12] ?> </p>
                                        </center>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0">Photos</p>

                                </div>
                                <div class="row py-1">
                                    <div class="col-sm-4">
                                        <?php
                                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row[28]) . '"height="250px"width="250px"/>';
                                        ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php
                                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row[29]) . '"height="250px"width="250px"/>';
                                        ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php
                                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row[30]) . '"height="250px"width="250px"/>';
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="section-footer">

                        <center>

                            <div class="button-tab my-3">
                                <button type="submit" class="btn btn-warning btn-custom" name="submit_final_hosting">NEXT</button>
                            </div>
                        </center>
                    </div>
                </form>

            </div>

        </div>
    </div>



</body>
<?php include 'includes/scripts/animation.php' ?>

</html>