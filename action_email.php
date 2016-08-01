<?php


require 'vendor/autoload.php';
$mail = new PHPMailer;

$name= $_POST['fname'];
$email=$_POST['fmail'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shivu.narang@gmail.com';                 // SMTP username
$mail->Password = 'DZPATEL@';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('shivu.narang@gmail.com', 'Shivani Narang');
$mail->addAddress($email, $name);     // Add a recipient
$mail->addAddress('shivu.narang@gmail.com');
$mail->addReplyTo('shivu.narang@gmail.com', 'Shivani Narang');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Professional Painters Confirmation';
$mail->Body    = 'Thank you for using Professional Painters <b>Successfully registered</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	header('Location:welcome.html');
}
?>
 