<?php 

$fio = $_POST['uname'];
$email = $_POST['phone'];
$msg = $_POST['msg'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$msg = htmlspecialchars($msg);
$fio = urldecode($fio);
$msg = urldecode($msg);
$fio = trim($fio);
$msg = trim($msg);
//Тут указываем на какой ящик посылать письмо
$msg = 'Имя: '.$fio.'\nPhone: '.$email.'\n'.$msg;
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'monologic.loggy@mail.ru';                 // SMTP username
$mail->Password = 'monologic74';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('monologic.loggy@mail.ru', 'Ildar S. Zhiganshin');
$mail->addAddress('monologic.loggy@yandex.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Форма на сайте';
$mail->Body    = $msg;
$mail->AltBody = 'Это сообщение в формате plain text';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location: ../thanks.html'); 
}

?>