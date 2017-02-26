<?php
	if ($_POST) {
		$name = $_POST['inputname'];
		$email = $_POST['inputemail'];
		$subject = $_POST['inputsubject'];
		$message = $_POST['inputmessage'];
		
		
		$to = "ateneoactm.campimc@gmail.com";
		$from = $email;
		
		$body = "Name: $name\n Message: $message\n";
					
		mail($to, "Camp IMC Inquiry - ".$subject, $body, "From: ".$name." <".$email.">\r\n"
			."Reply-To: ".$email."\r\n"
			."X-Mailer: PHP/" . phpversion());
		
	}
?>