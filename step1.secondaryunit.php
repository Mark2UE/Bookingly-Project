<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.secondaryunit.css">

    <title>Home</title>

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
                        Which of these best describes your place?
                    </div>
                </div>
                <div class="section-footer">

                </div>


            </div>

        </div>
        <div class="col-lg-6 RIGHT2">


            <div class="section-header">

            </div>

            <form action="validation-hosting.php" method="post">

                <div class="section-body3 ">
                    <div class="form" style="height: 70vh; width: 1000px">
                        <div class="inputGroup">
                            <input id="radio1" value="Guesthouse" name="home_type" type="radio" />
                            <label for="radio1">Guesthouse
                                <p class="details" for="radio1">A separate building from the main house.</p>
                            </label>

                        </div>
                        <div class="inputGroup">
                            <input id="radio2" value="Guest suite" name="home_type" type="radio" />
                            <label for="radio2">Guest suite
                                <p class="details" for="radio1">A space with a private entrance inside of or attached to a larger structure.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio3" value="Farm Stay" name="home_type" type="radio" />
                            <label for="radio3">Farm Stay
                                <p class="details" for="radio1">A rural stay where guests may spend time in an agricultural setting or with animals.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio4" value="Vacation homee" name="home_type" type="radio" />
                            <label for="radio4">Vacation home
                                <p class="details" for="radio1">A furnished rental property that includes a kitchen and bathroom and <br> may offer some guest services, like a reception desk.</p>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="section-footer">
                    <div class="button-tab my-5">
                        <center>
                            <button type="submit" class="btn btn-warning btn-custom" name="step1_home">NEXT</button>
                        </center>
                    </div>

                </div>
            </form>



        </div>
    </div>


</body>
<?php include 'includes/scripts/animation.php' ?>

</html>