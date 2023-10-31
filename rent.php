<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/rent.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>

</head>
<?php
function display()
{
    include "database/database.php";
    $sqlresult = mysqli_query($conn, "select * from room WHERE status = 'ACCEPTED' AND hosting_status = 'ONLINE'");
    while ($row = mysqli_fetch_array($sqlresult)) {
        echo '<div class="col-lg-3 col-md-6 mb-4">';
        echo ' <div class="card card-border" style="borer-radius:50px;">';

        echo " <div id='myCarousel$row[0]' class='carousel slide' data-bs-ride='carousel'>
        <div class='carousel-inner'>
            <div class='carousel-item active'>";

        echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img1']) . '"height="100"width="100"/>';
        echo "
            </div>
            <div class='carousel-item'>";
        echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img2']) . '"height="100"width="100"/>';
        echo "
            </div>
            <div class='carousel-item'>";
        echo '<img  class="d-block w-100" src="data:image/jpeg;base64,' . base64_encode($row['img3']) . '"height="100"width="100"/>';
        echo "
            </div>
        </div>";

        echo   '<button class="carousel-control-prev" type="button"  data-bs-target="#myCarousel' . $row[0] . '" data-bs-slide="prev">';

        echo "
            
        </button>";
        echo ' <button class="carousel-control-next" type="button" data-bs-target="#myCarousel' . $row[0] . '" data-bs-slide="next"';
        echo "
        </button>
        </div>
        <div class='card-body'>
            <h5 class='card-title'> " . $row[25] . "</h5>
            <p class='text-muted'>
                Hosted on: " . $row[32] . " <br>
                Guest: " . $row[4] . " |   Beds: " . $row[5] . " | Bedrooms: " . $row[6] . " |  Baths: " . $row[7] . "
                </p>
                <hr>
            <h5>₱" . $row[27] . "<span class='text-muted'>/Night</span></h5>
        <a href='renting-user.php?HOSTCODE=$row[0]' class='btn btn-warning form-control'>Request to Book</a>
        </div>
        ";
        echo '</div>';
        echo '</div>';
    }
}



?>

<body>
    <?php include 'includes/navigationBar.php'; ?>

    <div class="place-holder px-5 m-5">
        <div class="row">
            <?php echo display() ?>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php include 'includes/footer.php'; ?>
</body>



</html>