
<?php 
	


	use PHPMailer\PHPMailer\PHPMailer;

	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';

	$mail = new PHPMailer(true);
	$alert='';

	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth=true;
			$mail->Username='ez.groups.dev@gmail.com';
			$mail->Password='k@rim##1';
			$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port='587';
			 $mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
					)
				);
			$mail->setFrom('ez.groups.dev@gmail.com');
			$mail->addAddress('ez.groups.dev@gmail.com');

			$mail->isHTML(true);
			$mail->Subject='Message Received (Contact page)';
			$mail->Body ='<h3>	Name: '.$name.'<br>Email :' .$email.'<br>Message : '.$message.' </h3>';
			$mail->send();
			
		echo "<span style='color: green;font-size:40px; font-weight:500;'> Your message sent successfully!</span>";

		# code...
	}else{
		echo "not sent";
		 }

 ?>
