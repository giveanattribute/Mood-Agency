 
 <?php
	$email_to = "luigibarbato0@gmail.com";
	$email_subject = "Mood prova test 01";
	$name = $_POST['name'];
	$email_from = $_POST['email'];
	$msg = $_POST['msg'];
	$email_msg = "
		Form Details

		Name:$name
		Email:$email_from
		Message:

		$msg
	";
	$headers = 'From: '.$email_from."\r\n".
 	'Reply-To: '.$email_from."\r\n" .
 	'X-Mailer: PHP/' . phpversion();
 	
	 @mail($email_to, $email_subject, $email_msg, $headers);
?>

