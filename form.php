<meta https-equiv='refresh' content='1; url=https://nesmelov.ru'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['temma'])) {$temma = $_POST['temma']; if ($temma == '') {unset($temma);}}
if (isset($_POST['massage'])) {$massage = $_POST['massage']; if ($massage == '') {unset($massage);}}
  
if (isset($name) && isset($email) && isset($temma) && isset($massage)){
  
$address = "site@yandex.ru";
$mes = "Имя: $name \nE-mail: $email \nТема: $temma \nТекст: $massage";
$send = mail ($address,$temma,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";}
  
}
else
{
echo "Заполните все поля";
}
?>
