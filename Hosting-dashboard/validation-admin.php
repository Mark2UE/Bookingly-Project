<?php
include "dbadmin/database.php";
if (isset($_POST['update_hosting'])) {
    $HOSTCODE = $_POST['HOSTCODE'];
    $Price = $_POST['price1'];
    $title = $_POST['TITLE'];
    $Description = $_POST['Description'];

    $guest = $_POST['guest'];
    $beds = $_POST['beds'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];

    $privacytype = $_POST['privacy_type'];

    $hometype = $_POST['home_type'];

    $street = $_POST['Street'];
    $Apt = $_POST['Apt'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Zipcode = $_POST['Zipcode'];




    $hosting_status1 = $_POST['hosting_status'];
    if ($hosting_status1 === "on") {
        $hosting_status = "ONLINE";
    } else {
        $hosting_status = "OFFLINE";
    }



    if (isset($_POST['pool'])) {
        $pool = $_POST['pool'];
    } else {
        $pool = "";
    }

    if (isset($_POST['hottub'])) {
        $hottub = $_POST['hottub'];
    } else {
        $hottub = "";
    }

    if (isset($_POST['outdoordining'])) {
        $outdoordining = $_POST['outdoordining'];
    } else {
        $outdoordining = "";
    }

    if (isset($_POST['wifi'])) {
        $wifi = $_POST['wifi'];
    } else {
        $wifi = "";
    }


    if (isset($_POST['tv'])) {
        $tv = $_POST['tv'];
    } else {
        $tv = "";
    }

    if (isset($_POST['kitchen'])) {
        $kitchen = $_POST['kitchen'];
    } else {
        $kitchen = "";
    }

    if (isset($_POST['freeparking'])) {
        $freeparking = $_POST['freeparking'];
    } else {
        $freeparking = "";
    }

    if (isset($_POST['paidparking'])) {
        $paidparking = $_POST['paidparking'];
    } else {
        $paidparking = "";
    }

    if (isset($_POST['airconditioning'])) {
        $airconditioning = $_POST['airconditioning'];
    } else {
        $airconditioning = "";
    }

    if (isset($_POST['smokealarm'])) {

        $smokealarm = $_POST['smokealarm'];
    } else {
        $smokealarm = "";
    }

    if (isset($_POST['firstaid'])) {
        $firstaid = $_POST['firstaid'];
    } else {
        $firstaid = "";
    }

    if (isset($_POST['fireextinguisher'])) {
        $fireextinguisher = $_POST['fireextinguisher'];
    } else {
        $fireextinguisher = "";
    }

    $sqlresult1 = mysqli_query($conn, "select * from room WHERE host_id = '$HOSTCODE'");
    $row = mysqli_fetch_array($sqlresult1);


    $image1 = $_FILES['image1']['tmp_name'];
    if (!empty($image1)) {

        $img1 = addslashes(file_get_contents($image1));

        $sqlresult = mysqli_query($conn, "UPDATE `room` SET `img1`='$img1' WHERE `host_id` = '$HOSTCODE' ");
        if (!$sqlresult) {
            printf("Error: %s\n", mysqli_error($conn));
        }
    } else {
    }


    $image2 = $_FILES['image2']['tmp_name'];
    if (!empty($image2)) {

        $img2 = addslashes(file_get_contents($image2));

        $sqlresult = mysqli_query($conn, "UPDATE `room` SET `img2`='$img2' WHERE `host_id` = '$HOSTCODE' ");
        if (!$sqlresult) {
            printf("Error: %s\n", mysqli_error($conn));
        }
    } else {
    }
    $image3 = $_FILES['image3']['tmp_name'];
    if (!empty($image3)) {

        $img3 = addslashes(file_get_contents($image3));
        $sqlresult = mysqli_query($conn, "UPDATE `room` SET `img3`='$img3' WHERE `host_id` = '$HOSTCODE' ");
        if (!$sqlresult) {
            printf("Error: %s\n", mysqli_error($conn));
        }
    } else {
    }


    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `home_type`='$hometype',`privacy_type`='$privacytype',`total_guest`='$guest',`total_beds`='$beds',`total_bedrooms`='$bedrooms',`total_bathrooms`='$bathrooms',`street`='$street',`Apt`='$Apt',`City`='$City',`State`='$State',`Zipcode`='$Zipcode',`pool`='$pool',`hottub`='$hottub',`outdoordining`='$outdoordining',`wifi`='$wifi',`tv`='$tv',`kitchen`='$kitchen',`freeparking`='$freeparking',`paidparking`='$paidparking',`aircon`='$airconditioning',`smokealarm`='$smokealarm',`firstaid`='$firstaid',`fireextenguisher`='$fireextinguisher',`title`='$title',`description`='$Description',`price`='$Price' ,`hosting_status` = '$hosting_status' WHERE `host_id` = '$HOSTCODE' ");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        echo '<script>
        alert("Host Updated"); 
        window.location.href = "dashboard.php";
        </script>';
    }
} elseif (isset($_GET['logout'])) {
    echo '<script>
        alert("Host Dashboard Logout!"); 
        window.location.href = "/activities/bookingly/index.php";
        </script>';
} elseif (isset($_GET['HOSTING_CODE'])) {

    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");

    $hosting_code = $_GET['HOSTING_CODE'];

    $sqlresult = mysqli_query($conn, "UPDATE `rent` SET `status`='ACCEPTED',`date_accepted`='$datenow' WHERE `renting_code` = '$hosting_code' ");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        echo '<script>
        alert("The Request is ACCEPTED"); 
        window.location.href = "dashboard.php";
        </script>';
    }
} elseif (isset($_GET['DECLINE_CODE'])) {

    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");

    $DECLINE_CODE = $_GET['DECLINE_CODE'];

    $sqlresult = mysqli_query($conn, "UPDATE `rent` SET `status`='DECLINE',`date_accepted`='$datenow' WHERE `renting_code` = '$DECLINE_CODE' ");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        echo '<script>
        alert("The Request is REJECTED"); 
        window.location.href = "dashboard.php";
        </script>';
    }
} elseif (isset($_GET['DELETECODE']) == true) {


    $deletecode = $_GET['DELETECODE'];


    $sqlresult = mysqli_query($conn, "select * from rent WHERE `host_code` = '$deletecode'; ");
    $row = mysqli_fetch_array($sqlresult);


    if ($row[0] == $deletecode) {
        echo '<script>
        alert("Error delete, RENTING is ACTIVE"); 
        window.location.href = "dashboard.php";
        </script>';
    } else {

        $sqlresult = mysqli_query($conn, "DELETE FROM `room` WHERE `host_id` = '$deletecode' ");
        if (!$sqlresult) {
            printf("Error: %s\n", mysqli_error($conn));
        } else {
            echo '<script>
        alert("Host Deleted"); 
        window.location.href = "dashboard.php";
        </script>';
        }
    }
} elseif (isset($_GET['DECLINE_PAYMENT']) == true) {
    echo  $RENTER_CODE =   $_GET['RENTER_CODE'];

    $sqlresult = mysqli_query($conn, "UPDATE `rent` SET `payment_status`='REJECTED' , `gcash_screenshot`='' WHERE `renting_code` = '$RENTER_CODE' ;");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        echo '<script>
        alert("The Payment is REJECTED"); 
        window.location.href = "active-host.php";
        </script>';
    }
} elseif (isset($_GET['ACCEPT_PAYMENT']) == true) {
    $RENTER_CODE =   $_GET['RENTER_CODE'];


    $sqlresult = mysqli_query($conn, "UPDATE `rent` SET `payment_status`='PAID-GCASH' WHERE `renting_code` = '$RENTER_CODE' ;");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        echo '<script>
        alert("The Payment is PAID via GCASH"); 
        window.location.href = "active-host.php";
        </script>';
    }
}
