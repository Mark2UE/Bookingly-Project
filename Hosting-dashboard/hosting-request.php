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
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <link href="css/style.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<?php
session_start();
function display()
{

    include "dbadmin/database.php";
    $email = $_SESSION['EMAIL'];


    $sqlresult = mysqli_query($conn, "SELECT * FROM `room`,`rent` WHERE room.host_email = '$email' AND rent.hosting_email = '$email' AND rent.status = 'PENDING' AND room.host_id = rent.host_code");
    while ($row = mysqli_fetch_array($sqlresult)) {

        echo '<div class="col-lg-3 col-md-6 mb-4">';
        echo "<a href='renting-status.php?HOSTCODE=$row[35]&RENTER_CODE=$row[43]'>";

        echo ' <div class="card card-border" style="borer-radius:50px;">';

        echo " <div id='myCarousel$row[0]' class='carousel slide' data-bs-ride='carousel'8u>
                    <div class='carousel-inner'>
                     <div class='carousel-item active'>";

        echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"height="100"width="100"/>';
        echo "
                 </div>
                 <div class='carousel-item'>";
        echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"height="100"width="100"/>';
        echo "
                 </div>
                  <div class='carousel-item'>";
        echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"height="100"width="100"/>';
        echo '</a>';
        echo "
                </div>
                </div>";

        echo   '<button class="carousel-control-prev" type="button"  data-bs-target="#myCarousel' . $row[0] . '" data-bs-slide="prev">';

        echo "
            
                   </button>";
        echo ' <button class="carousel-control-next" type="button" data-bs-target="#myCarousel' . $row[0] . '" data-bs-slide="next"';

        echo "
                </button>
                   </div>
        <div class='card-body'>
            <h5 class='card-title'> " . $row[25] . "</h5>
            <p class='text-muted'>
              Renter: $row[36]
              <br>
              Check in: $row[40]  
              <br>
              Check out : $row[41] 
                </p>
               
                <hr>
            <h5>₱" . $row[38] . "<span class='text-muted'>/Total Overall Amount </span></h5>
            
        <a href='validation-admin.php?HOSTING_CODE=$row[43]' onClick='return confirmSubmit()' class='btn btn-warning form-control'>Accept</a>
        <hr>
        <a href='validation-admin.php?DECLINE_CODE=$row[43]' onClick='return confirmSubmit1()' class='btn btn-danger form-control'>Decline</a>
      
        
        </div>
        ";

        echo '</div>';

        echo '</div>';
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

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Pending Request</h4>
                    </div>

                </div>

            </div>


            <div class="place-holder px-5 m-5">
                <div class="row">
                    <?php echo display() ?>
                </div>
            </div>



            <footer class="footer text-center">Bookingly
            </footer>

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

    <script LANGUAGE="JavaScript">
        function confirmSubmit() {
            var agree = confirm("Accept Rent??");
            if (agree)
                return true;
            else
                return false;
        }
    </script>

    <script LANGUAGE="JavaScript">
        function confirmSubmit1() {
            var agree = confirm("Decline Rent?");
            if (agree)
                return true;
            else
                return false;
        }
    </script>

</body>

</html>