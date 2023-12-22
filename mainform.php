<html>
<body>
<?php
if (isset($_POST['email']))
  {
	$subject1 = "Booking from Website";
	$pickup = $_POST['pickup'];
	$drop = $_POST['drop'];
	$pick_date = $_POST['pick_date'];
	$drop_date = $_POST['drop_date'];
	$pick_time = $_POST['pick_time'];
	$phone = $_POST['phone'];
	$car = $_POST['car'];

// multiple recipients
$to  = 'divyanshrajput126@gmail.com' . ', '; // note the comma
$to .= 'info@irzacabservice.com' . ', ';
$to .= 'divyanshr264@gmail.com' . ', ';

// subject
$subject = 'Booking From Website';

// message
	$message = '<html><body>';
	$message .= '<table width="100%" rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr><td><strong>Subject:</strong> </td><td>" . $subject1 . "</td></tr>";
	$message .= "<tr style='background: #eee;'><td><strong>Pickup Location:</strong> </td><td>" . $pickup . "</td></tr>";
	$message .= "<tr><td><strong>Drop Location:</strong> </td><td>" . $drop . "</td></tr>";
	$message .= "<tr><td><strong>Pickup Date :</strong> </td><td>" . $pick_date . "</td></tr>";
	$message .= "<tr><td><strong>Drop Date:</strong> </td><td>" . $drop_date . "</td></tr>";
	$message .= "<tr><td><strong>Pickup Time:</strong> </td><td>" . $pick_time . "</td></tr>";
	$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . $phone . "</td></tr>";
	$message .= "<tr><td><strong>Car:</strong> </td><td>" . $car . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.1' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

    echo("<p>Thank You <BR><Br></p>");

}
else
{
  echo "email not sent";
}
?>

<meta http-equiv="refresh" content="0; URL='https://irzacabservice.com'" />


</body>
</html>