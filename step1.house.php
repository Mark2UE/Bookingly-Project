<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.housing.css">

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
                            <input id="radio1" value="Home" name="home_type" type="radio" />
                            <label for="radio1">Home
                                <p class="details" for="radio1"> A home that may stand-alone or have shared walls.</p>
                            </label>

                        </div>
                        <div class="inputGroup">
                            <input id="radio2" value="Cabin" name="home_type" type="radio" />
                            <label for="radio2">Cabin
                                <p class="details" for="radio1">A house made with natural materials like wood and built in a natural setting.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio3" value="Villa" name="home_type" type="radio" />
                            <label for="radio3">Villa
                                <p class="details" for="radio1">A luxury home that may have indoor-outdoor spaces, gardens, and pools.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio4" value="Townhouse" name="home_type" type="radio" />
                            <label for="radio4">Townhouse
                                <p class="details" for="radio1">A multi-level row or terrace house that shares walls and possibly outdoor spaces.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio5" value="Cottage" name="home_type" type="radio" />
                            <label for="radio5">Cottage
                                <p class="details" for="radio1">A cozy house built in a rural area or near a lake or beach.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio6" value="Bungalow" name="home_type" type="radio" />
                            <label for="radio6">Bungalow
                                <p class="details" for="radio1">A single-level house with a wide front porch and a sloping roof.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio7" value="Earthen home" name="home_type" type="radio" />
                            <label for="radio7">Earthen home
                                <p class="details" for="radio1">A home built in the ground or made from materials like rammed earth.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio8" value="Hoseboat" name="home_type" type="radio" />
                            <label for="radio8">Houseboat
                                <p class="details" for="radio1">A floating home constructed from similar materials as a land-based home.</p>
                            </label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio9" value="Hut" name="home_type" type="radio" />
                            <label for="radio9">Hut
                                <p class="details" for="radio1">A home made of wood or mud that may have a thatched straw roof.</p>
                            </label>
                        </div>

                        <div class="inputGroup">
                            <input id="radio10" value="Farmstay" name="home_type" type="radio" />
                            <label for="radio10">Farmstay
                                <p class="details" for="radio1">A home made of wood or mud that may have a thatched straw roof..</p>
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