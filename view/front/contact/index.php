<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">
<!--titre-->
    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <title>mail</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-form">
        <h2>Envoyer des Emails</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="objet" required data-validation-required-message="entrez votre objet svp">
          <input type="email" name="email" class="text-box" placeholder="Email" required data-validation-required-message="entrez l'adresse mail svp">
          <textarea name="message" rows="5" placeholder="Message" required data-validation-required-message="entrez votre message svp"></textarea>
          <input type="submit" name="submit" class="send-btn" value="Envoyer">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>