<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'celine.chennaoui29@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = ''; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('celine.chennaoui29@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('dhia.aderssa@esprit.tn' ); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
   $mail->addAddress('celine.benbrahim@esprit.tn');
   $mail->addAddress('rostom.charni@esprit.tn');
   $mail->addAddress('ahmed.hbaieb@esprit.tn');
   //$mail->addAddress('linda.ouerfelli@esprit.tn');
   
    $mail->isHTML(true);
    $mail->Subject = "$name";
    $mail->Body = "<h3> $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message envoyé avec succée</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
