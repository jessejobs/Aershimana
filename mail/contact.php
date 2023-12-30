<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "aershimana@gmail.com";

    // Set email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send email
    mail($to, $email_subject, $email_message);

    // Redirect to a thank you page (you can create this page)
    header("Location: thank_you.html");
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
}
?>
