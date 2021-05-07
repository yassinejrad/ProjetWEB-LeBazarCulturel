
<?php
// Create the email and send the message
$to = "celine.benbrahim@esprit.tn"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = " alerte Promotion";
$body = "nous avons une nouvelle promotion.\n\n";
$header = "From: celine.chennaoui29@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: celine.chennaoui29@gmail.com\n";	

if(mail($to, $subject, $body, $header))
{
   echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
   echo "Votre message n'a pas pu être envoyé";
}
?>
