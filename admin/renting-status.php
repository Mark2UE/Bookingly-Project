<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Hosting Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/renting.css">
</head>

<body>


    <?php
    session_start();
    include "dbadmin/database.php";
    $HOSTCODE = $_GET['HOSTCODE'];
    $email = $_GET['EMAIL'];
    $RENTER_CODE = $_GET['RENTER_CODE'];

    $sqlresult = mysqli_query($conn, "select * from room WHERE host_id = '$HOSTCODE' "); //host_info
    $row = mysqli_fetch_array($sqlresult);

    $sqlresult1 = mysqli_query($conn, "select * from user WHERE email = '$email'"); //user 
    $fetch = mysqli_fetch_array($sqlresult1);

    $sqlresult2 = mysqli_query($conn, "select * from rent WHERE renting_code = '$RENTER_CODE'; "); //renting info
    $row1 = mysqli_fetch_array($sqlresult2);

    $date3 = date_create($row1[5]);
    $date1 = date_create($row1[6]);  //curren //pag sumobra count as penalty CURRENT
    $diff2 = date_diff($date3, $date1);
    $penalty2 =  $diff2->format("%R%a");
    ?>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php include 'admin-header.php'; ?>
        <?php include 'side-bar.php'; ?>
        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Renters Info</h4>
                    </div>
                </div>
            </div>
            <div class="container container1 d-lg-flex">
                <div class="box-1 bg-light user">
                    <div class="d-flex align-items-center mb-3">

                        <p class="ps-1 name">Renter Email:
                            <?php echo $row1[1] ?></p>
                    </div>
                    <div class="box-inner-1 pb-3 mb-3 ">
                        <div class="d-flex justify-content-between mb-3 userdetails">
                            <p class="fw-bold">Request Status:</p>
                            <p class="fw-lighter"><?php echo $row1[4] ?></p>
                        </div>
                        <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php
                                    echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"/>';

                                    ?>
                                </div>
                                <div class="carousel-item">
                                    <?php
                                    echo '<img  class="d-block w-100 h-100" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"/>';

                                    ?>
                                </div>
                                <div class="carousel-item">
                                    <?php
                                    echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"/>';

                                    ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                                <div class="icon">
                                    <span class="fas fa-arrow-left"></span>
                                </div>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                                <div class="icon">
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <p class="dis info my-3">
                            <?php echo  $row[3] ?> of a <?php echo   $row[2] ?> in <?php echo  $row[8] ?>
                            <hr>
                            Hosted by: <?php echo  $fetch[2] ?> <?php echo  $fetch[3] ?>
                        </p>
                        <hr>
                        <p class="px-1"><?php echo  $row[8] ?> | <?php echo  $row[9] ?> | <?php echo  $row[10] ?> | <?php echo  $row[11] ?> | <?php echo  $row[12] ?></p>





                        <div class="radiobtn">

                            <label for="one" class="box py-2 first">
                                <div class="d-flex align-items-start">
                                    <span class="circle"></span>
                                    <div class="course">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold">
                                                Guest
                                            </span>
                                            <h3><?php echo $row[4] ?></h3>
                                        </div>
                                        <span>Maximum Capacity of Guest</span>
                                    </div>
                                </div>
                            </label>
                            <label for="two" class="box py-2 second">
                                <div class="d-flex">
                                    <span class="circle"></span>
                                    <div class="course">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold">
                                                Beds
                                            </span>
                                            <h3><?php echo $row[5] ?></h3>
                                        </div>
                                        <span>Number of Beds inside</span>
                                    </div>
                                </div>
                            </label>
                            <label for="three" class="box py-2 third">
                                <div class="d-flex">
                                    <span class="circle"></span>
                                    <div class="course">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold">
                                                Bedrooms
                                            </span>
                                            <h3><?php echo $row[6] ?></h3>
                                        </div>
                                        <span>Number of Bedrooms</span>
                                    </div>
                                </div>
                            </label>
                            <label for="Four" class="box py-2 third">
                                <div class="d-flex">
                                    <span class="circle"></span>
                                    <div class="course">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold">
                                                Bathrooms
                                            </span>
                                            <h3><?php echo $row[7] ?></h3>
                                        </div>
                                        <span>Number of Bathrooms</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="box-2">
                    <div class="box-inner-2">

                        <h5>STAND OUT AMENITIES:</h5>
                        <ul class="list-group text-center p-2">
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
                        <ul class="list-group text-center  p-2">
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
                        <div>



                            <div class="address">
                                <p class="dis fw-bold mb-3">Billing Information</p>

                                <div class="d-flex">

                                    <input class="form-control zip" type="text" placeholder="Checkin" value="Check in:  <?php echo date('m-d-Y', strtotime($row1[5])); ?>" readonly>

                                    <input class=" form-control state" type="text" placeholder="Checkout" value="Check Out:  <?php echo date('m-d-Y', strtotime($row1[6])); ?>" readonly>
                                </div>
                                <div class=" my-3">
                                    <p class="dis fw-bold mb-2">Host code: <?php echo $row1[0] ?></p>
                                </div>
                                <div class="d-flex flex-column dis">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>Night/s:</p>
                                        <p><?php echo  $penalty2 ?></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>Cleaning Fee</p>
                                        <p>3%</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>Service Fee</p>
                                        <p>7%</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Per Night:</p>
                                        <p class="fw-bold">₱<?php echo $row[27] ?></span></p>
                                    </div>
                                    <div class="btn btn-primary mt-2">Overall Total:₱<?php echo $row1[3] ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>












            <footer class="footer text-center">Bookingly
            </footer>


            <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="js/app-style-switcher.js"></script>
            <script src="js/waves.js"></script>
            <script src="js/sidebarmenu.js"></script>
            <script src="js/custom.js"></script>
</body>

</html>