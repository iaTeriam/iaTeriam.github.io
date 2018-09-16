<?php 
	$name= $_POST ['name'];
  $email= $_POST ['email'];
	$phone= $_POST ['phone'];
	$message= $_POST ['message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.email.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'iaTeriam@mail.ru';                 // SMTP username
$mail->Password = 'WWTIAM3121999';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('iaTeriam@mail.ru', 'Minto');
$mail->addAddress('iaTeriam@mail.ru', 'Teriam');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Сообщение с сайта Minto';
$mail->Body    = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Cообщение: ".htmlspecialchars($message).;

$mail->AltBody = 'Это сообщение в формате plain text';

if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    /*$result = "false";
    echo json_encode($result);*/
} else {
  echo 'Message has been sent';
  /*$result = "true";
  echo json_encode($result);*/
}
?>