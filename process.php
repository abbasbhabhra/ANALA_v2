<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your email address
    $toEmail = "jekodi3888@estudys.com";

    // Get form data
    $yourName = $_POST["name"];
    $yourMail = $_POST["email"];
    $yourMessage = $_POST["message"];

    require "SMTP.php";
	require "PHPMailer.php";
	require "Exception.php";

    use PHPMailer;
    use SMTP;
    use Exception;

    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = "smtp.example.com"; // Replace with your SMTP server hostname
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = "jekodi3888@estudys.com"; // Replace with your email address
        $mail->Password = "password"; // Replace with your email password

        // Set sender and recipient
        $mail->setFrom($yourMail, $yourName);
        $mail->addAddress("jekodi3888@estudys.com", "Jeki Odi");

        // Email subject and message
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "Inquiry for Anala by - " $yourName;
        $mail->Body = $yourMessage;

        // Send the email
        $mail->send();

        // Email sent successfully, redirect to thankyou.html
        header("Location: thankyou.html");
        exit(); // Exit to prevent further execution of the script
    } catch (Exception $e) {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // If the request is not a POST request
    echo "Invalid request method.";
}
?>
