<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.title.css">

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
                        Now, let's describe your place
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
                        <div class="container">
                            <h2 class="_j0gdmp5"><label class="_qsdbn" for="title.title">Create your description</label></h2>
                            <div class="paragraph">Describe your place as best as possible!.</div>
                            <br>
                            <textarea rows="3" class="_1w5upab" autocomplete="off" id="title.title" spellcheck="false" style="height: 177px;" maxlength="500" name="Description" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="section-footer">

                        <center>

                            <div class="button-tab my-3">
                                <button type="submit" class="btn btn-warning btn-custom" name="submit_description">NEXT</button>
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