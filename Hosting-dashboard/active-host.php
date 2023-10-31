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


function display()
{
    $EMAIL = $_SESSION['EMAIL'];
    include "dbadmin/database.php";
    $sqlresult = mysqli_query($conn, "select * from rent WHERE hosting_email = '$EMAIL'");
    while ($row = mysqli_fetch_array($sqlresult)) {
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>₱$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[6]</td>";
        $date3 = date_create($row[5]);
        $date1 = date_create($row[6]);  //curren //pag sumobra count as penalty CURRENT
        $diff2 = date_diff($date3, $date1);
        $penalty2 =  $diff2->format("%R%a");
        echo "<td>$penalty2</td>";
        echo "<td>$row[6]</td>";
        echo "<td>$row[9]</td>";
        if ($row[10] === "") {


            if ($row[9] === "") {
                echo "<td><a class='btn btn-danger text-light form-control'>NOT PAID</a></td>";
                date_default_timezone_set('Hongkong');
                $datenow = date("Y-m-d");

                $date3 = date_create($row[7]);
                $date1 = date_create($datenow);
                $diff2 = date_diff($date3, $date1);
                $penalty2 =  $diff2->format("%R%a");

                if ($penalty2 == 1) {
                    $sqlresult = mysqli_query($conn, "INSERT INTO `rent_logs`(`renting_code`, `host_code`, `type_of_cancel`, `renter_email`, `hoster_email`,`date`) VALUES ('$row[8]','$row[0]','VOID','$row[1]','$row[2]','$datenow')");
                    if (!$sqlresult) {
                        printf("Error: %s\n", mysqli_error($conn));
                    } else {

                        $sqlresult = mysqli_query($conn, "DELETE FROM `rent` WHERE `renting_code` = '$row[8]'");
                        echo '<script>
                        alert("VOID HAS BEEN STORED TO RENT LOGS"); 
                        </script>';
                    }
                }
            }
        } else {


            if ($row[9] === "PAID-GCASH") {
                echo "<td><a href='payment-status.php?HOSTCODE=$row[0]&RENTER_CODE=$row[8] ' class='btn btn-primary form-control'>Gcash Payment</a></td>";
            } elseif ($row[9] === "PENDING") {
                echo "<td><a href='payment-status.php?HOSTCODE=$row[0]&RENTER_CODE=$row[8] ' class='btn btn-primary form-control'>Gcash Payment</a></td>";
            } elseif ($row[4] === "REFUND") {
                echo "<td><a class='btn btn-danger text-light form-control'>REFUND</a></td>";
                date_default_timezone_set('Hongkong');
                $datenow = date("Y-m-d");

                $date3 = date_create($row[7]);
                $date1 = date_create($datenow);  //curren //pag sumobra count as penalty CURRENT
                $diff2 = date_diff($date3, $date1);
                $penalty2 =  $diff2->format("%R%a");

                if ($penalty2 == 2) {
                    $sqlresult = mysqli_query($conn, "INSERT INTO `rent_logs`(`renting_code`, `host_code`, `type_of_cancel`, `renter_email`, `hoster_email`,`date`) VALUES ('$row[8]','$row[0]','$row[11]','$row[1]','$row[2]','$datenow')");
                    if (!$sqlresult) {
                        printf("Error: %s\n", mysqli_error($conn));
                    } else {

                        $sqlresult = mysqli_query($conn, "DELETE FROM `rent` WHERE `renting_code` = '$row[8]'");
                        echo '<script>
                        alert("REFUND HAS BEEN STORED TO RENT LOGS"); 
                        </script>';
                    }
                }
            }
        }

        echo "<td><a href='renting-status.php?HOSTCODE=$row[0]&RENTER_CODE=$row[8]' class='btn btn-warning form-control'>Rent Info</a></td>";




        echo "</tr>";
    }
}
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
                        <h4 class="page-title">Rents</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Rents:</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Host ID</th>
                                            <th class="border-top-0">Renter Email</th>
                                            <th class="border-top-0">Total Amount</th>
                                            <th class="border-top-0">Rent Status</th>
                                            <th class="border-top-0">Check in</th>
                                            <th class="border-top-0">Check Out</th>
                                            <th class="border-top-0">Days</th>
                                            <th class="border-top-0">Date Accepted</th>
                                            <th class="border-top-0">Payment Status</th>
                                            <th class="border-top-0">Action</th>
                                            <th class="border-top-0">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php echo display() ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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
<script LANGUAGE="JavaScript">
    function confirmSubmit() {
        var agree = confirm("Paying via cash?");
        if (agree) {
            return true;
        } else
            return false;
    }
</script>

</html>