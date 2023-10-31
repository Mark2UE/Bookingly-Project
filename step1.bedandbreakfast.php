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
                    <div class="overflow-auto form" style="height: 70vh; width: 1000px">
                        <div class="inputGroup">
                            <input id="radio1" value="Bed and Breakfastt" name="home_type" type="radio" />
                            <label for="radio1">Bed and Breakfast
                                <p class="details" for="radio1">A hospitality business offering guests breakfast with a host on-site.</p>
                            </label>

                        </div>
                        <div class="inputGroup">
                            <input id="radio2" value="Nature Lodge" name="home_type" type="radio" />
                            <label for="radio2">Nature Lodge
                                <p class="details" for="radio1">A business offering stays near natural settings like forests or mountains.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio3" value="Farm stay" name="home_type" type="radio" />
                            <label for="radio3">Farm stay
                                <p class="details" for="radio1">A rural stay where guests may spend time in an agricultural setting or with animals.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio4" value="Minsu" name="home_type" type="radio" />
                            <label for="radio4">Minsu
                                <p class="details" for="radio1">A hospitality business offering guests private rooms in Taiwan.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio5" value="Casa particular" name="home_type" type="radio" />
                            <label for="radio5">Casa particular
                                <p class="details" for="radio1">A private room in a Cuban home that feels like a bed and breakfast.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio6" value="Ryokan" name="home_type" type="radio" />
                            <label for="radio6">Ryokan
                                <p class="details" for="radio1">A small inn offering guests a unique cultural experience in Japan.</p>
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