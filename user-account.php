<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/user-account.css">

    <title>Home</title>

</head>
<style>
    .img {
        width: 100%;
    }

    .img img {
        width: 100%;
        height: 60px;
    }
</style>

<body>
    <?php include 'includes/navigationBar.php'; ?>

    <?php include 'includes/account-navbar-dashboard.php'; ?>

    <?php


    include 'database/database.php';

    $email = $_SESSION['EMAIL'];
    $PASSWORD = $_SESSION['PASSWORD'];

    $sqlresult = mysqli_query($conn, "select * from user WHERE email = '$email' ");
    $row = mysqli_fetch_array($sqlresult);


    ?>

    <section class="custom-padding lefties">
        <div class="wrapper bg-white p-5 container padding-custom">
            <h4 class="pb-4 border-bottom">Account settings</h4>

            <div class="py-5">

                <form action="validation.php" method="post" enctype="multipart/form-data">

                    <div class="d-flex align-items-start p-3">
                        <div class="pl-sm-4 pl-2" id="img-section">
                            <div class="img">
                                <img src="img/gcash-logo-freelogovectors.net_.png" alt="">
                            </div>

                            <div class="form-check form-switch fs-3">
                                <center>
                                    <input class="form-check-input" name="verified" value="VERIFIED" type="checkbox" id="flexSwitchCheckDefault" <?php if ($row[6] == "VERIFIED") {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } else {
                                                                                                                                                        echo "unchecked";
                                                                                                                                                    }


                                                                                                                                                    ?>>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Gcash Verified?</label>
                                </center>
                            </div>
                        </div>
                    </div>


                    <div class="row py-2 px-5">
                        <div class="col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text" name="First_Name" class="form-control" placeholder="first name" value="<?php echo $row[2] ?>" required>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="Last_Name" class="form-control" value="<?php echo $row[3] ?>" placeholder="surname" required>
                        </div>
                    </div>
                    <div class="row py-2 px-5">
                        <div class="col-md-6">
                            <label for="email">Email Address</label>
                            <input type="Email" name="Email" class="form-control" placeholder="enter Email Address" value="<?php echo $row[4] ?>" required>
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="Phone_Number" class="form-control" placeholder="enter Phone Number" value="<?php echo $row[0] ?>" required>
                        </div>
                    </div>
                    <div class="py-2 px-5">
                        <label for="phone">Birth date</label>
                        <input type="date" name="Date" class="form-control" placeholder="enter phone number" value="<?php echo $row[5] ?>" required>
                        <label for="phone">Password</label>
                        <input type="Password" name="Password" class="form-control" placeholder="enter Password" value="<?php echo $row[1] ?>" required>
                    </div>

                    <div class="py-3 pb-4 border-bottom px-5">
                        <button class="btn btn-warning profile-button" name="update_profile" type="submit">Update Account</button>

                    </div>

                </form>
            </div>
        </div>

        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>