<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin - Bookingly</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <link href="css/style.min.css" rel="stylesheet">
</head>
<?php

include "dbadmin/database.php";
function display()
{
    include "dbadmin/database.php";

    $sqlresult = mysqli_query($conn, "select * from `room`");
    while ($row = mysqli_fetch_array($sqlresult)) {
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[25]</td>";
        echo "<td>$row[31]</td>";
        echo "<td>$row[32]</td>";
        echo "<td><a href='update-hosting.php?HOSTCODE=$row[0]&EMAIL=$row[1] ' class='btn btn-warning form-control'>UPDATE</a></td>";
        echo "</tr>";
    }
}


$sqlresult1 = mysqli_query($conn, "select COUNT(host_code) from `rent`;");
$fetch = mysqli_fetch_array($sqlresult1);

$sqlresult2 = mysqli_query($conn, "select COUNT(host_id) from `room` WHERE `status` = 'ACCEPTED';");
$fetch1 = mysqli_fetch_array($sqlresult2);


$sqlresult3 = mysqli_query($conn, "select COUNT(email) from `user`;");
$fetch2 = mysqli_fetch_array($sqlresult3);
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
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Rents</h3>
                            <p>Including refunds and cancel</p>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li class="ms-auto"><span class="counter text-success"><?php echo $fetch[0] ?></span></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Account Registered</h3>
                            <p>Including gcash verified and not verified</p>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li class="ms-auto"><span class="counter text-purple"><?php echo $fetch2[0] ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Host Accepted</h3>
                            <p>Accepted host</p>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li class="ms-auto"><span class="counter text-info"><?php echo $fetch1[0] ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Hosts</h3>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Host ID</th>
                                            <th class="border-top-0">Host Owner Email</th>
                                            <th class="border-top-0">Host Title</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Date Created</th>
                                            <th class="border-top-0">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo display(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">Admin
            </footer>
        </div>
    </div>
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.js"></script>
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>