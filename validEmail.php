<?php

		require 'PHPMailer/PHPMailerAutoload.php';
			 
			$mail = new PHPMailer;
			 
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->Username = 'projectrssomk@gmail.com';
			$mail->Password = 'safehouse';
			$mail->SMTPSecure = 'ssl';
			 
			$mail->From = 'projectrssomk@gmail.com';
			$mail->FromName = 'SafeHouse';
			$mail->addReplyTo('projectrssomk@gmail.com');
			$mail->WordWrap = 50;
			$mail->isHTML(true);
				$email = "jdsl@gmail.com";
				$subject = "Welcome to SafeHouse :)";
				$body = "Hi :D <br/><br/>
				Your account is ready :)<br/><br/>";
				
			$mail->addAddress($email);
			 
			$mail->Subject = $subject;
			$mail->Body    = $body;
			
			// echo "success";
			if(!$mail->send()) {
			   // echo 'Message could not be sent.';
			   echo 'Mailer Error: ' . $mail->ErrorInfo;
				// echo "Not successful";
			}
			else{
			 
			echo 'Me';
			//echo (array("msg"=>"success"));	
}

?>

<!-- //netprogramfinal@yahoo.com -->