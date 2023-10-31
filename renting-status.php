<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/renting-status.css">








    <title>RENTING STATUS</title>

</head>


<body>
    <?php include 'includes/navigationBar.php'; ?>
    <?php
    include "database/database.php";
    $HOSTCODE = $_GET['HOSTCODE'];
    $email = $_SESSION['EMAIL'];

    $sqlresult = mysqli_query($conn, "select * from room WHERE host_id = '$HOSTCODE' "); //host_info
    $row = mysqli_fetch_array($sqlresult);

    $sqlresult1 = mysqli_query($conn, "select * from user WHERE email = '$row[1]'"); //user 
    $fetch = mysqli_fetch_array($sqlresult1);

    $sqlresult2 = mysqli_query($conn, "select * from rent WHERE renter_email = '$email' and host_code = '$HOSTCODE';"); //renting info
    $fetch1 = mysqli_fetch_array($sqlresult2);



    $date3 = date_create($fetch1[5]);
    $date1 = date_create($fetch1[6]);  //curren //pag sumobra count as penalty CURRENT
    $diff2 = date_diff($date3, $date1);
    $penalty2 =  $diff2->format("%R%a");
    ?>
    <div class="container container1 d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3">

                <p class="ps-1 name">Your Email:
                    <?php echo $fetch1[1] ?></p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Request Status:</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span><?php echo $fetch1[4] ?></p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <?php
                            echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"/>';

                            ?>
                        </div>
                        <div class="carousel-item">
                            <?php
                            echo '<img  class="d-block w-100 h-100" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"/>';

                            ?>
                        </div>
                        <div class="carousel-item">
                            <?php
                            echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"/>';

                            ?>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon">
                            <span class="fas fa-arrow-left"></span>
                        </div>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon">
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis info my-3">
                    <?php echo  $row[3] ?> of a <?php echo   $row[2] ?> in <?php echo  $row[8] ?>
                    <hr>
                    Hosted by: <?php echo  $fetch[2] ?> <?php echo  $fetch[3] ?>
                </p>
                <hr>
                <p class="px-1"><?php echo  $row[8] ?> | <?php echo  $row[9] ?> | <?php echo  $row[10] ?> | <?php echo  $row[11] ?> | <?php echo  $row[12] ?></p>





                <div class="radiobtn">

                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Guest
                                    </span>
                                    <h3><?php echo $row[4] ?></h3>
                                </div>
                                <span>Maximum Capacity of Guest</span>
                            </div>
                        </div>
                    </label>
                    <label for="two" class="box py-2 second">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Beds
                                    </span>
                                    <h3><?php echo $row[5] ?></h3>
                                </div>
                                <span>Number of Beds inside</span>
                            </div>
                        </div>
                    </label>
                    <label for="three" class="box py-2 third">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Bedrooms
                                    </span>
                                    <h3><?php echo $row[6] ?></h3>
                                </div>
                                <span>Number of Bedrooms</span>
                            </div>
                        </div>
                    </label>
                    <label for="Four" class="box py-2 third">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Bathrooms
                                    </span>
                                    <h3><?php echo $row[7] ?></h3>
                                </div>
                                <span>Number of Bathrooms</span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">

                <h5>STAND OUT AMENITIES:</h5>
                <ul class="list-group text-center p-2">
                    <?php
                    if (!empty($row[13])) {
                        echo ' <li class="list-group-item">POOL</li>';
                    }
                    if (!empty($row[14])) {
                        echo ' <li class="list-group-item">HOT TUB</li>';
                    }
                    if (!empty($row[15])) {
                        echo ' <li class="list-group-item">OUTDOOR DINING</li>';
                    }
                    if (!empty($row[16])) {
                        echo ' <li class="list-group-item">WIFI</li>';
                    }
                    if (!empty($row[17])) {
                        echo ' <li class="list-group-item">TV</li>';
                    }
                    if (!empty($row[18])) {
                        echo ' <li class="list-group-item">KITCHEN</li>';
                    }
                    if (!empty($row[19])) {
                        echo ' <li class="list-group-item">FREE PARKING</li>';
                    }
                    if (!empty($row[20])) {
                        echo ' <li class="list-group-item">PAID PARKING</li>';
                    }
                    if (!empty($row[21])) {
                        echo ' <li class="list-group-item">AIRCON</li>';
                    }
                    ?>
                </ul>
                <ul class="list-group text-center  p-2">
                    <?php
                    if (!empty($row[22])) {
                        echo ' <li class="list-group-item">FIRST AID</li>';
                    }
                    if (!empty($row[23])) {
                        echo ' <li class="list-group-item">FIRE EXTINGUISHER</li>';
                    }
                    if (!empty($row[24])) {
                        echo ' <li class="list-group-item">SMOKE ALARM</li>';
                    }
                    ?>
                </ul>
                <div>



                    <div class="address">
                        <p class="dis fw-bold mb-3">Billing Information</p>

                        <div class="d-flex">

                            <input class="form-control zip" type="text" placeholder="Checkin" value="Check in:  <?php echo date('m-d-Y', strtotime($fetch1[5])); ?>" readonly>

                            <input class=" form-control state" type="text" placeholder="Checkout" value="Check Out:  <?php echo date('m-d-Y', strtotime($fetch1[6])); ?>" readonly>
                        </div>
                        <div class=" my-3">
                            <p class="dis fw-bold mb-2">Host code: <?php echo $fetch1[0] ?></p>
                        </div>
                        <div class="d-flex flex-column dis">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>Night/s:</p>
                                <p><span class="fas fa-dollar-sign"></span><?php echo  $penalty2 ?></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>Cleaning Fee</p>
                                <p><span class="fas fa-dollar-sign"></span>3%</p>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>Service Fee</p>
                                <p><span class="fas fa-dollar-sign"></span>7%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-bold">Per Night:</p>
                                <p class="fw-bold"><span class="fas fa-dollar-sign">₱<?php echo $row[27] ?></span></p>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-bold">Overall Total:</p>
                                <p class="fw-bold"><span class="fas fa-dollar-sign">₱<?php echo $fetch1[3] ?></span></p>
                            </div>
                            <?php
                            $code = "$HOSTCODE:$email";
                            if ($fetch1[4] === "PENDING") {
                                echo '<a class="btn btn-primary mt-2">STATUS IS STILL PENDING<span class="fas fa-dollar-sign px-1"></span>₱  ' . $fetch1[3] . ' </a>';
                                echo '<a href="validation.php?CANCEL_RENT=TRUE&RENTINGID=' . $code . '&HOST_EMAIL=' . $fetch[4] . '" class="btn btn-danger mt-2">CANCEL</a>';
                                echo '<script>
                                alert("Status is still pending, wait for  your host to confirm your booking within a day!"); 
                                
                                </script>';
                            } elseif ($fetch1[9] === "PAID-GCASH") {
                                echo '<a class="btn btn-primary mt-2">ALREADY PAID via GCASH:<span class="fas fa-dollar-sign px-1"></span>₱  ' . $fetch1[3] . ' </a>';
                                echo '<a href="refund-gcash.php?RENTINGID=' . $code . '&HOST_EMAIL=' . $fetch[4] . '" class="btn btn-danger mt-2">REFUND GCASH</a>';
                                echo '<script>
                                alert("Your booking is reserved"); 
                                
                                </script>';
                            } elseif ($fetch1[9] === "100% REFUND" || $fetch1[9] === "50% REFUND" || $fetch1[9] === "10% REFUND") {
                                echo '<a class="btn btn-danger mt-2">REFUND HAS BEEN MADE<span class="fas fa-dollar-sign px-1"></span></a>';
                                echo '<script>
                                alert("Refund has been made, Please wait for your host to refund your money."); 
                                
                                </script>';
                            } elseif ($fetch1[4] === "DECLINE") {
                                echo '<a class="btn btn-danger mt-2">REQUEST HAS BEEN DECLINED</a>';
                                echo '<script>
                                alert("Your Request has been DECLINED, Please wait within a day before you request another book"); 
                                
                                </script>';
                            } elseif ($fetch1[9] === "PENDING") {
                                echo '<a class="btn btn-primary mt-2">YOUR PAYMENT IS ON PROCESS<span class="fas fa-dollar-sign px-1"></span>₱  ' . $fetch1[3] . ' </a>';
                                echo '<script>
                                alert("Your GCASH Payment is on process please wait within a day"); 
                                
                                </script>';
                            } elseif ($fetch1[9] === "REJECTED") {
                                echo '<a href="renting-payment-method.php?RENTINGID=' . $code . '&HOST_EMAIL=' . $fetch[4] . '" class="btn btn-primary mt-2">GCASH PAY:<span class="fas fa-dollar-sign px-1"></span>₱ ' . $fetch1[3] . '</a>';
                                echo '<script>
                                alert("Your GCASH is DECLINED! Submit another gcash receipt"); 
                                
                                </script>';
                            } else {
                                echo '<a href="renting-payment-method.php?RENTINGID=' . $code . '&HOST_EMAIL=' . $fetch[4] . '" class="btn btn-primary mt-2">GCASH PAY:<span class="fas fa-dollar-sign px-1"></span>₱ ' . $fetch1[3] . '</a>';
                                echo '<a href="validation.php?CANCEL_RENT=TRUE&RENTINGID=' . $code . '&HOST_EMAIL=' . $fetch[4] . '" class="btn btn-danger mt-2">CANCEL</a>';
                            }


                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>













































    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>


</html>