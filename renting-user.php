<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/user-account.css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/user-account.css">
    <link rel="stylesheet" type="text/css" href="css/renting-user.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



    <title>Rent a House</title>

</head>


<body>
    <?php include 'includes/navigationBar.php'; ?>
    <?php
    include "database/database.php";
    $HOSTCODE = $_GET['HOSTCODE'];

    $sqlresult = mysqli_query($conn, "select * from room WHERE host_id = '$HOSTCODE' ");
    $row = mysqli_fetch_array($sqlresult);

    $sqlresult1 = mysqli_query($conn, "select * from user WHERE email = '$row[1]'");
    $fetch = mysqli_fetch_array($sqlresult1);


    ?>
    <div class="container body-all card p-5 my-5">
        <section>


            <div class="row featurette">
                <div class="col-md-7 order-md-2 py-1 px-3">

                    <h2 class="featurette-heading fw-big">
                        <?php echo $row[25] ?> | <?php echo $row[2] ?></h2>
                    <hr>
                    <p class="lead"><?php echo $row[26] ?></p>
                    <hr>
                    <div class="d-flex justify-content-center text-center p-5 bg-warning" style="border-radius: 20px;">

                        <div class="px-3">
                            <p class="mb-1 h1"><?php echo $row[4] ?></p>
                            <p class="small mb-0">Guest</p>
                        </div>
                        <div class="px-3">
                            <p class="mb-1 h1"><?php echo $row[6] ?></p>
                            <p class="small  mb-0">Bedrooms</p>
                        </div>
                        <div class="px-3">
                            <p class="mb-1 h1"><?php echo $row[7] ?></p>
                            <p class="small mb-0">Bathrooms&nbsp; </p>
                        </div>
                        <div class="px-3">
                            <p class="mb-1 h1"><?php echo $row[5] ?></p>
                            <p class="small  mb-0">Beds</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-md-1">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php
                                echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"/>';

                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php
                                echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"/>';

                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php
                                echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"/>';

                                ?>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
            </div>

        </section>
        <hr>
        <section>
            <form action="renting-billing.php?HOSTCODE=<?php echo $HOSTCODE ?>" method="post">
                <div class="row">
                    <div class="col-lg-6 p-3">
                        <h3>
                            <?php echo  $row[3] ?> of a <?php echo   $row[2] ?> in <?php echo  $row[8] ?>
                        </h3>
                        <p class="lead"><?php echo  $row[8] ?> | <?php echo  $row[9] ?> | <?php echo  $row[10] ?> | <?php echo  $row[11] ?> | <?php echo  $row[12] ?> </p>
                        <p class="lead">Hosted by: <?php echo  $fetch[2] ?> <?php echo  $fetch[3] ?></p>
                        <hr>
                        <h3>What this place offers</h3>

                        <div class="container my-5">
                            <h5>STAND OUT AMENITIES:</h5>
                            <ul class="list-group text-center" style="border-radius: 20px;">

                                <?php

                                if (!empty($row[13])) {
                                    echo ' <li class="list-group-item">POOL</li>';
                                }
                                if (!empty($row[14])) {
                                    echo ' <li class="list-group-item">HOT TUB</li>';
                                }
                                if (!empty($row[15])) {
                                    echo ' <li class="list-group-item">OUTDOOR DINING</li>';
                                }
                                if (!empty($row[16])) {
                                    echo ' <li class="list-group-item">WIFI</li>';
                                }
                                if (!empty($row[17])) {
                                    echo ' <li class="list-group-item">TV</li>';
                                }
                                if (!empty($row[18])) {
                                    echo ' <li class="list-group-item">KITCHEN</li>';
                                }
                                if (!empty($row[19])) {
                                    echo ' <li class="list-group-item">FREE PARKING</li>';
                                }
                                if (!empty($row[20])) {
                                    echo ' <li class="list-group-item">PAID PARKING</li>';
                                }
                                if (!empty($row[21])) {
                                    echo ' <li class="list-group-item">AIRCON</li>';
                                }


                                ?>




                            </ul>


                        </div>


                        <div class="container my-5">
                            <h5>SAFETY ITEMS</h5>
                            <ul class="list-group text-center" style="border-radius: 20px;">


                                <?php

                                if (!empty($row[22])) {
                                    echo ' <li class="list-group-item">FIRST AID</li>';
                                }
                                if (!empty($row[23])) {
                                    echo ' <li class="list-group-item">FIRE EXTINGUISHER</li>';
                                }
                                if (!empty($row[24])) {
                                    echo ' <li class="list-group-item">SMOKE ALARM</li>';
                                }



                                ?>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="card p-5" style="border-radius: 20px;">
                            <div class="money bg-warning p-5" style="border-radius: 20px;">
                                <h1 class="featurett">₱<?php echo $row[27] ?></h1>Per night

                            </div>
                            <hr>
                            <div class="bg-danger container p-5" style="border-radius: 20px;">
                                <div class="text-white">
                                    <center> Check in | Check out</center>
                                </div>
                                <div class="input-daterange input-group " id="datepicker">
                                    <input type="text" class="form-control text-center" name="daterange" id="txtDate" value="<?php echo date("m/d/Y") ?>- <?php echo date("m/d/Y") ?>" required>
                                </div>
                            </div>
                            <hr>
                            <?php
                            if (empty($_SESSION['EMAIL'])) {
                                echo '<input type="button" value="submit" class="btn btn-warning" name="submit_renting" data-bs-toggle="modal" data-bs-target="#modal1">';
                            } else {
                                echo '<input type="submit" class="btn btn-warning" name="submit_renting">';
                            }


                            ?>
                        </div>
                        <hr>

                    </div>
            </form>
        </section>





    </div>

    <script>
        $(function() {

            $('input[name="daterange"]').daterangepicker({
                opens: 'left'


            }, function(start, end, label) {

            });
        });
    </script>
    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>


</html>