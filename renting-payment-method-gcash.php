<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/rent.css">

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <title>PAYMENT</title>

</head>
<style>
    body {
        height: 100%;
    }

    .card1 {


        height: 100vh;
        margin-top: 50px;
    }

    .card2 {
        height: 50vh;
    }

    .img {
        width: auto;
    }

    .img img {
        width: 300px;
        height: 100px;
    }




    .container1 {
        margin-top: 100px;
    }



    .file-upload {


        margin: 0 auto;
        padding: 20px;
    }



    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    /* PLACEHOLDER */
    .file-upload-preview {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-placeholder {
        margin-top: 20px;
        border: 4px dashed #b02818;
        position: relative;
    }

    .image-dropping,
    .file-upload-placeholder:hover {
        background-color: #ffffff19;
        border: 4px dashed #fff;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #b02818;
        padding: 60px 0;
    }

    /* PREVIEW */
    .file-upload-image {
        max-height: 500px;
        max-width: 500px;
        margin: auto;
        padding: 20px;
    }

    /* REMOVE */
    .file-upload-remove {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .remove-image {
        width: 500px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>

<body>
    <?php
    include "database/database.php";
    $RENTING_CODE = $_GET['RENTINGID'];

    $sqlresult1 = mysqli_query($conn, "select * from rent WHERE renting_code = '$RENTING_CODE' "); //renting info
    $row1 = mysqli_fetch_array($sqlresult1);



    $sqlresult = mysqli_query($conn, "select * from user WHERE email = '$row1[1]' "); //renter
    $fetch = mysqli_fetch_array($sqlresult);


    $sqlresult2 = mysqli_query($conn, "select * from user WHERE email = '$row1[2]' "); //host
    $fetch2 = mysqli_fetch_array($sqlresult2);

    ?>


    <div class="container card1">





        <div class="col-md-6 offset-md-3">


            <!-- form card cc payment -->
            <div class="card card-outline-secondary">
                <div class="card-body p-5 overflow-auto" style="height: 90vh;">
                    <h3 class=" text-center">Gcash Payment</h3>
                    <hr>

                    <form method="POST" action="validation.php" enctype="multipart/form-data">
                        <input type="hidden" name="rentingcode" value="<?php echo  $RENTING_CODE ?>" required>
                        <div class="form-group">
                            <label for="cc_name">Your Email:</label>
                            <input type="text" class="form-control" name="RenterEmail" value="<?php echo $fetch[4] ?>" id="cc_name" readonly>
                        </div>
                        <div class="form-group">
                            <label>Your Number:</label>
                            <input type="text" value="<?php echo $fetch[0] ?>" name="RenterNumber" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="cc_name">Host Email:</label>
                            <input type="text" value="<?php echo $fetch2[4] ?>" name="HostEmail" class="form-control" id="cc_name">
                        </div>
                        <div class="form-group">
                            <label>Host Number:</label>
                            <input type="text" value="<?php echo $fetch2[0] ?>" name="HostNumber" class="form-control">
                        </div>
                        <div class="row">
                            <label class="col-md-12">Amount:</label>
                        </div>
                        <div class="form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">₱</span></div>
                                <input type="text" class="form-control text-right" value="<?php echo $row1[3] ?>" name="Amount" id="exampleInputAmount" placeholder="Amount">

                            </div>
                        </div>
                        <hr>

                        <div class="file-upload">
                            <div class="file-upload-placeholder">
                                <input class="file-upload-input" type='file' name="image1" id="image1" onchange="readURL(this);" accept="image/*" required />
                                <div class="drag-text">
                                    <h3>Drag your receipt here</h3>
                                </div>
                            </div>

                            <div class="file-upload-preview">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="file-upload-remove">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input type="submit" name="submit_payment_gcash" class="btn btn-warning btn-lg btn-block form-control" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form card cc payment -->






        </div>




    </div>








</body>
<?php include 'includes/scripts/animation.php' ?>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) { // if input is file, files has content
            var inputFileData = input.files[0]; // shortcut
            var reader = new FileReader(); // FileReader() : init
            reader.onload = function(e) {
                /* FileReader : set up ************** */
                console.log('e', e)
                $('.file-upload-placeholder').hide(); // call for action element : hide
                $('.file-upload-image').attr('src', e.target.result); // image element : set src data.
                $('.file-upload-preview').show(); // image element's container : show
                $('.image-title').html(inputFileData.name); // set image's title
            };
            console.log('input.files[0]', input.files[0])
            reader.readAsDataURL(inputFileData); // reads target inputFileData, launch `.onload` actions
        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        var $clone = $('.file-upload-input').val('').clone(true); // create empty clone
        $('.file-upload-input').replaceWith($clone); // reset input: replaced by empty clone
        $('.file-upload-placeholder').show(); // show placeholder
        $('.file-upload-preview').hide(); // hide preview
    }

    // Style when drag-over
    $('.file-upload-placeholder').bind('dragover', function() {
        $('.file-upload-placeholder').addClass('image-dropping');
    });
    $('.file-upload-placeholder').bind('dragleave', function() {
        $('.file-upload-placeholder').removeClass('image-dropping');
    });
</script>



</html>