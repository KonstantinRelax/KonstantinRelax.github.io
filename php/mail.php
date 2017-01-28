<?php
//Принимаем постовые данные
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
//Тут указываем на какой ящик посылать письмо
$to = "monologic.loggy@yandex.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Отзыв с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($uname)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Сообщение: ".$msg;
// Отправляем письмо при помощи функции mail();
$headers = "From: Homepage <hzgde@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: ..//thanks.html');
exit();
?>