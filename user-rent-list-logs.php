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
    $EMAIL = $_SESSION['EMAIL'];

    $sqlresult = mysqli_query($conn, "select * from rent_logs WHERE renter_email = '$EMAIL'");
    while ($row = mysqli_fetch_array($sqlresult)) {
        $sqlresult1 = mysqli_query($conn, "select * from room WHERE host_id = '$row[1]'");
        while ($fetch = mysqli_fetch_array($sqlresult1)) {
            echo "<tr>";
            echo "<td>$fetch[25]</td>";

            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "</tr>";
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
                    <h2>Rent Logs</h2>

                </div>
                <div class="place-holder px-5 m-5">

                    <div class="row">

                        <table class="table table-dark p-3 ">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Title:</th>
                                    <th class="border-top-0">Reason/s:</th>
                                    <th class="border-top-0">Your Email:</th>
                                    <th class="border-top-0">Hoster Email:</th>
                                    <th class="border-top-0">Date:</th>



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
    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>