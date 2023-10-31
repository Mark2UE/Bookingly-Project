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


include 'dbadmin/database.php';

$email = $_GET['email'];


$sqlresult = mysqli_query($conn, "select * from user WHERE email = '$email' ");
$row = mysqli_fetch_array($sqlresult);


$sqlresult1 = mysqli_query($conn, "select COUNT(host_code) from `rent` WHERE hosting_email = '$email';");
$fetch = mysqli_fetch_array($sqlresult1);

$sqlresult2 = mysqli_query($conn, "select COUNT(host_id) from `room` WHERE host_email = '$email';");
$fetch1 = mysqli_fetch_array($sqlresult2);

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
                        <h4 class="page-title">User Profiles</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <form action="validation-admin.php" method="post" enctype="multipart/form-data">

                                <div class="d-flex align-items-start p-3">
                                    <div class="pl-sm-4 pl-2" id="img-section">

                                        <div class="form-check form-switch fs-3">
                                            <center>
                                                <input class="form-check-input" name="verified" value="VERIFIED" type="checkbox" id="flexSwitchCheckDefault" <?php if ($row[6] == "VERIFIED") {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } else {
                                                                                                                                                                    echo "unchecked";
                                                                                                                                                                }


                                                                                                                                                                ?>>
                                                <label class="form-check-label fs-5" for="flexSwitchCheckDefault">Gcash Verified?</label>
                                            </center>
                                        </div>
                                    </div>
                                </div>


                                <div class="row py-2 px-5">
                                    <div class="col-md-6">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="First_Name" class="form-control" placeholder="first name" value="<?php echo $row[2] ?>" required>
                                    </div>
                                    <div class="col-md-6 pt-md-0 pt-3">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="Last_Name" class="form-control" value="<?php echo $row[3] ?>" placeholder="surname" required>
                                    </div>
                                </div>
                                <div class="row py-2 px-5">
                                    <div class="col-md-6">
                                        <label for="email">Email Address</label>
                                        <input type="Email" name="Email" class="form-control" placeholder="enter Email Address" value="<?php echo $row[4] ?>" readonly>
                                    </div>
                                    <div class="col-md-6 pt-md-0 pt-3">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="Phone_Number" class="form-control" placeholder="enter Phone Number" value="<?php echo $row[0] ?>" required>
                                    </div>
                                </div>
                                <div class="py-2 px-5">
                                    <label for="phone">Birth date</label>
                                    <input type="date" name="Date" class="form-control" placeholder="enter phone number" value="<?php echo $row[5] ?>" required>
                                    <label for="phone">Password</label>
                                    <input type="Password" name="Password" class="form-control" placeholder="enter Password" value="<?php echo $row[1] ?>" required>
                                </div>

                                <div class="py-3 pb-4 border-bottom px-5">
                                    <button class="btn btn-warning profile-button" name="update_profile" type="submit">Update Account</button>

                                </div>

                            </form>



                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Rents:</h3>
                            <p>Including pendings,cancels and refunds</p>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li class="ms-auto"><span class="counter text-success"><?php echo $fetch[0] ?></span></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"> Hosts:</h3>
                            <p>Accepted and Pending Hosts</p>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <h5 class="ms-auto"><span class="counter text-info"><?php echo $fetch1[0] ?></span>
                                </h5>
                            </ul>
                        </div>
                    </div>
                </div>










            </div>

            <footer class="footer text-center">Bookingly
            </footer>
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