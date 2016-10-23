<?php	
	if(empty($_POST['name']) || empty($_POST['prénom']) || empty($_POST['email']) || empty($_POST['adresse']) || empty($_POST['tel']) || empty($_POST['identifiant']) || empty($_POST['mdp']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$prénom = $_POST['prénom'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$tel = $_POST['tel'];
	$identifiant = $_POST['identifiant'];
	$mdp = $_POST['mdp'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Ynet.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nPrénom: $prénom \nEmail: $email \nAdresse: $adresse \nTel: $tel \nIdentifiant: $identifiant \nMdp: $mdp \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $tel";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>