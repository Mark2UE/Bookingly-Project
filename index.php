<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Home</title>

</head>

<body>
    <?php


    include 'includes/navigationBar.php'; ?>

    <header>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img">
                        <img class="img-carousel" src="img/modern.JPG" alt="">
                    </div>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>A house to experience, feel at your own residence</h1>
                            <p>Experience a house like no other, bookingly is the answer</p>
                            <p><a class="btn btn-lg btn-warning" href="register.php">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img">
                        <img class="img-carousel" src="img/16.jpeg" alt="">
                    </div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Rent a House, Host a House</h1>
                            <p>Bookingly is a house renting website that lets owner’s rent their house for people who're looking for a place to stay..</p>
                            <p><a class="btn btn-lg btn-warning" href="hosting.php">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img">
                        <img class="img-carousel" src="img/20.jpeg" alt="">
                    </div>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Create, Promote, and Accommodate</h1>
                            <p>Bookingly lets its user create a free account that lets them host their house or rent other homes</p>
                            <p><a class="btn btn-lg btn-warning" href="rent.php">Rent now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <main class="mt-5">
        <div class="container">

            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4 lefties">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                            <img src="img/modern.JPG" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4 righties">
                        <h4><strong>Find and choose a comfortable home</strong></h4>
                        <p class="text-muted">
                            Be at ease when going on a vacation of a lifetime knowing that the house you chose fits all the criteria that you are looking for.

                        </p>
                        <p><strong>Checked and Cleaned</strong></p>
                        <p class="text-muted">
                            You can be sure that each room or house is checked and cleaned to make sure that you are comfortable at the location of your choice.


                        </p>
                    </div>
                </div>
            </section>


            <!--Section: Content-->

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
<?php include 'includes/scripts/animation.php' ?>

</html>