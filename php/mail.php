<?php
//Принимаем постовые данные
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

if (mail("monologic.loggy@yandex.com", "Заявка с сайта", $msg))
 {     
 	header('location: ../thanks.html'); 
} else { 
    echo "при отправке сообщения возникли ошибки";
}
?>