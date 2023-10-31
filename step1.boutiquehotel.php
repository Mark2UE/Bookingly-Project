<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.boutiquehotel.css">

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
                            <input id="radio1" value="Hotel" name="home_type" type="radio" />
                            <label for="radio1">Hotel
                                <p class="details" for="radio1"> A business offering private rooms, suites, or unique stays for guests.</p>
                            </label>

                        </div>
                        <div class="inputGroup">
                            <input id="radio2" value="Hostel" name="home_type" type="radio" />
                            <label for="radio2">Hostel
                                <p class="details" for="radio1">A business offering private rooms, suites, or unique stays for guests.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio3" value="Resort" name="home_type" type="radio" />
                            <label for="radio3">Resort
                                <p class="details" for="radio1">A hospitality business with more amenities and services than a hotel.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio4" value="Nature Lodge" name="home_type" type="radio" />
                            <label for="radio4">Nature Lodge
                                <p class="details" for="radio1">A business offering stays near natural settings like forests or mountains.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio5" value="Aparhotel" name="home_type" type="radio" />
                            <label for="radio5">Aparhotel
                                <p class="details" for="radio1">A place with hotel-like amenities and rooms that feel like apartments.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio6" value="Serviced Apartment" name="home_type" type="radio" />
                            <label for="radio6">Serviced Apartment
                                <p class="details" for="radio1">An apartment with hotel-like amenities serviced by a <br> professional management company.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio7" value="Heritage Hote" name="home_type" type="radio" />
                            <label for="radio7">Heritage Hotel
                                <p class="details" for="radio1">A historic building converted to guest accommodations in India.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio8" value="Kezhan" name="home_type" type="radio" />
                            <label for="radio8">Kezhan
                                <p class="details" for="radio1">A place to stay with local character and sophisticated amenities in China.</p>
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