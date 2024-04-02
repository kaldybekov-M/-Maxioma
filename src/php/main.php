<?
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$message = $_POST['message'];
if (mail("kaldybekovmedeu@gmail.com",
"ФИО: " .$name."\n".
'Компания: ' .$company. "\n".
'email: ' .$email. "\n".
'сообщение: ' .$message. "\r\n")
){
  echo('отправлено')
}else{
  echo('не отправлено')
}
?>