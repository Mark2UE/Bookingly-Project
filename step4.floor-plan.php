<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/scripts/essentials.php' ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/step.floor-plan.css">

    <title>Privacy Type</title>

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
                        How many guests would you like to welcome?
                    </div>
                </div>
                <div class="section-footer">

                </div>


            </div>

        </div>
        <div class="col-lg-6 RIGHT">

            <div class="container px-5">
                <div class="section-header">

                </div>
                <form action="validation-hosting.php" method="post">
                    <div class="section-body3">


                        <div class="container py-4">



                            <div class="row">
                                <div class="col">
                                    <h5>GUESTS</h5>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="guest">
                                                <span class="minus">-</span>
                                            </button>
                                        </span>

                                        <center><input type="text" name="guest" class="form-control input-number" value="1" min="1" max="10"></center>
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="guest">
                                                <span class="plus">+</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="row">
                                <div class="col">
                                    <h5>BEDS</h5>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="beds">
                                                <span class="minus">-</span>
                                            </button>
                                        </span>
                                        <center> <input type="text" name="beds" class="form-control input-number" value="1" min="1" max="10"></center>
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="beds">
                                                <span class="plus">+</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="row">
                                <div class="col">
                                    <h5>BEDROOMS</h5>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="bedrooms">
                                                <span class="minus">-</span>
                                            </button>
                                        </span>
                                        <center> <input type="text" name="bedrooms" class="form-control input-number" value="1" min="1" max="10"></center>
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="bedrooms">
                                                <span class="plus">+</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="row">
                                <div class="col">
                                    <h5>BATHROOMS</h5>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="bathrooms">
                                                <span class="minus">-</span>
                                            </button>
                                        </span>
                                        <center> <input type="text" name="bathrooms" class="form-control input-number" value="1" min="1" max="10" readonly></center>
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="bathrooms">
                                                <span class="plus">+</span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                    <br><br><br><br><br><br>
                    <div class="section-footer">
                        <center>
                            <div class="button-tab my-3">
                                <button type="submit" class="btn btn-warning btn-custom" name="submit_floorplan">NEXT</button>
                            </div>
                        </center>
                    </div>
                </form>

            </div>

        </div>
    </div>


</body>
<script>
    $('.btn-number').click(function(e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function() {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    $(".input-number").keydown(function(e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>

<?php include 'includes/scripts/animation.php' ?>

</html>