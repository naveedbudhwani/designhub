<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files (use your own path if needed)
require './PHPMailer.php';
require './SMTP.php';
require './Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data safely
    $name     = $_POST['name'] ?? 'N/A';
    $email    = $_POST['email'] ?? 'N/A';
    $phone    = $_POST['phone'] ?? 'N/A';
    $services = $_POST['services'] ?? 'N/A';
    $messageText = $_POST['message'] ?? 'N/A';

    // Email HTML template
    $message = "
    <html><body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Service:</strong> {$services}</p>
        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($messageText)) . "</p>
    </body></html>
    ";

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@alphaweblabs.com';  // your Hostinger email
        $mail->Password = 'Digitechs@1123';         // your Titan password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Email Setup
        $mail->setFrom('info@alphaweblabs.com', 'Alpha Web Labs');
        $mail->addAddress('info@alphaweblabs.com'); // receiver
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Lead: {$services}";
        $mail->Body    = $message;

        // Send mail
        $mail->send();

        // Redirect to thank-you page
        header('Location: thankyou.php');
        exit();

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
