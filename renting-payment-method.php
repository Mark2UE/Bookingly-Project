<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/rent.css">


    <title>PAYMENT</title>

</head>
<style>
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

    .btn {
        font-size: 20px;
        padding: 50px;
        font-weight: bolder;

        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;

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

    $sqlresult1 = mysqli_query($conn, "select * from rent WHERE renting_code = '$RENTING_CODE' "); //host_info
    $row1 = mysqli_fetch_array($sqlresult1);


    ?>


    <div class="container card1">

        <header>
            <div class="img">
                <center>
                    <img src="img/BOOKINGLY.png" alt="">
                </center>
            </div>
        </header>



        <div class="card p-5 m-5 fs-1 card2">
            <center>
                <h2>Select your payment method</h2>
            </center>


            <div class="justify-content-between input-group1 container1">
                <div class="d-flex justify-content-center">

                    <div class="p-2 mx-5">
                        <?php

                        if ($row[6] === "VERIFIED") {
                            echo '<a href="renting-payment-method-gcash.php?RENTINGID=' . $RENTING_CODE . '"> <button type="submit" class="btn btn-warning form-control">GCASH ONLINE PAYMENT</button> <a>';
                        } else {

                            echo ' <div class="btn btn-danger form-control"> 
                           ONLINE PAYMENT IS DISABLED
                           </div>';
                        }



                        ?>
                    </div>

                </div>
            </div>



        </div>





    </div>













</body>
<?php include 'includes/scripts/animation.php' ?>


</html>