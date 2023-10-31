<?php
session_start();
include 'database/database.php';
$hostid = $_SESSION['host_id'];
$email = $_SESSION['EMAIL'];
if (isset($_POST['step1_home']) === true) {

    $hometype = $_POST['home_type'];
    $status = "PENDING";

    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `home_type` = '" . $hometype . "',`host_email` = '" . $email . "',`status` = '" . $status . "'  WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step2.privacy-type.php");
} elseif (isset($_POST['step2_privacy']) === true) {

    $privacytype = $_POST['privacy_type'];

    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `privacy_type` = '" . $privacytype . "' WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step3.address.php");
} elseif (isset($_POST['submit_address']) == true) {

    $street = $_POST['Street'];
    $Apt = $_POST['Apt'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Zipcode = $_POST['Zipcode'];


    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `street` = '" . $street . "',`Apt` = '" . $Apt . "',`City` = '" . $City . "',`State` = '" . $State . "',`Zipcode` = '" . $Zipcode . "' WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step4.floor-plan.php");
} elseif (isset($_POST['submit_floorplan'])) {

    $guest = $_POST['guest'];
    $beds = $_POST['beds'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];

    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `total_guest` = '" . $guest . "',`total_beds` = '" . $beds . "',`total_bedrooms` = '" . $bedrooms . "',`total_bathrooms` = '" . $bathrooms . "' WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step5.amenities.php");
} elseif (isset($_POST['submit_amenities']) == true) {


    $pool = $_POST['pool'];
    $hottub = $_POST['hottub'];
    $outdoordining = $_POST['outdoordining'];
    $wifi = $_POST['wifi'];
    $tv = $_POST['tv'];
    $kitchen = $_POST['kitchen'];
    $freeparking = $_POST['freeparking'];
    $paidparking = $_POST['paidparking'];
    $airconditioning = $_POST['airconditioning'];
    $smokealarm = $_POST['smokealarm'];
    $firstaid = $_POST['firstaid'];
    $fireextinguisher = $_POST['fireextinguisher'];


    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `pool`='" . $pool . "',`hottub`='" . $hottub . "',`outdoordining`='" . $outdoordining . "',`wifi`='" . $wifi . "',`tv`='" . $tv . "',`kitchen`='" . $kitchen . "',`freeparking`='" . $freeparking . "',`paidparking`='" . $paidparking . "',`aircon`='" . $airconditioning . "',`smokealarm`='" . $smokealarm . "',`firstaid`='" . $firstaid . "',`fireextenguisher`='" . $fireextinguisher . "' WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step6.image-upload.php");
} elseif (isset($_POST['submit_image'])) {


    $image1 = $_FILES['image1']['tmp_name'];
    $img1 = addslashes(file_get_contents($image1));

    $image2 = $_FILES['image2']['tmp_name'];
    $img2 = addslashes(file_get_contents($image2));

    $image3 = $_FILES['image3']['tmp_name'];
    $img3 = addslashes(file_get_contents($image3));

    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `img1` = '" . $img1 . "',`img2` = '" . $img2 . "',`img3` = '" . $img3 . "' WHERE `host_id` = '" . $hostid . "' ;");

    header("Location: step7.description.php");
} elseif (isset($_POST['submit_description']) == true) {


    $Description = $_POST['Description'];
    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `description` = '" . $Description . "' WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step8.pricing.php");
} elseif (isset($_POST['submit_pricing']) == true) {


    $Price = $_POST['price'];
    $sqlresult = mysqli_query($conn, "UPDATE `room` SET `price` = '" . $Price . "' WHERE `host_id` = '" . $hostid . "' ;");
    header("Location: step9.summary.php");
}
