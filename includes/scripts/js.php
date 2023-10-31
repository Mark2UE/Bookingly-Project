<script>
    function onlyNumberKey(evt) {

        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

<script>
    function ageCalculator() {
        var userinput = document.getElementById("DOB").value;
        var dob = new Date(userinput);
        if (userinput == null || userinput == '') {
            document.getElementById("message").innerHTML = "**Choose a date please!";
            return false;
        } else {


            var month_diff = Date.now() - dob.getTime();
            var age_dt = new Date(month_diff);
            var year = age_dt.getUTCFullYear();
            var age = Math.abs(year - 1970);

            return document.getElementById("age").value =
                age;
        }
    }
</script>

<script>
    let text = "";

    for (let i = 0; i < 6; i++) {
        text += Math.floor(Math.random() * 10);
    }

    document.getElementById("code").value = text;
</script>

<script>
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>