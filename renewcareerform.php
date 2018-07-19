<?php
require 'PHPMailer/PHPMailerAutoload.php';
// require_once 'PHPMailer/class.phpmailer.php'
$firstname = $_REQUEST['first-name'] ;
$lastname = $_REQUEST['last-name'] ;
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
if (
    (strlen($firstname) <= 0)
    || (strlen($lastname) <= 0)
    || (strlen($email) <= 0)
    || !filter_var($email, FILTER_VALIDATE_EMAIL)
    || (strlen($message) <= 0)) {
    echo 'All fields are required.';
} else {
    $mail = new PHPMailer;
    // $mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'localhost';                            // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'no-reply@renewlandscapes.com';                 // SMTP username
    $mail->Password = 'wollner123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('no-reply@renewlandscapes.com', 'Mailer');
    $mail->addAddress('digdeeper@renewlandscapes.com', 'Shelby');
    $mail->addAddress('no-reply@renewlandscapes.com');     // Add 
    $mail->addCC('nick@wbrandstudio.com');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact submission from site';
    $mail->Body    = '
<html>
<body>
<h4>Name: '.$firstname.' '.$lastname.'</h3>
<br>
<h4>Email: '.$email.'</h3>
<br>
<p><strong>Message: </strong>'.$message.'</p>
</body>
</html>';
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("location: about.html");
        exit;
    }
}
?>
