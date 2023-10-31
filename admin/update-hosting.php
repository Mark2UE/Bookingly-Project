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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>
<?php session_start(); ?>

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


            <?php

            include "dbadmin/database.php";
            $HOSTCODE = $_GET['HOSTCODE'];
            $EMAIL = $_GET['EMAIL'];
            $sqlresult = mysqli_query($conn, "select * from room WHERE host_email = '$EMAIL' AND host_id = '$HOSTCODE' ");
            $row = mysqli_fetch_array($sqlresult);
            ?>


            <div class="row justify-content-center align-items-center h-100 py-5">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration">
                        <div class="card-body p-4 p-md-5">
                            <form action="validation-admin.php" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <center>
                                        <h3 class="p-5">Hosted by: <?php echo $EMAIL ?></h3>
                                    </center>
                                    <div class="col-lg-6">

                                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Host: <?PHP echo $row[25] ?></h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="hosting_status" id="flexSwitchCheckDefault" <?php
                                                                                                                                                if ($row[34] === "OFFLINE") {

                                                                                                                                                    echo 'unchecked';
                                                                                                                                                    echo 'value = "offline"';
                                                                                                                                                } else {

                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?> />
                                            <label class="form-check-label" for="flexSwitchCheckDefault">SWITCH MODE : OFFLINE AND ONLINE</label>
                                        </div>
                                    </div>


                                </div>


                                <div class="lightbox">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php
                                            echo '<img  class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"/>';
                                            echo '<img  class="w-100 shadow-1-strong rounded" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"/>';
                                            ?>
                                        </div>
                                        <div class="col-lg-6">

                                            <?php
                                            echo '<img  class="h-100 w-100 shadow-1-strong rounded" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"/>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-top: 50px;">

                                <div class="row">
                                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Title and Description</h5>
                                    <div class="col-md-6 mb-4">

                                        <i class="mb-4 pb-2 pb-md-0 mb-md-5">Host Code</i>
                                        <div class="form-floating mb-3">

                                            <input type="text" id="form3Example1m" readonly="readonly" name="HOSTCODE" value="<?php echo "$row[0]" ?> " class=" form-control form-control-lg" aria-hidden="true" />
                                            <label for="floatingInput">Host Code</label>



                                        </div>


                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <i class="mb-4 pb-2 pb-md-0 mb-md-5">Title Here</i>
                                        <div class="form-floating mb-3">

                                            <input type="text" class="form-control" id="floatingInput" placeholder="TITLE" name="TITLE" value="<?PHP echo $row[25] ?>">
                                            <label for="floatingInput">Your Host Title</label>


                                        </div>


                                    </div>
                                    <i>Description Here</i>
                                    <div class="col-md-12">

                                        <div class="form-floating">
                                            <textarea rows="3" class="form-control" autocomplete="off" id="title.title" value="<?PHP echo $row[26] ?>" spellcheck="false" style="height: 177px; width:100%;" maxlength="500" name="Description"><?PHP echo $row[26] ?></textarea>

                                            <label for="floatingInput">Your Host Description</label>

                                        </div>

                                    </div>
                                </div>
                                <hr style="margin-top: 50px;">
                                <div class="row">
                                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Type of place</h5>
                                    <div class="col-md-6">
                                        <i>Host type of place here</i>
                                        <div class="form-floating">
                                            <select class="form-select" name="home_type">
                                                <option selected="selected" value="<?php echo $row[2] ?>">SELECTED: <?php echo $row[2] ?></option>

                                                <option value="rental unit">rental unit</option>
                                                <option value="condo">condo</option>
                                                <option value="Loft">Loft</option>
                                                <option value="serviced apartment">serviced apartment</option>
                                                <option value="casa particular">casa particular</option>
                                                <option value="vacation home">vacation home</option>

                                                <option value="bed and breakfast">bed and breakfast</option>
                                                <option value="Nature lodge">Nature Lodge</option>
                                                <option value="Farm stay">Farm stay</option>
                                                <option value="Minsu">Minsu</option>
                                                <option value="Ryokan">Ryokan</option>

                                                <option value="Hotel">Hotel</option>
                                                <option value="Hostel">Hostel</option>
                                                <option value="Resort">Resort</option>
                                                <option value="Aparhotel">Aparhotel</option>
                                                <option value="Heritage Hotel">Heritage Hotel</option>
                                                <option value="Kezhan">kezhan</option>

                                                <option value="Home">Home</option>
                                                <option value="Cabin">Cabin</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Townhouse">Townhouse</option>
                                                <option value="Cottage">Cottage</option>
                                                <option value="Bungalow">bungalow</option>
                                                <option value="Earthen Home">Earthen home</option>
                                                <option value="Hoseboat">Hoseboat</option>
                                                <option value="Hut">Hut</option>

                                                <option value="Guest House">Guest House</option>
                                                <option value="Guest suite">Guest suite</option>
                                                <option value="Farm Stay">Farm Stay</option>
                                                <option value="Vacation home">Vacation home</option>





                                            </select>
                                            <label for="floatingInput">Type of Place</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <i>Prvacy type</i>
                                        <div class="form-floating">
                                            <select class="form-select" name="privacy_type">
                                                <option selected="selected" value="<?php echo $row[3] ?>">SELECTED: <?php echo $row[3] ?></option>
                                                <option value="An Entire place">An Entire place</option>
                                                <option value="A Private room">A Private room</option>
                                                <option value="A Shared room">A Shared room</option>

                                            </select>
                                            <label for="floatingInput">Privacy Type</label>
                                        </div>

                                    </div>
                                </div>
                                <hr style="margin-top: 50px;">
                                <div class="row">

                                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Floor Plan</h5>
                                    <div class="col-lg-3 col-sm-12">
                                        <center> <label>Total Guest</label></center>
                                        <div class="d-flex justify-content-center">
                                            <div class="p-1">

                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="guest">
                                                        <span class="minus">-</span>
                                                    </button>
                                                </span>

                                            </div>
                                            <div class="p-1">
                                                <center><input type="text" name="guest" class="form-control input-number" value="<?php echo $row[4] ?>" min="1" max="10"></center>
                                            </div>
                                            <div class="p-1">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="guest">
                                                        <span class="plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-sm-12">
                                        <center> <label>Total Beds</label></center>
                                        <div class="d-flex justify-content-center">
                                            <div class="p-1">

                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="beds">
                                                        <span class="minus">-</span>
                                                    </button>
                                                </span>

                                            </div>
                                            <div class="p-1">
                                                <center><input type="text" name="beds" class="form-control input-number" value="<?php echo $row[5] ?>" min="1" max="10"></center>
                                            </div>
                                            <div class="p-1">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="beds">
                                                        <span class="plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-12">
                                        <center> <label>Total Bedrooms</label></center>
                                        <div class="d-flex justify-content-center">
                                            <div class="p-1">

                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="bedrooms">
                                                        <span class="minus">-</span>
                                                    </button>
                                                </span>

                                            </div>
                                            <div class="p-1">
                                                <center><input type="text" name="bedrooms" class="form-control input-number" value="  <?php echo $row[6] ?>" min="1" max="10"></center>
                                            </div>
                                            <div class="p-1">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="bedrooms">
                                                        <span class="plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-12">
                                        <center> <label>Total bathrooms</label></center>
                                        <div class="d-flex justify-content-center">
                                            <div class="p-1">

                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="bathrooms">
                                                        <span class="minus">-</span>
                                                    </button>
                                                </span>

                                            </div>
                                            <div class="p-1">
                                                <center><input type="text" name="bathrooms" class="form-control input-number" value="<?php echo $row[7] ?>" min="1" max="10"></center>
                                            </div>
                                            <div class="p-1">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="bathrooms">
                                                        <span class="plus">+</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr style="margin-top: 50px;">
                                <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Amenities</h5>
                                <div class="row">
                                    <div class="row">
                                        <CEnter>
                                            <h5>Do you want to update any standout amenities?</h5>
                                        </CEnter>

                                        <div class="col-lg-12 ">
                                            <ul class="ks-cboxtags">

                                                <li>
                                                    <input <?php
                                                            if ($row[15] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            }
                                                            ?> class="checkbox custom-checkbox" type="checkbox" name="outdoordining" id="OutdoorDining" value="Outdoor Dining">
                                                    <label for="OutdoorDining">Outdoor dining area</label>
                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[13] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="pool" id="Pool" value="Pool">
                                                    <label for="Pool">
                                                        Pool
                                                    </label>

                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[14] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="hottub" id="HotTub" value="HotTub">
                                                    <label for="HotTub">Hot tub</label>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <CEnter>
                                            <h5>Do you want to update any Guest Favorites?</h5>
                                        </CEnter>
                                        <div class="col-lg-6">
                                            <ul class="ks-cboxtags">
                                                <li>
                                                    <input <?php
                                                            if ($row[16] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="wifi" id="Wifi" value="Wifi">
                                                    <label for="Wifi">Wifi</label>

                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[17] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="tv" id="TV" value="TV">
                                                    <label for="TV">TV </label>
                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[18] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="kitchen" id="Kitchen" value="Kitchen">
                                                    <label for="Kitchen">Kitchen</label>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-6">

                                            <ul class="ks-cboxtags">

                                                <li>
                                                    <input <?php
                                                            if ($row[19] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="freeparking" id="FreeParking" value="Free Parking">
                                                    <label for="FreeParking">Free Parking </label>
                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[20] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="paidparking" id="PaidParking" value="Paid Parking">
                                                    <label for="PaidParking">Paid Parking</label>
                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[21] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="airconditioning" id="AirConditioning" value="Air Conditioning">
                                                    <label for="AirConditioning">Air Conditioning</label>

                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <CEnter>
                                            <h5>Do you want to update any Safety items in your house?</h5>
                                        </CEnter>
                                        <div class="col-lg-12">

                                            <ul class="ks-cboxtags">
                                                <li>
                                                    <input <?php
                                                            if ($row[22] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="smokealarm" id="SmokeAlarm" value="SmokeAlarm">
                                                    <label for="SmokeAlarm">Smoke Alarm</label>

                                                </li>
                                                <li>
                                                    <input <?php
                                                            if ($row[23] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="firstaid" id="FirstAid" value="FirstAid">
                                                    <label for="FirstAid">First Aid kit </label>
                                                </li>

                                                <li>
                                                    <input <?php
                                                            if ($row[24] == "") {
                                                                echo "unchecked";
                                                            } else {
                                                                echo "checked";
                                                            } ?> type="checkbox" name="fireextinguisher" id="FireExtinguisher" value="FireExtinguisher">
                                                    <label for="FireExtinguisher">Fire extinguisher</label>

                                                </li>
                                            </ul>

                                        </div>


                                    </div>
                                </div>
                                <hr style="margin-top: 50px;">
                                <div class="row">
                                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Address</h5>
                                    <div class="col-md-12">
                                        <center>
                                            <h5>Update your address</h5>
                                        </center>
                                        <br>
                                        <div class="container">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" value="<?php echo $row[8] ?>" placeholder="username" name="Street">
                                                <label for="floatingInput">Street</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" value="<?php echo $row[9] ?>" placeholder="username" name="Apt">
                                                <label for="floatingInput">Apt,suite,etc(Optional)</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" value="<?php echo $row[10] ?>" placeholder="username" name="City">
                                                <label for="floatingInput">City</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" value="<?php echo $row[11] ?>" placeholder="username" name="State">
                                                <label for="floatingInput">State (Optional)</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" value="<?php echo $row[12] ?>" placeholder="username" name="Zipcode">
                                                <label for="floatingInput">Zip code (Optional)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 50px;">
                                <div class="row">
                                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Pricing</h5>
                                    <div class="col-lg-12">
                                        <center>
                                            <h5>Update your Pricing</h5>
                                        </center>
                                        <br>
                                        <div class="container-fluid">
                                            <div class="justify-content-between input-group1">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2">
                                                        <span class="input-group-prepend">
                                                            <button type="button" class="btn btn-number1" disabled="disabled" data-type="minus1" data-field="price1">
                                                                <span class="minus1">-</span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="p-2">
                                                        <center><input type="text" name="price1" class="text-center form-control input-number1" value="<?php echo $row[27] ?>" min="538" max="5000" readonly></center>
                                                    </div>
                                                    <div class="p-2">
                                                        <span class="input-group-append">
                                                            <button type="button" class="btn btn-number1" data-type="plus1" data-field="price1">
                                                                <span class="plus1">+</span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-top: 50px;">
                                <div class="row">
                                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Images</h5>
                                    <div class="col-md-12">
                                        <center>
                                            <h5>Update your Images</h5>
                                        </center>
                                        <br>
                                        <div class="overflow-auto" style="height: 70vh; padding: 20px;">
                                            <div class="file-upload">
                                                <div class="file-upload-placeholder">
                                                    <input class="file-upload-input" type='file' name="image1" id="image1" onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <?php echo '<img  class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"/>'; ?>
                                                        <h3>Drag and drop a file or select to update Image 1</h3>
                                                    </div>
                                                </div>

                                                <div class="file-upload-preview">

                                                    <img class="file-upload-image" src="#" alt="your image" />





                                                    <div class="file-upload-remove">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="file-upload">

                                                <div class="file-upload-placeholder1">
                                                    <input class="file-upload-input1" type='file' name="image2" id="image2" onchange="readURL1(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <?php echo '<img  class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"/>'; ?>
                                                        <h3>Drag and drop a file or select to update Image 2</h3>
                                                    </div>
                                                </div>

                                                <div class="file-upload-preview1">
                                                    <img class="file-upload-image1" src="#" alt="your image" />
                                                    <div class="file-upload-remove1">
                                                        <button type="button" onclick="removeUpload1()" class="remove-image1">Remove <span class="image-title1">Uploaded Image</span></button>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="file-upload">

                                                <div class="file-upload-placeholder2">
                                                    <input class="file-upload-input2" type='file' name="image3" id="image3" onchange="readURL2(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <?php echo '<img  class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"/>'; ?>
                                                        <h3>Drag and drop a file or select to update Image 3</h3>
                                                    </div>
                                                </div>

                                                <div class="file-upload-preview2">
                                                    <img class="file-upload-image2" src="#" alt="your image" />
                                                    <div class="file-upload-remove2">
                                                        <button type="button" onclick="removeUpload2()" class="remove-image1">Remove <span class="image-title2">Uploaded Image</span></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-4 pt-2">
                                    <input type="submit" name="update_hosting" class="btn btn-warning" />
                            </form>
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) { // if input is file, files has content
            var inputFileData = input.files[0]; // shortcut
            var reader = new FileReader(); // FileReader() : init
            reader.onload = function(e) {
                /* FileReader : set up ************** */
                console.log('e', e)
                $('.file-upload-placeholder').hide(); // call for action element : hide
                $('.file-upload-image').attr('src', e.target.result); // image element : set src data.
                $('.file-upload-preview').show(); // image element's container : show
                $('.image-title').html(inputFileData.name); // set image's title
            };
            console.log('input.files[0]', input.files[0])
            reader.readAsDataURL(inputFileData); // reads target inputFileData, launch `.onload` actions
        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        var $clone = $('.file-upload-input').val('').clone(true); // create empty clone
        $('.file-upload-input').replaceWith($clone); // reset input: replaced by empty clone
        $('.file-upload-placeholder').show(); // show placeholder
        $('.file-upload-preview').hide(); // hide preview
    }

    // Style when drag-over
    $('.file-upload-placeholder').bind('dragover', function() {
        $('.file-upload-placeholder').addClass('image-dropping');
    });
    $('.file-upload-placeholder').bind('dragleave', function() {
        $('.file-upload-placeholder').removeClass('image-dropping');
    });
</script>



<script>
    function readURL1(input) {
        if (input.files && input.files[0]) { // if input is file, files has content
            var inputFileData = input.files[0]; // shortcut
            var reader = new FileReader(); // FileReader() : init
            reader.onload = function(e) {
                /* FileReader : set up ************** */
                console.log('e', e)
                $('.file-upload-placeholder1').hide(); // call for action element : hide
                $('.file-upload-image1').attr('src', e.target.result); // image element : set src data.
                $('.file-upload-preview1').show(); // image element's container : show
                $('.image-title1').html(inputFileData.name); // set image's title
            };
            console.log('input.files[0]', input.files[0])
            reader.readAsDataURL(inputFileData); // reads target inputFileData, launch `.onload` actions
        } else {
            removeUpload1();
        }
    }

    function removeUpload1() {
        var $clone = $('.file-upload-input1').val('').clone(true); // create empty clone
        $('.file-upload-input1').replaceWith($clone); // reset input: replaced by empty clone
        $('.file-upload-placeholder1').show(); // show placeholder
        $('.file-upload-preview1').hide(); // hide preview
    }

    // Style when drag-over
    $('.file-upload-placeholder1').bind('dragover', function() {
        $('.file-upload-placeholder1').addClass('image-dropping');
    });
    $('.file-upload-placeholder1').bind('dragleave', function() {
        $('.file-upload-placeholder1').removeClass('image-dropping');
    });
</script>



<script>
    function readURL2(input) {
        if (input.files && input.files[0]) { // if input is file, files has content
            var inputFileData = input.files[0]; // shortcut
            var reader = new FileReader(); // FileReader() : init
            reader.onload = function(e) {
                /* FileReader : set up ************** */
                console.log('e', e)
                $('.file-upload-placeholder2').hide(); // call for action element : hide
                $('.file-upload-image2').attr('src', e.target.result); // image element : set src data.
                $('.file-upload-preview2').show(); // image element's container : show
                $('.image-title2').html(inputFileData.name); // set image's title
            };
            console.log('input.files[0]', input.files[0])
            reader.readAsDataURL(inputFileData); // reads target inputFileData, launch `.onload` actions
        } else {
            removeUpload1();
        }
    }

    function removeUpload2() {
        var $clone = $('.file-upload-input2').val('').clone(true); // create empty clone
        $('.file-upload-input2').replaceWith($clone); // reset input: replaced by empty clone
        $('.file-upload-placeholder2').show(); // show placeholder
        $('.file-upload-preview2').hide(); // hide preview
    }

    // Style when drag-over
    $('.file-upload-placeholder2').bind('dragover', function() {
        $('.file-upload-placeholder2').addClass('image-dropping');
    });
    $('.file-upload-placeholder2').bind('dragleave', function() {
        $('.file-upload-placeholder2').removeClass('image-dropping');
    });
</script>
<script>
    $('.btn-number').click(function(e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function() {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    $(".input-number").keydown(function(e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>


<script LANGUAGE="JavaScript">
    function confirmSubmit() {
        var agree = confirm("Updating host: <?php echo $row[25] ?>");
        if (agree)
            return true;
        else
            return false;
    }
</script>

<script>
    $('.btn-number1').click(function(e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus1') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 100).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus1') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 100).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number1').focusin(function() {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number1').change(function() {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number1[data-type='minus1'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number1[data-type='plus1'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    $(".input-number1").keydown(function(e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>

</html>