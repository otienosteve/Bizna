<?
$name = $_POST['name'];
$email = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Number: ".$number."
Subject: ".$subject."
Message: ".$message."

";

mail ("otieno@runbox.com" , "New Client message", $email_message);
header("location: ../index.html ");
?>


