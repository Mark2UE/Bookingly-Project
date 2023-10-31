<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.hosting.css">

    <title>Privacy Type</title>

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
                        What kind of space will guests have?
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
                    <div class="section-body2">
                        <div class="form">
                            <div class="inputGroup">
                                <input id="radio1" value="An Entire place" name="privacy_type" type="radio" />
                                <label for="radio1">An Entire place</label>
                            </div>
                            <div class="inputGroup">
                                <input id="radio2" value="A Private room" name="privacy_type" type="radio" />
                                <label for="radio2">A Private room</label>
                            </div>
                            <div class="inputGroup">
                                <input id="radio3" value="A Shared room" name="privacy_type" type="radio" />
                                <label for="radio3">A Shared room</label>
                            </div>




                        </div>
                    </div>

                    <div class="section-footer">

                        <center>

                            <div class="button-tab my-3">
                                <button type="submit" class="btn btn-warning btn-custom" name="step2_privacy">NEXT</button>
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