<html>
<body>
<?php
if (isset($_POST['email']))
  {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	// $type = $_POST['type'];
	$subject1 = "Enquiry from Website";
	$messages = $_POST['messages'];

// multiple recipients
$to  = 'divyanshrajput126@gmail.com' . ', '; // note the comma
$to .= 'info@irzacabservice.com' . ', ';
$to .= 'divyanshr264@gmail.com' . ', ';




// subject
$subject = 'Email From Website';

// message
	$message = '<html><body>';
	$message .= '<table width="100%" rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
	$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . $phone . "</td></tr>";
	$message .= "<tr><td><strong>Subject:</strong> </td><td>" . $subject1 . "</td></tr>";
	$message .= "<tr><td><strong>Message:</strong> </td><td>" . $messages . "</td></tr>";
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

<meta http-equiv="refresh" content="0; URL='https://irzacabservice.com/contact.html'" />


</body>
</html>