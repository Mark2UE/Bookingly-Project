<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/step.amenities.css">
    <link rel="stylesheet" href="css1.2/style.css">

    <title>Amenities</title>

</head>


<body>
    <div class="row">
        <div class="col-lg-6 LEFT">
            <div class="container">
                <div class="section-header">
                    <div class="image">
                        <img src="img/BOOKINGLY.png" alt="">
                    </div>
                </div>
                <div class="section-body1">
                    <div class="text-centerdef">
                        Let guests know what your place has to offer
                    </div>
                </div>
                <div class="section-footer">

                </div>


            </div>

        </div>
        <div class="col-lg-6 RIGHT">

            <div class="container px-5">
                <div class="section-header">

                </div>
                <form action="validation-hosting.php" method="post" enctype="multipart/form-data">
                    <div class="section-body3">
                        <div class="overflow-scroll" style="height: 70vh; width: auto; padding: 20px">


                            <div class="row">
                                <CEnter>
                                    <h1 class="text-white">Do you have any standout amenities?</h1>
                                </CEnter>

                                <div class="col-lg-12">
                                    <ul class="ks-cboxtags">

                                        <li>
                                            <input type="checkbox" name="outdoordining" id="OutdoorDining" value="Outdoor Dining">
                                            <label for="OutdoorDining">Outdoor dining area</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="pool" id="Pool" value="Pool">
                                            <label for="Pool">
                                                Pool
                                            </label>

                                        </li>
                                        <li>
                                            <input type="checkbox" name="hottub" id="HotTub" value="HotTub">
                                            <label for="HotTub">Hot tub</label>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="row">
                                <CEnter>
                                    <h1 class="text-white">What about these guest favorites?</h1>
                                </CEnter>
                                <div class="col-lg-6">
                                    <ul class="ks-cboxtags">
                                        <li>
                                            <input type="checkbox" name="wifi" id="Wifi" value="Wifi">
                                            <label for="Wifi">Wifi</label>

                                        </li>
                                        <li>
                                            <input type="checkbox" name="tv" id="TV" value="TV">
                                            <label for="TV">TV </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="kitchen" id="Kitchen" value="Kitchen">
                                            <label for="Kitchen">Kitchen</label>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-lg-6">

                                    <ul class="ks-cboxtags">

                                        <li>
                                            <input type="checkbox" name="freeparking" id="FreeParking" value="Free Parking">
                                            <label for="FreeParking">Free Parking </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="paidparking" id="PaidParking" value="Paid Parking">
                                            <label for="PaidParking">Paid Parking</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="airconditioning" id="AirConditioning" value="Air Conditioning">
                                            <label for="AirConditioning">Air Conditioning</label>

                                        </li>
                                    </ul>

                                </div>

                            </div>
                            <div class="row">
                                <CEnter>
                                    <h1 class="text-white">Do you have any of these safety items?</h1>
                                </CEnter>
                                <div class="col-lg-12">

                                    <ul class="ks-cboxtags">
                                        <li>
                                            <input type="checkbox" name="smokealarm" id="SmokeAlarm" value="SmokeAlarm">
                                            <label for="SmokeAlarm">Smoke Alarm</label>

                                        </li>
                                        <li>
                                            <input type="checkbox" name="firstaid" id="FirstAid" value="FirstAid">
                                            <label for="FirstAid">First Aid kit </label>
                                        </li>

                                        <li>
                                            <input type="checkbox" name="fireextinguisher" id="FireExtinguisher" value="FireExtinguisher">
                                            <label for="FireExtinguisher">Fire extinguisher</label>

                                        </li>
                                    </ul>

                                </div>


                            </div>



                        </div>
                    </div>

            </div>

            <div class="section-footer">
                <center>


                    <div class="button-tab my-3">
                        <button type="submit" class="btn btn-warning btn-custom" name="submit_amenities">NEXT</button>
                    </div>
                </center>
            </div>
            </form>

        </div>

    </div>
    </div>


</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>




<?php include 'includes/scripts/animation.php' ?>

</html>