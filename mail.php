<?php
// display all request data and end script
// var_dump($_REQUEST);

$name = $_REQUEST['fname'];
$email = $_REQUEST['email']; 
$message = $_REQUEST['country_name'];
$phone = $_REQUEST['modal_my_mobile2'];

$mail =
    "\n name: " . $name .
    "\n email: " . $email .
    "\n country: " . $message .
    "\n phone: " . $phone  ;

$retval = mail("kishan.adfj@gmail.com", "new contact form ", $mail, "From: $name <$email> phone: $phone");


if ($retval == true) {
    echo "Message sent successfully...
      <script type='text/javascript'>
      alert('Your Message Sent Successfully');
      window.history.back();
     </script>";
} else {
    echo "Message could not be sent...";
}
 