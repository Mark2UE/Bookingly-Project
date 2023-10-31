<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>Home</title>
    <?php
    include "database/database.php";


    ?>
</head>
<style>
    .divider-text {
        position: relative;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .divider-text span {
        padding: 7px;
        font-size: 12px;
        position: relative;
        z-index: 2;
    }

    .divider-text:after {
        content: "";
        position: absolute;
        width: 100%;
        border-bottom: 1px solid #ddd;
        top: 55%;
        left: 0;
        z-index: 1;
    }

    .btn-facebook {
        background-color: #405D9D;
        color: #fff;
    }

    .btn-twitter {
        background-color: #42AEEC;
        color: #fff;
    }
</style>

<body>
    <?php include 'includes/navigationBar.php'; ?>


    <div class="container">





        <div class="card bg-light">
            <article class="card-body mx-auto form-control" style="max-width: 100%;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>

                <?php include "includes/remain.php"; ?>
                <form method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" type="text" minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}" value="<?= $refirstname ?>" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="lastname" minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}" value="<?= $relastname ?>" required class="form-control" placeholder="Last Name" type="text">
                    </div> <!-- form-group// -->
                    <hr>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input minlength="11" maxlength="12" name="phoneno" onkeypress="return onlyNumberKey(event)" value="<?= $rephoneno ?>" required class="form-control" placeholder="Phone Number" type="text">
                    </div> <!-- form-group// -->


                    <div class="form-check form-switch fs-3">
                        <center>
                            <input class="form-check-input" name="verified" value="VERIFIED" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Gcash Verified?</label>
                        </center>
                    </div>
                    <hr>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="date" class="form-control txtbox1" value="<?= $rebirth ?>" name="birth" max="2003-12-31" min="1942-01-01" onclick="ageCalculator()" id="DOB" required">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="email" class="form-control txtbox1" name="email" minlength="9" maxlength="30" placeholder="Email" pattern="[a-zA-Z-z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$" value="<?= $reemail ?>" required>
                    </div> <!-- form-group// -->


                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control txtbox1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="20" id="password" placeholder="Password" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="password" class="form-control txtbox1" name="confirm" maxlength="20" id="confirm" placeholder="Confirm Password" required>
                    </div> <!-- form-group// -->
                    <input type="text" class="form-control txtbox1" id="code" value="text" name="code" hidden>

                    <input type="text" class="form-control txtbox1" id="prodno" value="text" name="prodno" hidden>


                    <div class="form-group">
                        <button type="submit" name="Register" class="btn btn-primary btn-block"> Create Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="">Log In</a> </p>
                    <?php
                    include "includes/insert.php";

                    include "includes/remain.php";
                    ?>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>







    <?php include 'includes/footer.php'; ?>
</body>


<script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matched';
            document.getElementById('button').disabled = false;
        } else {
            document.getElementById('button').disabled = true;
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matched';
        }
    }
</script>
<?php include 'includes/scripts/animation.php' ?>
<?php include 'includes/scripts/js.php' ?>

</html>