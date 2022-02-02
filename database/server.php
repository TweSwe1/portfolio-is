<?php

header("Access-Control-Allow-Origin: *");

use PHPMailer\PHPMailer\PHPMailer;

$method = $_SERVER['REQUEST_METHOD'];


	if ( $method === 'POST' )
	{
		$name = trim($_POST["name"]);
	  	$email  = trim($_POST["email"]);
	  	$message  = trim($_POST["message"]);
	
	  	echo $name;
	  	echo "</br>";
	  	echo $email;
	  	echo "</br>";
	  	echo $message;
	 	
	 	require_once "PHPMailer/PHPMailer.php";
	 	require_once "PHPMailer/SMTP.php";
	 	require_once "PHPMailer/Exception.php";

	 	$mail = new PHPMailer();

	 	$mail->CharSet = 'UTF-8';
	 	$mail->isSMTP();
	 	$mail->SMTPDebug = 2;

	 	$mail->Host = "smtp.gmail.com";
	 	$mail->SMTPAuth = true;
	 	$mail->Username = "freelance.ilya.s.2022@gmail.com";
	 	$mail->Password = "zdraste1234";
	 	$mail->Port = 465;
	 	$mail->SMTPSecure = "ssl";

	 	$mail->isHTML(true);
	 	$mail->setFrom("freelance.ilya.s.2022@gmail.com");
	 	$mail->addAddress('wwwis2001@gmail.com');


	 	$mail->Subject = 'Заявка';
		$mail->Body    = 'Имя: '.$name .'<br>Почта:'.$email.'<br>Сообщение:'.$message.'';
		$mail->AltBody = '';

		if ($mail->send())
		{
			echo "Okay";
		}
		else
		{
			echo "ERROR";
		}

	}


?>


