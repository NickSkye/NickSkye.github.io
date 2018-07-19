<?php 
// $captcha;
// if (isset($_POST['g-recaptcha-response'])) {
//     $captcha = $_POST['g-recaptcha-response'];
// }


// Checking For correct reCAPTCHA
// $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=SECRETKEY&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
// if (!$captcha || $response.success == false) {
//     echo "Your CAPTCHA response was wrong.";
//     exit ;
// } else {

    $to = "nick@wbrandstudio.com"; // this is your Email address 
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];

    $subject = "Renew Careers Application";
    
    // $message = $fname . " " . $lname . "s info: " . "\n\n" . $from . "\n\n Address: \n" . $_POST['addressone'] . "\n\n" . $_POST['addresstwo'] ."\n\n" . $_POST['city'] . "\n\n" . $_POST['state'] . "\n\n" . $_POST['zip'] ."\n\n" . $_POST['country'] ."\n\n" . "\n\n Make: \n" . $_POST['make'] . "\n\n Model: \n" . $_POST['model'] . "\n\n Serial: \n" . $_POST['serial'] . "\n\n Age: \n" . $_POST['age'] . "\n\n Type: \n" . $_POST['upright'] . $_POST['grand'] . "\n\n Player: \n" . $_POST['player'] . $_POST['noplayer'] .$_POST['comment'];

    $message = "<html><body>";
$message .= "<table rules='all' style='border-color: #666;' cellpadding='10'>";
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . $fname  . "</td></tr>";
$message .= "<tr><td><strong>Last Name:</strong> </td><td>" . $lname . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $from . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";

$message .= "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($_POST['comment']) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";

    $headers = "From: nick@wbrandstudio.com" ;
    $headers .= "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers2 = "From:" . $to;
   // echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header("Location: http://renewlandscapes.com/"); /* Redirect browser */
exit();
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
 // }
?>