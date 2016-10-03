<?php  

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

$to = "davidmasih2000@gmail.com,";
$subject = "Contact Query For Order Form";
$message = "Your Name:  $firstname \n".
           "Your Email:  $email \n" .
           "Your Phone No:  $phone \n" .
           "Your Message:  $msg ";

mail($to, $subject, $message, "From: " .$email);

echo "Thank You for submitting the form." ."<br/>";
echo "Your Name:  $firstname \n" ."<br/>";
echo "Your Phone No:  $email \n" ."<br/>";
echo "Your Email:  $phone \n" ."<br/>";
echo "Your Message:  $msg ";



?>