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

    <link href="css/style.min.css" rel="stylesheet">

</head>
<?php

function display()
{

    include "dbadmin/database.php";

    $sqlresult = mysqli_query($conn, "select * from user");

    while ($row = mysqli_fetch_array($sqlresult)) {
        echo "<tr>";
        echo "<td>$row[4]</td>"; // - ISBN
        echo "<td>$row[0]</td>"; // - TITLE
        echo "<td>$row[6]</td>"; // - AUTHOR

        echo "<td><a href='profile-update.php?email=$row[4]' class='btn btn-warning form-control'>UPDATE</a></td>";
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

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Hosts</h3>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Cellphone Number</th>
                                            <th class="border-top-0">Gcash verified</th>
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
        </div>
    </div>












    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>