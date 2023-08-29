<?php ob_start();


  // Catches the submit button when it is clicked in contact.html and fills in the variables with the data in the contact form.
	if(isset($_POST['submit'])) {
		
	$to = "bigpicfoc90@gmail.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: somebodyelse@example.com";
	
  // built in method that sends variables to specific target.
	mail($to,$subject,$txt,$headers);
	
	header("Location: contact.html");
	

		
	
	}




?>