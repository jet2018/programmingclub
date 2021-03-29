<?php
$receiving_email_address = "2018bcs059@std.must.ac.ug";
$to = $receiving_email_address;
$from_name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['message'];

if (empty($to) || empty($from_name) || empty($from_email) || empty($subject) || empty($body)) {
 echo "Some fields are still empty";
}else{
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "From: " . $from_email." ".$from_name."\r\n";
  try {
    $send = mail($to, $subject, $body, $headers)
    if ($send) {
      echo "Email sent successfully";
    }else{
      echo "An error occurred and your email was not sent";
    }
  } catch (Exception $e) {
    echo "No server response right now";
  }

}

?>
