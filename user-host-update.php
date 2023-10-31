<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/user-account.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


    <title>Home</title>

</head>

<body>
    <?php include 'includes/navigationBar.php'; ?>
    <?php include 'includes/account-navbar-dashboard.php'; ?>
    <?php
    include "database/database.php";
    $HOSTCODE = $_GET['HOSTCODE'];
    $EMAIL = $_SESSION['EMAIL'];
    $sqlresult = mysqli_query($conn, "select * from room WHERE host_email = '$EMAIL' AND host_id = '$HOSTCODE' ");
    $row = mysqli_fetch_array($sqlresult);
    ?>


    <div class="row justify-content-center align-items-center h-100 py-5">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration">
                <div class="card-body p-4 p-md-5">
                    <form action="validation.php" enctype="multipart/form-data" method="POST">
                        <div class="row">
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





    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/user-host-update-scripts.php'; ?>
<?php include 'includes/scripts/animation.php' ?>

</html>