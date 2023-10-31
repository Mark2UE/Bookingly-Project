<?php
include 'database/database.php';

if (isset($_POST['Register'])) {

    $lowerf = strtolower($_POST['firstname']);
    $lowerl = strtolower($_POST['lastname']);

    $lFIRSTNAME = ucwords($lowerf);
    $lLASTNAME = ucwords($lowerl);
    $lEMAIL = $_POST['email'];
    $lBIRTHDAY = $_POST['birth'];
    $lPASSWORD = $_POST['password'];
    $lCODE = $_POST['code'];
    $lPHONENO = $_POST['phoneno'];
    $VERIFY = $_POST['verified'];


    //$lPRONO = $_POST['prodno'];

    $_SESSION['status'] = $VERIFY;
    $_SESSION['lfname'] = $lFIRSTNAME;
    $_SESSION['llname'] =  $lLASTNAME;
    $_SESSION['lemail'] = $lEMAIL;
    $_SESSION['lbday'] = $lBIRTHDAY;
    $_SESSION['lpass'] = $lPASSWORD;
    $_SESSION['lphone'] = $lPHONENO;
    $_SESSION['code'] = $lCODE;
    $_SESSION['id'] = '';
    $_SESSION['firstname'] = '';

    $sql = "SELECT email FROM user WHERE email = '$lEMAIL'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Sorry, Email already registered")</script>';
    } else {
        $sql = "SELECT email FROM user WHERE email = '$lEMAIL'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo '<script>alert("Email is already registered")</script>';
        } else {


            $EMAIL = $_SESSION['lemail'];
            $NAME = $_SESSION['lfname'];
            $CODE = $_SESSION['code'];


            date_default_timezone_set('Hongkong');
            $datenow = date("Y-m-d");




            $to = "From: $EMAIL";

            $subject = 'BOOKINGLY EMAIL CONFIRMATION';

            $headers = "From: " . strip_tags($EMAIL) . "\r\n";
            $headers .= "Reply-To: " . strip_tags($EMAIL) . "\r\n";
            $headers .= "CC: Bookingly@example.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = '<html><body style="border: 0;
                box-sizing: content-box;
                color: inherit;
        
                font-size: 20px;
            
                background: rgb(194, 232, 241);
                background: linear-gradient(175deg, rgba(194, 232, 241, 1) 12%, rgba(252, 231, 188, 1) 87%);
            
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                list-style: none;
                margin: 200px;
                padding: 50px;">';
            $message .= "
        
            
               
                    <h1 style=' font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase;'>Bookingly Email</h1>
                    <address contenteditable>
                        <p>Bookingly.com <br> Email Confirmation</p>
                        <br>
                        <img src='https://lh3.google.com/u/0/d/1Ikckpp-0GiNCSfknxPGdg3lSikJDPZJt=w1919-h1006-iv1' style='width:100%; height:auto;'/>
                    </address>

                    <center>
                    <h5>Hello " . $EMAIL . " This is your OTP CODE</h5>

                    <h1  style='font-size: 150px;'>" . $CODE . "</h1>

                    </center>
                 
                    
                <aside>
                    <h1><span contenteditable>Bookingly.com</span></h1>
                </aside>
            </body>
        
                ";


            $message .= '</table>';
            $message .= "</body></html>";



            $result = mail($to, $subject, $message, $headers);

            echo '<script>
              
                window.location.href = "Verify.php";
                </script>';
        }
    }
}

if (isset($_POST['resend'])) {
    $EMAIL = $_SESSION['lemail'];
    $NAME = $_SESSION['lfname'];
    $CODE = $_SESSION['code'];


    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");




    $to = "From: $EMAIL";

    $subject = 'BOOKINGLY EMAIL CONFIRMATION (RESEND)';

    $headers = "From: " . strip_tags($EMAIL) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($EMAIL) . "\r\n";
    $headers .= "CC: Bookingly@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<html><body style="border: 0;
                box-sizing: content-box;
                color: inherit;
        
                font-size: 20px;
            
                background: rgb(194, 232, 241);
                background: linear-gradient(175deg, rgba(194, 232, 241, 1) 12%, rgba(252, 231, 188, 1) 87%);
            
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
                list-style: none;
                margin: 200px;
                padding: 50px;">';
    $message .= "
        
            
               
                    <h1 style=' font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase;'>Bookingly Email</h1>
                    <address contenteditable>
                        <p>Bookingly.com <br> Email Confirmation</p>
                        <br>
                        <img src='https://lh3.google.com/u/0/d/1Ikckpp-0GiNCSfknxPGdg3lSikJDPZJt=w1919-h1006-iv1' style='width:100%; height:auto;'/>
                    </address>

                    <center>
                    <h5>Hello " . $EMAIL . " This is your OTP CODE</h5>

                    <h1  style='font-size: 150px;'>" . $CODE . "</h1>

                    </center>
                 
                    
                <aside>
                    <h1><span contenteditable>Bookingly.com</span></h1>
                </aside>
            </body>
        
                ";


    $message .= '</table>';
    $message .= "</body></html>";



    $result = mail($to, $subject, $message, $headers);

    echo '<script>
              
                window.location.href = "Verify.php";
                </script>';
}

if (isset($_POST['verify'])) {
    $VERIFY = $_SESSION['status'];
    $FIRSTNAME =  $_SESSION['lfname'];
    $LASTNAME = $_SESSION['llname'];
    $EMAIL = $_SESSION['lemail'];
    $BIRTHDAY = $_SESSION['lbday'];

    $PASSWORD = $_SESSION['lpass'];



    $PHONE = $_SESSION['lphone'];
    //$PRONO = $_POST['prodno'];

    echo "$PHONE";

    $vercode = $_POST['verifycode'];
    if ($vercode == $CODE) {

        $sql = "INSERT INTO `user`(`cpnumber`,`password`,`firstname`,`lastname`,`email`,`birtdate`,`status`) 
    VALUES ('" .  $PHONE . "','" .  $PASSWORD . "','" . $FIRSTNAME . "','" .  $LASTNAME . "','" .  $EMAIL . "','" . $BIRTHDAY . "','" . $VERIFY . "') ";

        if ($conn->query($sql) === TRUE) {

            $sql = "SELECT * FROM user WHERE email = '$EMAIL' AND password = '$PASSWORD'";
            $result = mysqli_query($conn, $sql);

            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row["email"];
            }

            echo '<script>
                 alert("Register Successful!"); 
                 window.location.href = "register.php";
                 </script>';
        } else {
            echo "<font style='font-size:16px; color:#bc4749; margin-top:20px'>Error Inserting Data: " . $conn->error . "</font>";
        }
    } else {
        echo '<script>alert("Incorrect Verification code");</script>';
    }
}
