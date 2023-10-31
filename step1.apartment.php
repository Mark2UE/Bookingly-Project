<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.apartment.css">

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
        <div class="col-lg-6 RIGHT">

            <div class="container">
                <div class="section-header">

                </div>
                <div class="overflow-auto">
                    <form action="validation-hosting.php" method="post">

                        <div class="section-body3 ">
                            <div class="overflow-auto form" style="height: 70vh; width: 1000px">
                                <div class="form">
                                    <div class="inputGroup">
                                        <input id="radio1" value="Rental unit" name="home_type" type="radio" />
                                        <label for="radio1">Rental unit
                                            <p class="details" for="radio1"> A rented place within a multi-unit residential <br> building or complex.</p>
                                        </label>

                                    </div>
                                    <div class="inputGroup">
                                        <input id="radio2" value="Condo" name="home_type" type="radio" />
                                        <label for="radio2">Condo
                                            <p class="details" for="radio1">A place within a multi-unit building or complex <br> owned by the residents.</p>
                                        </label>
                                    </div>
                                    <div class="inputGroup">
                                        <input id="radio3" value="Loft" name="home_type" type="radio" />
                                        <label for="radio3">Loft
                                            <p class="details" for="radio1">An open layout apartment or condo,which may have short <br> interior walls.</p>
                                        </label>
                                    </div>
                                    <div class="inputGroup">
                                        <input id="radio4" value="serviced aparment" name="home_type" type="radio" />
                                        <label for="radio4">serviced aparment
                                            <p class="details" for="radio1">An apartment with hotel-like amenities serviced by a <br> professional management company.</p>
                                        </label>
                                    </div>
                                    <div class="inputGroup">
                                        <input id="radio5" value="casa particular" name="home_type" type="radio" />
                                        <label for="radio5">casa particular
                                            <p class="details" for="radio1">A private room in a Cuban home that feels <br> like a bed and breakfast.</p>
                                        </label>
                                    </div>
                                    <div class="inputGroup">
                                        <input id="radio6" value="vacation home" name="home_type" type="radio" />
                                        <label for="radio6">vacation home
                                            <p class="details" for="radio1">A private room in a Cuban home that feels <br> like a bed and breakfast.</p>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="section-footer">

                            <center>

                                <div class="button-tab my-5">
                                    <button type="submit" class="btn btn-warning btn-custom" name="step1_home">NEXT</button>
                                </div>
                            </center>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>



</body>
<?php include 'includes/scripts/animation.php' ?>

</html>