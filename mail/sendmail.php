<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

/*if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['message'])){

	$secret = '6LePw7UUAAAAACwGV1zR1PAo5u2Wzi-XHqydpcoW';

	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

	$responseData = json_decode($verifyResponse);

	if($responseData->success){
*/

		if (!empty($_POST)) {
//	print_r($_POST);

			$name=$_POST['name'];
			$email=$_POST['email'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];


			$mail = new PHPMailer(true); 
			try {
    //Server settings
				$mail->SMTPDebug = 0;
				$mail->isSMTP();
				$mail->Host = 'mail.velciti.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'contact@velciti.com';
				$mail->Password = '-6&1yJ_vQZ6t';
				$mail->SMTPSecure = 'tls';
				$mail->Port = 587;

				$mail->setFrom('contact@velciti.com', 'Admin');
				$mail->addAddress('contact@velciti.com', 'Recipient1');

				$mail->isHTML(true);								 
				$mail->Subject = $subject; 
				$mail->Body = "Mail Sender Details<br><br>name:$name<br>email:$email<br>subject:$subject<br>message:$message<br>"; 
				$mail->AltBody = "Mail Sender Details \r\n name:$name \r\n email:$email \r\n  subject:$subject \r\n message:$message \r\n ";
				$mail->send();

				header( 'Location:http://velciti.com/highwayvelciti/demo/thanks.php' ) ; 

			} catch (Exception $e) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
		}
//	}
//}

//s				header( 'Location:http://velciti.com/highwayvelciti/demo/contact.php' ) ; 

