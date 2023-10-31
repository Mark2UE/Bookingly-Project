<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/rent.css">


    <title>REFUND</title>

</head>
<style>
    body {
        overflow-y: hidden;
    }

    .card1 {


        height: 100vh;
        margin-top: 50px;
    }

    .card2 {
        height: 50vh;
    }

    .img {
        width: auto;
    }

    .img img {
        width: 500px;
        height: 200px;
    }






    .container1 {
        margin-top: 100px;
    }
</style>

<body>
    <?php
    include "database/database.php";
    $RENTING_CODE = $_GET['RENTINGID'];
    $HOST_EMAIL = $_GET['HOST_EMAIL'];



    $sqlresult = mysqli_query($conn, "select * from user WHERE email = '$HOST_EMAIL' "); //host_info
    $row = mysqli_fetch_array($sqlresult);

    $sqlresult1 = mysqli_query($conn, "select * from rent WHERE renting_code = '$RENTING_CODE' "); //rent_info
    $row1 = mysqli_fetch_array($sqlresult1);

    $sqlresult2 = mysqli_query($conn, "select * from user WHERE email = '$row1[2]' "); //host
    $fetch2 = mysqli_fetch_array($sqlresult2);

    $sqlresult = mysqli_query($conn, "select * from user WHERE email = '$row1[1]' "); //renter
    $fetch = mysqli_fetch_array($sqlresult);

    //date_DIFFs


    $checkIN = date_create($row1[5]);
    $checkOUT = date_create($row1[6]);
    $daysRange = date_diff($checkIN, $checkOUT);
    $output =   $daysRange->format("%R%a");



    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");


    $dateAccepted = $row1[7];


    $dateAcc = date_create($dateAccepted);
    $date_now = date_create($datenow);
    $daysRange2 = date_diff($dateAcc, $date_now);
    $days_acc_now =   $daysRange2->format("%R%a"); // days between NOW AND ACCEPTED date diff





    $dateNow = date_create($datenow);
    $daysRange1 = date_diff($dateNow,  $checkIN);
    $days_acc_chck  =   $daysRange1->format("%R%a"); // between date accepted and check in




    $totalAmount =  $row1[3];
    $Refund = 0;
    if ($days_acc_now    < '7') { //within the first 7 days of rent accepted
        $Refund = $totalAmount * 1;
        $status = "100% REFUND";
        $status1 = "0%";
    } elseif ($days_acc_chck   < '30') {
        $Refund = $totalAmount * 0.50;
        $status = "50% REFUND";
        $status1 = "50%";
    } elseif ($days_acc_chck  > '30') {
        $Refund = $totalAmount * 1;
        $status = "10% REFUND";
        $status1 = "10%";
    }








    ?>





    <div class="container card1">





        <div class="col-lg-12">


            <!-- form card cc payment -->
            <div class="card card-outline-secondary">
                <div class="card-body overflow-auto" style="height: 90vh; padding: 150px;">
                    <h3 class=" text-center">Bookingly Refund System</h3>
                    <hr>

                    <form method="POST" action="validation.php" enctype="multipart/form-data">
                        <input type="hidden" name="rentingcode" value="<?php echo  $RENTING_CODE ?>" required>
                        <div class="form-group">
                            <label for="cc_name">Your Email:</label>
                            <input type="text" class="form-control" name="RenterEmail" value="<?php echo $fetch[4] ?>" id="cc_name" readonly>
                        </div>
                        <div class="form-group">
                            <label>Your Number:</label>
                            <input type="text" value="<?php echo $fetch[0] ?>" name="RenterNumber" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="cc_name">Host Email:</label>
                            <input type="text" value="<?php echo $fetch2[4] ?>" name="HostEmail" class="form-control" id="cc_name">
                        </div>
                        <div class="form-group">
                            <label>Host Number:</label>
                            <input type="text" value="<?php echo $fetch2[0] ?>" name="HostNumber" class="form-control">
                        </div>
                        <div class="row">
                            <label class="col-md-12">Total Amount:</label>
                        </div>
                        <div class="form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">₱</span></div>
                                <input type="text" class="form-control text-right" value="<?php echo $row1[3] ?>" name="Amount" id="exampleInputAmount" placeholder="Amount">

                            </div>
                        </div>

                        <hr>

                        <div class="form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Check in</span></div>
                                <input type="text" class="form-control text-right" value="<?php echo date('m-d-Y', strtotime($row1[5]));  ?>">
                                <div class="input-group-prepend"><span class="input-group-text">Check Out</span></div>
                                <input type="text" class="form-control text-right" value="<?php echo date('m-d-Y', strtotime($row1[6])); ?>">



                            </div>
                        </div>



                        <div class="form-inline card m-5 p-5">
                            <div class="input-group">
                                <table class="table table-bordered ">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Night/s:</th>
                                            <td><?php echo  $output ?> Night/s</td>
                                            <td>Total Amount: ₱<?php echo $row1[3] ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date Checked in:</th>
                                            <td><?php echo date('m-d-Y', strtotime($row1[5])); ?></td>
                                            <td><b>Date now:</b> <?php echo date('m-d-Y', strtotime($datenow)); ?></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Refund Policy:</th>
                                            <td><?php echo  $days_acc_chck ?> Nights</td>
                                            <td><i>Days between Refund date and check in</i></td>
                                            <td><?php echo $status ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Refund details:</th>
                                            <td>Host will get: <?php echo $status1 ?></td>
                                            <td>Total refunded: ₱<?php echo $Refund ?></td>
                                            <td><?php echo $status ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                                <select class="form-select" name="Refund_Reason" aria-label="Default select example">
                                    <option selected>Select Refund reasons:</option>
                                    <option value="Wrong date inputted">Wrong date inputted</option>
                                    <option value="Change Location">Change Location</option>
                                    <option value="Medical Reasons">Medical Reasons</option>
                                    <option value="Emergency">Emergency</option>
                                    <option value="Others">Others etc.</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-inline my-5">
                            <div class="card p-3">
                                <h4>Bookingly Refund Policy:</h4>
                                <ul>
                                    <li>To receive a full refund, guests must cancel at least 30 days before check-in</li>
                                    <li> If they cancel between 7 and 30 days before check-in, you’ll be paid 50% for all nights</li>
                                    <li> If they cancel less than 7 days before check-in, you’ll be paid 100% for all nights</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group row">

                            <input type="hidden" name="Refund_Amount" value="<?php echo $Refund ?>">
                            <input type="hidden" name="status_refund" value="<?php echo $status ?>">
                            <input type="hidden" name="rent_code" value="<?php echo $RENTING_CODE ?>">
                            <input type="hidden" name="rent_status_refund" value="<?php echo $status ?>">

                            <div class="col-md-12">
                                <input type="submit" name="refund_payment_gcash" class="btn btn-warning btn-lg btn-block form-control" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form card cc payment -->






        </div>




    </div>














</body>
<?php include 'includes/scripts/animation.php' ?>


</html>