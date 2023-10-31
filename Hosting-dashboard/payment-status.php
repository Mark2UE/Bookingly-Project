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
</head>
<?php
session_start();

$EMAIL = $_SESSION['EMAIL'];
$RENTER_CODE = $_GET['RENTER_CODE'];
include "dbadmin/database.php";
$sqlresult = mysqli_query($conn, "select * from rent WHERE hosting_email = '$EMAIL' AND status = 'ACCEPTED' AND  renting_code = '$RENTER_CODE'");
$row = mysqli_fetch_array($sqlresult);


$sqlresult1 = mysqli_query($conn, "select * from user WHERE email = '$row[1]'");
$row1 = mysqli_fetch_array($sqlresult1);


?>

<body>
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
                        <h4 class="page-title">Payments</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="white-box">
                            <h3 class="box-title">Gcash Payment:</h3>
                            <center>
                                <?php
                                echo '<img  class="d-block w-50 h-50" src="data:image/jpeg;base64,' . base64_encode($row['gcash_screenshot']) . '"/>';

                                ?>
                            </center>







                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="white-box">
                            <h3 class="box-title">Gcash Payment:</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Payors Email:</th>
                                        <th scope="col">Amount:</th>
                                        <th scope="col">Payment method:</th>
                                        <th scope="col">Number:</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $row[1] ?></th>
                                        <td>₱<?php echo  $row[3] ?></td>
                                        <td>Gcash</td>
                                        <td><?php echo  $row1[0] ?></td>

                                    </tr>

                                </tbody>
                            </table>

                            <center>
                                <?php
                                if ($row[9] == 'PAID-GCASH') {
                                    echo 'The Renter is paid via GCASH';
                                } else {
                                    echo '<a href="validation-admin.php?DECLINE_PAYMENT&RENTER_CODE=' . $RENTER_CODE . '" type="button" class="btn btn-danger btn-lg btn-block">Decline</a>';
                                    echo '<a href="validation-admin.php?ACCEPT_PAYMENT&RENTER_CODE=' . $RENTER_CODE . '" type="button" class="btn btn-warning btn-lg btn-block">Accept</a>';
                                }


                                ?>


                            </center>

                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">Bookingly
            </footer>
        </div>
    </div>
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>