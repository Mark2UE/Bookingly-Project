<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/user-account.css">
    <script src="https://kit.fontawesome.com/f2b95a2266.js" crossorigin="anonymous"></script>
    <title>Rent Listing</title>

</head>

<?php
function display()
{
    include "database/database.php";
    $email = $_SESSION['EMAIL'];
    $sqlresult2 = mysqli_query($conn, "select * from rent WHERE renter_email = '$email' and status = 'DECLINE';");
    while ($fetch = mysqli_fetch_array($sqlresult2)) {
        $sqlresult = mysqli_query($conn, "select * from room WHERE room.host_id = '$fetch[0]' ");
        while ($row = mysqli_fetch_array($sqlresult)) {
            echo '<div class="col-lg-3 col-md-6 mb-4">';
            echo ' <div class="card card-border" style="borer-radius:50px;">';

            echo " <div id='myCarousel$row[0]' class='carousel slide' data-bs-ride='carousel'>
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
                Hosted on: " . $row[32] . " <br>
                Guest: " . $row[4] . " |   Beds: " . $row[5] . " | Bedrooms: " . $row[6] . " |  Baths: " . $row[7] . "
                </p>
                <hr>
            <h5>₱" . $row[27] . "<span class='text-muted'>/Night</span></h5>
        <a href='renting-status.php?HOSTCODE=$fetch[0]' class='btn btn-warning form-control'>Check your rent</a>
        </div>
        ";
            echo '</div>';
            echo '</div>';
        }

        date_default_timezone_set('Hongkong');
        $datenow = date("Y-m-d");

        $date3 = date_create($fetch[7]);
        $date1 = date_create($datenow);
        $diff2 = date_diff($date3, $date1);
        $penalty2 =  $diff2->format("%R%a");

        if ($penalty2 == 2) {
            $sqlresult = mysqli_query($conn, "INSERT INTO `rent_logs`(`renting_code`, `host_code`, `type_of_cancel`, `renter_email`, `hoster_email`,`date`) VALUES ('$fetch[8]','$fetch[0]','$fetch[11]','$fetch[1]','$fetch[2]','$datenow')");
            if (!$sqlresult) {
                printf("Error: %s\n", mysqli_error($conn));
            } else {

                $sqlresult = mysqli_query($conn, "DELETE FROM `rent` WHERE `renting_code` = '$fetch[8]'");
                echo '<script>
                alert("DECLINED REQUEST HAS BEEN STORED TO RENT LOGS"); 
                </script>';
            }
        }
    }
}



?>

<body>
    <?php include 'includes/navigationBar.php'; ?>

    <?php include 'includes/account-navbar-dashboard.php'; ?>


    <div class="container-fluid">

        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <?php include 'includes/user-rent-list-sidebar.php'; ?>
                </div>
            </div>

            <div class="col py-3">
                <div class="m-3 bg-warning p-5">
                    <h2>Reject Rents</h2>
                    <p>Rent logs will be deleted after a day</p>
                </div>
                <div class="place-holder px-5 m-5">

                    <div class="row">

                        <?php echo display() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>