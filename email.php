<?php
$to_email = "janvijahan4546@gmail.com";
$subject = "Ticket Confirmation";
$body = "Booking confirmed. You'll get the receipt soon.";
$headers = "From: megacinemahall@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
  echo header("location: http://localhost/PHP/booking.php");
} else {
    echo "Email sending failed...";
}
?>
