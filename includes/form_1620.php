<?php	
	if(empty($_POST['textarea_399']) || empty($_POST['input_2416']))
	{
		return false;
	}
	
	$textarea_399 = $_POST['textarea_399'];
	$input_2416 = $_POST['input_2416'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Ynet.";
	$email_body = "You have received a new message. \n\n".
				  "Textarea_399: $textarea_399 \nInput_2416: $input_2416 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>