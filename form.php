<?
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_message = "

Name:".$name."
Email:".$email."
Message".$message."

";

mail ( "rohitrrcr@gmail.com" , " email from blahatrohit " , $email_message);
header("Location: index.html");
?>