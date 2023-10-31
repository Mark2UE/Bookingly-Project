<?php
session_start();
include 'database/database.php';
$conn = mysqli_connect("localhost", "root", '', "bookingly");
if (isset($_POST['Register_Account']) === true) {
    $Fname = $_POST['First_Name'];
    $Lname = $_POST['Last_Name'];
    $Pnumber = $_POST['Phone_Number'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Birth = $_POST['Birth_Date'];
    $status = "none";
    //  echo    $UserImage = "IMAGE123";

    $sqlresult = mysqli_query($conn, "INSERT INTO `user`(`cpnumber`,`password`,`firstname`,`lastname`,`email`,`birtdate`,`status`) 
     VALUES ('" . $Pnumber . "','" . $Password . "','" . $Fname . "','" . $Lname . "','" . $Email . "','" . $Birth . "','" . $status  . "') ");


    if (!$sqlresult) {
        header("Location: profile.php#DuplicateEntry");
    } else {

        header("Location: profile.php");
    }
} elseif (isset($_POST['update_profile']) == true) {
    $email1 = $_SESSION['EMAIL'];
    $Fname = $_POST['First_Name'];
    $Lname = $_POST['Last_Name'];
    $Pnumber = $_POST['Phone_Number'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Birth = $_POST['Date'];

    $status = $_POST['verified'];
    $sqlresult = mysqli_query($conn, "UPDATE `user` SET `cpnumber`= '" . $Pnumber . "',`password`= '" . $Password . "',`firstname`= '" . $Fname . "',`lastname`= '" . $Lname . "',`email`= '" . $Email . "',`birtdate`= '" . $Birth . "',`status`= '" . $status . "' WHERE email = '$email1'; ");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        header("Location: user-account.php");
    }
} elseif (isset($_POST['login']) == true) {
    $Email = $_POST['EMAIL'];
    $Password = $_POST['PASSWORD'];

    $sqlresult = mysqli_query($conn, "SELECT `email` , `password` FROM `user` WHERE `email` = '$Email' AND `password`= '$Password' ");
    $row = mysqli_fetch_array($sqlresult);
    if ($row[0] == $Email && $row[1] == $Password) {
        $_SESSION['EMAIL'] = $Email;
        $_SESSION['PASSWORD'] = $Password;

        echo '<script>
        alert("Login Successfully!"); 
        window.location.href = "index.php";
        </script>';
    } else {
        echo '<script>
        alert("Wrong Email or Password!"); 
        window.location.href = "index.php#NotShow";
        </script>';
    }
} elseif (isset($_GET['LogoutID']) === true) {
    session_destroy();


    echo '<script>
        alert("Account logged out successfully"); 
        window.location.href = "index.php#NotShow";
        </script>';
} elseif (isset($_POST['submit_home_type']) == true) {
    $home =  $_POST['home_type'];

    if ($home == "Apartment") {
        echo '<script>
        window.location.href = "step1.apartment.php";
        </script>';
    } elseif ($home == "House") {
        echo '<script>
        window.location.href = "step1.house.php";
        </script>';
    } elseif ($home == "Secondary Unit") {
        echo '<script>
        window.location.href = "step1.secondaryunit.php";
        </script>';
    } elseif ($home == "Unique Space") {
        echo '<script>
        window.location.href = "step1.uniquespace.php";
        </script>';
    } elseif ($home == "Bed and Breakfast") {
        echo '<script>
        window.location.href = "step1.bedandbreakfast.php";
        </script>';
    } elseif ($home == "Boutique Hotel") {
        echo '<script>
        window.location.href = "step1.boutiquehotel.php";
        </script>';
    }
} elseif (isset($_POST['submit_final_hosting']) == true) {



    $EMAIL = $_SESSION['EMAIL'];

    $to = "From: $EMAIL";

    $subject = 'Hosting Confirmation';

    $headers = "From: " . strip_tags($EMAIL) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($EMAIL) . "\r\n";
    $headers .= "CC: Bookingly@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<html><body bgcolor ="#e2aa28">';

    $message .= '<tr><td  bgcolor="#e28743" align ="center" ';
    $message .= '<center>';
    $message .= '<font size ="15" face= "TW Cen MT Condensed" color = "ffffff">';
    $message .= 'YOUR HOSTING CONFIRMATION WILL BE IN THE NEXT 24 HOURS!';
    $message .= '<img src="https://lh3.google.com/u/0/d/1Ikckpp-0GiNCSfknxPGdg3lSikJDPZJt=w1919-h1006-iv1"/>';
    $message .= '</font>';
    $message .= '</tr></td>';

    $message .= '<tr><td  width = "50%" bgcolor="#233073" align="center"> ';
    $message .= '<font size ="8" color = "ffffff"> Hi there ' .  $EMAIL . '! 
    Thank you for using the hosting feature of Bookingly. 
    Someone from our team are still evaluating your request and it will be available within 24 hours or less.
    We are looking forward to work with you and to have you in this journey.
    <br>
    -team bookingly
    
    
    ';
    $message .= '</font>';
    $message .= '<hr>';
    $message .= '<p> Bookingly.com </p>';

    $message .= '</tr></td>';
    $message .= '</center>';


    $message .= "</body></html>";



    $result = mail($to, $subject, $message, $headers);




    echo '<script>
        alert("Your hosting will be confirm in the next 24 hours!, Check Your Email!"); 
        window.location.href = "index.php";
        </script>';
} elseif (isset($_POST['submit_home_title']) == true) {



    $title = $_POST['title'];


    $sqlresult = mysqli_query($conn, "INSERT INTO `room`(`title`) 
     VALUES ('" . $title . "') ");

    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        $sqlresult = mysqli_query($conn, "select * from room WHERE title = '$title'");
        $row = mysqli_fetch_array($sqlresult);
        $_SESSION['host_id'] = $row[0];
        header("Location: step1.hosting.php");
    }
} elseif (isset($_POST['login_admin']) == true) {
    $Admin = $_POST["Admin"];
    $Pass = $_POST["Password"];

    if ($Admin === "Admin" && $Pass === "Admin") {
        echo '<script>
        alert("Login Admin Successfully"); 
        window.location.href = "admin/blank.php";
        </script>';
    } else {
        echo '<script>
        alert("Wrong Admin username or password"); 
        window.location.href = "admin.php";
        </script>';
    }
} elseif (isset($_POST['update_hosting']) === true) {
} elseif (isset($_POST['submit_renting']) === true) {


    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");





    $hosting_email = $_POST['hosting_email'];
    $renter_email = $_POST['renter_email'];
    $host_code = $_POST['host_code'];
    $amount = $_POST['amount'];
    $status = "PENDING";


    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];


    //change format for the dates
    $check_in1 = date("Y-m-d", strtotime($check_in));
    $check_out1 = date("Y-m-d", strtotime($check_out));
    $renting_code = "$host_code:$renter_email";

    $date_accpted = "PENDING_DATES//";

    $date3 = date_create($datenow);
    $date1 = date_create($check_in1);
    $diff2 = date_diff($date3, $date1);
    $date_diff =  $diff2->format("%R%a");


    if ($date_diff > 0) {

        $sqlresult = mysqli_query($conn, "select * from rent WHERE renter_email = '$renter_email' ");
        $row1 = mysqli_fetch_array($sqlresult);


        $sqlresult1 = mysqli_query($conn, "select * from rent WHERE renting_code = '$renting_code'");
        $row = mysqli_fetch_array($sqlresult1);


        //kung nag eexist sa database ibig sabihin na request na
        //this rent has already been requested!,
        if ($hosting_email  !== $renter_email) {

            if ($renting_code == $row['renting_code']) {
                echo '<script>
            alert("Error: DUPLICATE RENT!"); 
            window.location.href = "rent.php";
            </script>';
            } else {
                $sqlresult = mysqli_query($conn, "INSERT INTO `rent`(`host_code`, `renter_email`, `hosting_email`, `total_amount`, `status`,`check_in`,`check_out`,`date_accepted`,`renting_code`)
            VALUES ('" .  $host_code . "','" . $renter_email . "','" . $hosting_email . "','" . $amount . "','" . $status . "','" . $check_in1 . "','" . $check_out1 . "','" . $date_accpted . "','" . $renting_code . "')");

                if (!$sqlresult) {
                    echo '<script>
               alert("Error Occured, please try to request again!"); 
               window.location.href = "renting-user.php?HOSTCODE=' . $host_code . '";
               </script>';
                } else {
                    echo '<script>
               alert("Hello, ' . $renter_email . '  Your Rent has been requested!"); 
               window.location.href = "renting-status.php?HOSTCODE=' . $host_code . '";
               </script>';
                }
            }
        } else {

            echo '<script>
       alert("You cant request your own host!"); 
       window.location.href = "rent.php";
       </script>';
        }
    } else {
        echo '<script>
        alert("Error Request"); 
        window.location.href = "rent.php";
        </script>';
    }
} elseif (isset($_POST['submit_payment_gcash']) === true) {
    $YOUREMAIL = $_POST['RenterEmail'];
    $YOURNUMBER = $_POST['RenterNumber'];

    $HOSTEMAIL = $_POST['HostEmail'];
    $HOSTNUMBER = $_POST['HostNumber'];

    $AMOUNT = $_POST['Amount'];




    $HOSTINCODE = $_POST['rentingcode'];

    $image1 = $_FILES['image1']['tmp_name'];
    $img1 = addslashes(file_get_contents($image1));

    $sqlresult = mysqli_query($conn, "UPDATE `rent` SET `gcash_screenshot` = '" . $img1 . "',`payment_status` = 'PENDING'  WHERE `renting_code` = '" . $HOSTINCODE . "' ;");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        date_default_timezone_set('Hongkong');
        $datenow = date("Y-m-d");


        $EMAIL = $_SESSION['EMAIL'];

        $to = "From: $EMAIL";

        $subject = 'Gcash Payment Receipt';

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

	
       
			<h1 style=' font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase;'>Recipient</h1>
			<address contenteditable>
				<p>Bookingly.com <br> Gcash Payment</p>
                <br>
                <img src='https://lh3.google.com/u/0/d/1Ikckpp-0GiNCSfknxPGdg3lSikJDPZJt=w1919-h1006-iv1' style='width:100%; height:auto;'/>
			</address>
			<table style= 'font-size:30px; table-layout: fixed; width: 100%;border-collapse: separate; border-spacing: 2px;  padding: 20px;'>
				<tr>
					<th><span contenteditable>Rent Code: </span></th>
					<td><span contenteditable>$HOSTINCODE</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>$datenow</span></td>
				</tr>
                <tr>
					<th><span contenteditable>Amount</span></th>
					<td><span contenteditable>₱$AMOUNT</span></td>
				</tr>
                <hr>    
                <center><h5> Your Account</h5> </center>
				<tr>
					<th><span contenteditable>Your Email:</span></th>
					<td><span  contenteditable>$YOUREMAIL</span></td>
				</tr>
                <tr>
					<th><span contenteditable>Your Number: </span></th>
					<td><span contenteditable>$YOURNUMBER</span></td>
				</tr>
                <hr>
                <center><h5> Host Account</h5> </center>
				<tr>
					<th><span contenteditable>Host Email:</span></th>
					<td><span contenteditable>$HOSTEMAIL </span></td>
				</tr>
				<tr>
					<th><span contenteditable>Host Number:</span></th>
					<td><span  contenteditable>$HOSTNUMBER</span></td>
				</tr>
                <hr>
			</table>
		
			
		<aside>
			<h1><span contenteditable>Bookingly.com</span></h1>
			<div contenteditable>
				<p>Check other rents here <a href='http://localhost/activities/bookingly/rent.php'>@Bookingly/rent</a></p>
			</div>
		</aside>
	</body>

        ";


        $message .= '</table>';
        $message .= "</body></html>";



        $result = mail($to, $subject, $message, $headers);

        echo '<script>
        alert("Your payment is on process, Please check your email"); 
        window.location.href = "index.php";
        </script>';
    }
} elseif (isset($_POST['refund_payment_gcash'])) {

    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");

    $DECLINE_CODE = $_GET['DECLINE_CODE'];
    $Refund_Amount = $_POST['Refund_Amount'];
    $Status_Amount = $_POST['status_refund'];
    $rent_code = $_POST['rent_code'];
    $Refund_Reason = $_POST['Refund_Reason'];
    $rent_status_refund = $_POST['rent_status_refund'];


    $sqlresult = mysqli_query($conn, "UPDATE `rent` SET `status`='REFUND', `payment_status` = '" . $rent_status_refund . "',`date_accepted`='$datenow',`total_amount`=" . $Refund_Amount . ",`Reason_Refund`='" . $Refund_Reason . "' WHERE renting_code = '" . $rent_code . "';");

    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {

        echo '<script>
        alert("Refund has been made! The billing status has been updated!"); 
        window.location.href = "index.php";
        </script>';
    }
} elseif (isset($_GET['CANCEL_RENT']) === true) {

    date_default_timezone_set('Hongkong');
    $datenow = date("Y-m-d");


    $RENTING_CODE = $_GET['RENTINGID'];

    $sqlresult2 = mysqli_query($conn, "select * from rent WHERE `renting_code` = '$RENTING_CODE';"); //renting info
    $row = mysqli_fetch_array($sqlresult2);


    $sqlresult = mysqli_query($conn, "INSERT INTO `rent_logs`(`renting_code`, `host_code`, `type_of_cancel`, `renter_email`, `hoster_email`,`date`) VALUES ('$row[8]','$row[0]','CANCEL','$row[1]','$row[2]','$datenow')");
    if (!$sqlresult) {
        printf("Error: %s\n", mysqli_error($conn));
    } else {
        $sqlresult3 = mysqli_query($conn, "DELETE FROM `rent` WHERE `renting_code` = '$RENTING_CODE';");
        if (!$sqlresult3) {
            printf("Error: %s\n", mysqli_error($conn));
        } else {
            echo '<script>
            alert("Rent is CANCELLED"); 
            window.location.href = "user-rent-list-accept.php";
            </script>';
        }
    }
} else {
    echo '<script>
    alert("Error"); 
    window.location.href = "index.php";
    </script>';
}
