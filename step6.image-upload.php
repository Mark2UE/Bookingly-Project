<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <link rel="stylesheet" type="text/css" href="css/step.image-upload.css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <title>Image Upload</title>

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
                        Next, let's add some photos of your place
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
                <form action="validation-hosting.php" method="post" enctype="multipart/form-data">
                    <div class="section-body2">
                        <div class="overflow-auto" style="height: 70vh; padding: 20px;">
                            <div class="file-upload">
                                <div class="file-upload-placeholder">
                                    <input class="file-upload-input" type='file' name="image1" id="image1" onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3>Drag and drop a file or select add Image 1</h3>
                                    </div>
                                </div>

                                <div class="file-upload-preview">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="file-upload-remove">
                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                </div>

                            </div>

                            <div class="file-upload">

                                <div class="file-upload-placeholder1">
                                    <input class="file-upload-input1" type='file' name="image2" id="image2" onchange="readURL1(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3>Drag and drop a file or select add Image 2</h3>
                                    </div>
                                </div>

                                <div class="file-upload-preview1">
                                    <img class="file-upload-image1" src="#" alt="your image" />
                                    <div class="file-upload-remove1">
                                        <button type="button" onclick="removeUpload1()" class="remove-image1">Remove <span class="image-title1">Uploaded Image</span></button>
                                    </div>
                                </div>

                            </div>


                            <div class="file-upload">

                                <div class="file-upload-placeholder2">
                                    <input class="file-upload-input2" type='file' name="image3" id="image3" onchange="readURL2(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3>Drag and drop a file or select add Image 3</h3>
                                    </div>
                                </div>

                                <div class="file-upload-preview2">
                                    <img class="file-upload-image2" src="#" alt="your image" />
                                    <div class="file-upload-remove2">
                                        <button type="button" onclick="removeUpload2()" class="remove-image1">Remove <span class="image-title2">Uploaded Image</span></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="section-footer">

                        <center>

                            <div class="button-tab my-3">
                                <button type="submit" class="btn btn-warning btn-custom" name="submit_image">NEXT</button>
                            </div>
                        </center>
                    </div>
                </form>

            </div>

        </div>
    </div>

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



    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) { // if input is file, files has content
                var inputFileData = input.files[0]; // shortcut
                var reader = new FileReader(); // FileReader() : init
                reader.onload = function(e) {
                    /* FileReader : set up ************** */
                    console.log('e', e)
                    $('.file-upload-placeholder1').hide(); // call for action element : hide
                    $('.file-upload-image1').attr('src', e.target.result); // image element : set src data.
                    $('.file-upload-preview1').show(); // image element's container : show
                    $('.image-title1').html(inputFileData.name); // set image's title
                };
                console.log('input.files[0]', input.files[0])
                reader.readAsDataURL(inputFileData); // reads target inputFileData, launch `.onload` actions
            } else {
                removeUpload1();
            }
        }

        function removeUpload1() {
            var $clone = $('.file-upload-input1').val('').clone(true); // create empty clone
            $('.file-upload-input1').replaceWith($clone); // reset input: replaced by empty clone
            $('.file-upload-placeholder1').show(); // show placeholder
            $('.file-upload-preview1').hide(); // hide preview
        }

        // Style when drag-over
        $('.file-upload-placeholder1').bind('dragover', function() {
            $('.file-upload-placeholder1').addClass('image-dropping');
        });
        $('.file-upload-placeholder1').bind('dragleave', function() {
            $('.file-upload-placeholder1').removeClass('image-dropping');
        });
    </script>



    <script>
        function readURL2(input) {
            if (input.files && input.files[0]) { // if input is file, files has content
                var inputFileData = input.files[0]; // shortcut
                var reader = new FileReader(); // FileReader() : init
                reader.onload = function(e) {
                    /* FileReader : set up ************** */
                    console.log('e', e)
                    $('.file-upload-placeholder2').hide(); // call for action element : hide
                    $('.file-upload-image2').attr('src', e.target.result); // image element : set src data.
                    $('.file-upload-preview2').show(); // image element's container : show
                    $('.image-title2').html(inputFileData.name); // set image's title
                };
                console.log('input.files[0]', input.files[0])
                reader.readAsDataURL(inputFileData); // reads target inputFileData, launch `.onload` actions
            } else {
                removeUpload1();
            }
        }

        function removeUpload2() {
            var $clone = $('.file-upload-input2').val('').clone(true); // create empty clone
            $('.file-upload-input2').replaceWith($clone); // reset input: replaced by empty clone
            $('.file-upload-placeholder2').show(); // show placeholder
            $('.file-upload-preview2').hide(); // hide preview
        }

        // Style when drag-over
        $('.file-upload-placeholder2').bind('dragover', function() {
            $('.file-upload-placeholder2').addClass('image-dropping');
        });
        $('.file-upload-placeholder2').bind('dragleave', function() {
            $('.file-upload-placeholder2').removeClass('image-dropping');
        });
    </script>

</body>
<?php include 'includes/scripts/animation.php' ?>


</html>