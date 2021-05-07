<?php
$destinataire = 'celine.benbrahim@esprit.tn';
// Pour les champs $expediteur $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = 'celine.chennaoui29@gmail.com';
$objet = 'Test'; // Objet du message
$headers  = 'hi';
$message = 'Bonjour ';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
?>