<?php
$username = $_POST['username'];
$email = $_POST['email'];
$ask = $_POST['ask'];
$r = $_GET['r'];

$username = htmlspecialchars($username);
$email = htmlspecialchars($email);
$ask = htmlspecialchars($ask);

$username = urldecode($username);
$email = urldecode($email);
$ask = urldecode($ask);

$username = trim($username);
$email = trim($email);
$ask = trim($ask);

if (mail("e.bachura@radian-company.ru", "Не нашли ответ на вопрос? Напишите нам.", "Имя:".$username.". E-mail: ".$email ,$ask." \r\n"))
{
   echo '<script>window.location.href = "'.$r.'";</script>';
} else {
   echo "при отправке сообщения возникли ошибки";
};

?>