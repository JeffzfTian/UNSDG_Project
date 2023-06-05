<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set up the email
  $to = "jeff.tian@ucc.on.ca"
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us! We will get back to you shortly.";
  } else {
    echo "Oops! An error occurred. Please try again later.";
  }
} else {
  echo "Invalid request.";
}
?>