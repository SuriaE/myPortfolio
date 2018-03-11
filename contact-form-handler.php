<?php
$myemail ="suriaindhu@gmail.com";
$name = $_POST['userName'];
$phone = $_POST['userPhone'];
$email = $_POST['userEmail'];
$message = $_POST['userMessage'];
$to = $myemail;
$subject = "Contact form submission: $name";
$headers = "From:$name <$email>\r\n";
$headers .= "Reply-To:Suria Prabha Ejoumale <$myemail>\r\n"; 
  $headers .= "Return-Path:$name <$email>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$email_body = "You have received a new message.".
"Here are the details:\n Name: $name \n Phone no: $phone \n Email Id: $email \n Message: $message";

$user = $email;
$user_subject = "Thank you";
$user_headers = "From:Suria Prabha Ejoumale <$myemail>\r\n";
$user_headers .= "Reply-To:$name <$email>\r\n"; 
  $user_headers .= "Return-Path:Suria Prabha Ejoumale <$myemail>\r\n";
$user_headers .= "MIME-Version: 1.0\r\n";
  $user_headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $user_headers .= "X-Priority: 3\r\n";
  $user_headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$user_body = "Thank you for the feedback.";

ini_set("SMTP", "aspmx.l.google.com");
    

mail($to,$subject,$email_body,$headers);
mail($user,$user_subject,$user_body,$user_headers);

if (mail($to,$subject,$email_body,$headers)) {
    header('Location:Thankyou.html');
}
else {
    echo "Error!";
}

?>