<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/user-account.css">
    <link rel="stylesheet" type="text/css" href="css/renting-billing.css">

    <title>Rent Listing</title>

</head>


<body>
    <?php include 'includes/navigationBar.php'; ?>


    <?php
    include "database/database.php";
    $HOSTCODE = $_GET['HOSTCODE'];
    $EMAIL = $_SESSION['EMAIL'];
    $daterange = $_POST['daterange'];

    $sqlresult = mysqli_query($conn, "select * from room WHERE host_id = '$HOSTCODE' ");
    $row = mysqli_fetch_array($sqlresult);

    $sqlresult1 = mysqli_query($conn, "select * from user WHERE email = '$row[1]'");
    $fetch = mysqli_fetch_array($sqlresult1);


    $sqlresult2 = mysqli_query($conn, "select * from user WHERE email = '$EMAIL'");
    $account_fetch = mysqli_fetch_array($sqlresult2);

    //from arrays mm 0-1 / dd 3-4 / yyyy 6-9
    $checkin =  $daterange[0] . $daterange[1] .  $daterange[2] .  $daterange[3] .  $daterange[4] .  $daterange[5] .  $daterange[6] .  $daterange[7] .  $daterange[8] . $daterange[9];
    //from arrays mm 13-14 / dd 16-17 / yyyy 19-22
    $checkout =  $daterange[13] .  $daterange[14] .  $daterange[15] .  $daterange[16] .  $daterange[17] .  $daterange[18] . $daterange[19] . $daterange[20] . $daterange[21] . $daterange[22];

    $date3 = date_create($checkin);
    $date1 = date_create($checkout);  //curren //pag sumobra count as penalty CURRENT
    $diff2 = date_diff($date3, $date1);
    $penalty2 =  $diff2->format("%R%a");


    $standardrate =  $penalty2 * $row[27];
    $servicefee = $standardrate * 0.07;
    $cleaningfee = $standardrate * 0.05;

    $total  = $servicefee + $cleaningfee + $standardrate;
    ?>

    <form action="validation.php" method="post">
        <section>
            <div class="container1">
                <div class="row m-0">
                    <div class="col-md-7 col-12">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="row box-right">
                                    <div class="col-md-8 ps-0 ">
                                        <p class="ps-3 textmuted fw-bold h6 mb-0">Billing </p>
                                        <p class="h1 fw-bold d-flex"> <span class=" fas fa-dollar-sign textmuted pe-1 h6 align-text-top mt-1"></span>₱<?php echo $row[27] ?></p>
                                        <p class="ms-3 px-2 bg-red">Per night</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 px-0 mb-4">
                                <div class="box-right">
                                    <div class="d-flex pb-2">
                                        <p class="fw-bold h7"><span class="textmuted">Bookingly.com/</span>policy</p>
                                        <p class="ms-auto p-blue"><span class=" bg btn btn-primary fas fa-pencil-alt me-3"></span> <span class=" bg btn btn-primary far fa-clone"></span> </p>
                                    </div>
                                    <div class="bg-blue p-2">
                                        <P class="h8 textmuted">Your reservation won’t be confirmed until the Host accepts your request (within 24 hours).
                                            You won’t be charged until then.

                                        </P>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 mb-4">
                                <div class="box-right">
                                    <div class="d-flex mb-2">
                                        <p class="fw-bold">Profiles</p>
                                        <p class="ms-auto textmuted">Hosting Profile<span class="fas fa-times"></span></p>
                                    </div>
                                    <div class="row">
                                        <p class="h7"><?php echo $fetch[2] ?> <?php echo $fetch[3] ?></p>
                                    </div>
                                    <div class="row">
                                        <p class="h7"><span class="fas fa-times">Email: </span><?php echo $fetch[4] ?></p>
                                        <input type="hidden" name="hosting_email" value="<?php echo $fetch[4] ?>">
                                    </div>

                                    <div class="row">
                                        <p class="h7"><span class="fas fa-times">Phone Number: </span><?php echo $fetch[0] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-0 mb-4">
                                <div class="box-right">
                                    <div class="d-flex mb-2">
                                        <p class="fw-bold">Profiles</p>
                                        <p class="ms-auto textmuted">Renter Profile<span class="fas fa-times"></span></p>
                                    </div>
                                    <div class="row">
                                        <p class="h7"><?php echo $account_fetch[2] ?> <?php echo $account_fetch[3] ?></p>
                                    </div>
                                    <div class="row">
                                        <p class="h7"><span class="fas fa-times">Email: </span><?php echo $account_fetch[4] ?></p>
                                        <input type="hidden" name="renter_email" value="<?php echo $account_fetch[4] ?>">
                                    </div>

                                    <div class="row">
                                        <p class="h7"><span class="fas fa-times">Phone Number: </span><?php echo $account_fetch[0] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 ps-md-5 p-0 ">

                        <div class="box-left">
                            <p class="textmuted h8">Invoice</p>
                            <p class="fw-bold h7"><?php echo $account_fetch[2] ?> <?php echo $account_fetch[3] ?></p>
                            <p class="textmuted h8"><?php echo $account_fetch[0] ?></p>
                            <p class="textmuted h8 mb-2"><?php echo $account_fetch[4] ?></p>
                            <div class="h8">
                                <div class="row m-0 border mb-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Billing:</th>
                                                <th scope="col">Qty:</th>
                                                <th scope="col">Total:</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Night/s:</th>
                                                <td><?php echo $penalty2 ?> Night/s</td>
                                                <td>₱<?php echo $standardrate ?></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Service Fee:</th>
                                                <td>7%</td>
                                                <td colspan="2">₱<?php echo round($servicefee) ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Cleaning Fee:</th>
                                                <td>5%</td>
                                                <td colspan="2">₱<?php echo round($cleaningfee) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex h7 mb-2">
                                    <p class="">Total Amount</p>
                                    <p class="ms-auto"><span class="fas fa-dollar-sign"></span>₱<?php echo round($total)  ?></p>
                                    <input type="hidden" name="amount" value="<?php echo round($total) ?>">
                                </div>
                                <div class="h8 mb-5">
                                    <p class="textmuted">Your total amount includes all fees </p>
                                </div>
                                <input type="hidden" name="host_code" value="<?php echo $HOSTCODE ?>">

                                <input type="hidden" name="check_in" value="<?php echo $checkin ?>">
                                <input type="hidden" name="check_out" value="<?php echo $checkout ?>">

                                <input type="submit" value="Request to book" class="btn btn-warning form-control" name="submit_renting">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </form>

    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>