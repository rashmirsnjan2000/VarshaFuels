<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submitContact']))
{
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fuelsvarsha@gmail.com';                     //SMTP username
    $mail->Password   = 'iglbfcwbywbjjacp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption for SMTPS use 465
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fuelsvarsha@gmail.com', 'Varsha Fuels');
    $mail->addAddress('fuelsvarsha@gmail.com', 'Varsha Fuels');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Visitor';
    $mail->Body    = '<h3>Visitor Details</h3>
    <h4>Name : '.$fullname.'</h4>
    <h4>Email : '.$email.'</h4>
    <h4>Number : '.$number.'</h4>
    <h4>Message : '.$message.'</h4>
    
    ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail->send()){
    $_SESSION['status'] = "Thank you for contact us - team VARSHA FUELS";
    header("Location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);
}
else{
    $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);
}
    
    
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
else{
    header('Location: index.php');
    exit(0);
}
?>