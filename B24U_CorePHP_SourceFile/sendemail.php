<?php
require('mail/class.phpmailer.php');
require('mail/class.smtp.php');
function sendOTP($email,$subject,$body)	
{
	$sentemail="temp@xyz.com";  /* Change Email Address (Use Only Gmail Because SMTP Host is Gmail)*/
	$sentpassword="temp1234";	/* Change Password */
	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->isHTML(true);
	$mail->SMTPDebug  = 1;                     
	$mail->SMTPAuth   = true;                  
	$mail->SMTPSecure = "ssl";                 
	$mail->Host       = "smtp.gmail.com";      
	$mail->Port        = '465';             
	$mail->AddAddress($email);
	$mail->Username   =$sentemail;  
	$mail->Password   =$sentpassword;            
	$mail->SetFrom($sentemail,'Smit Shah');
	$mail->Subject    = $subject;
	$mail->Body    = $body;
	$result=$mail->Send();
	if(!$result)
	{
		echo "Mailer Error:" . $mail -> ErrorInfo;
	}
	else
	{
		return $result;
	}
}
?>