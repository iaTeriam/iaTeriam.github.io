<?php
//Принимаем постовые данные
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

//Тут указываем на какой ящик посылать письмо
$to = "iaTeriam@mail.ru";
//Далее идет тема письма и само сообщение
// Тема письма
$subject = "Заявка с моего Minto";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Email:".htmlspecialchars($email)."<br />
Phone:".htmlspecialchars($phone)."<br />
Сообщение:".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: iaTeriam.sl <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>