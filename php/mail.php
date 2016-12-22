<?php
//Принимаем постовые данные
$uname=$_POST['uname'];
$email=$_POST['email'];
$msg=$_POST['msg'];
//Тут указываем на какой ящик посылать письмо
$to = "monologic.loggy@yandex.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($uname)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".$msg;
// Отправляем письмо при помощи функции mail();
$headers = "From: lessons <hzgde@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: ..//thanks.html');
exit();
?>