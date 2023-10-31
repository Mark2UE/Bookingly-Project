<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.address.css">
    <title>Address</title>

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
                    <div class="text-center">
                        Where's your place located?
                    </div>
                </div>
                <div class="section-footer">

                </div>


            </div>

        </div>
        <div class="col-lg-6 RIGHT">

            <div class="container">
                <div class="section-header">

                </div>
                <form action="validation-hosting.php" method="post">
                    <div class="section-body4">
                        <div class="card p-md-5 text-black card-custom">
                            <center>
                                <h5>Confirm your address</h5>
                            </center>
                            <br>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="Street" required>
                                <label for="floatingInput">Street</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="Apt">
                                <label for="floatingInput">Apt,suite,etc(Optional)</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="City" required>
                                <label for="floatingInput">City</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="State" required>
                                <label for="floatingInput">State (Optional)</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="Zipcode" required>
                                <label for="floatingInput">Zip code (Optional)</label>
                            </div>
                        </div>




                    </div>


                    <div class="section-footer">

                        <center>

                            <div class="button-tab my-3">
                                <button type="submit" class="btn btn-warning btn-custom" name="submit_address">NEXT</button>
                            </div>
                        </center>
                    </div>
                </form>

            </div>

        </div>
    </div>



</body>
<?php include 'includes/scripts/animation.php' ?>

</html>