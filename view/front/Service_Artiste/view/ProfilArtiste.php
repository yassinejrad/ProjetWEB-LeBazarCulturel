<?php
session_start();
  require_once '../config.php';
  require_once '../../../../controller/artisteC.php';
  $db = getConnexion();
if(isset($_GET['id']))
{
  $getid = intval($_GET['id']);
  $artisteC = new artisteC();
  $userinfo = $artisteC->getArtisteByid($getid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="../assets/front/css/style.css" rel="stylesheet" >
  <link href="../assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/front/css/styleServices.css" rel="stylesheet" >
  <title>Le Bazar Culturel: profil</title>
</head>
<body>  
  <?php include_once 'header.php'; ?>
  <?php 
  if ((isset($_SESSION['id']) && $userinfo['id'] == $_SESSION['id']) && $getid == 0) //Connecté en tant qu'Admin
  

  {
    $artisteC =  new artisteC();
    $artistes = $artisteC->afficherArtiste();
    ?> 
    <link href="../assets/front/css/style.css" rel="stylesheet" >
  <link href="../assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/front/css/styleServices.css" rel="stylesheet" >
    <section class="">
      <section class="container">
        <?php include_once 'header.php'; ?>
      </section>
      <section class="mastosection" align="middle"  >
        <h2>Liste de tous les comptes artistes créés</h2>
      </section>
        <?php foreach ($artistes as $artiste)
        { 
        ?>
          <section class="container list">
            <div class="box2 zone">
              <div>
                id: <?= $artiste['id'] ?>
                Nom: <b><?= $artiste['Nom'] ?></b><br/>
                Prénom: <b><?= $artiste['Prenom'] ?></b><br/>
                Adresse Mail: <b><?= $artiste['Email'] ?></b><br/>
                Numéro de téléphone: <b><?= $artiste['Numero'] ?></b><br/>
              </div>

              <div>
                Type de spécialité: <b> <?= $artiste['Type'] ?></b><br/>
                Adresse: <b><?= $artiste['Adresse'] ?></b><br/>
                Code postal: <b><?= $artiste['Postal'] ?></b><br/>
              </div>

              <div align="middle">
                <span class="mod grpbtn">
                  <a type="button" class="btn btn-primary" href ="ModifAdmin.php?id=<?= $artiste['id'] ?>">Modifier</a>
                </span>
                <span class="mod">
                  <a type="button" class="btn btn-primary" href ="SupprimerAdmin.php?id=<?= $artiste['id'] ?>">Supprimer</a>
                </span>
              </div>
            </div>
          </section>
      </section>
<?php 
}
}
else
{
  ?>
  <section class="container mastosection">
    <h2>Profile de: <?php echo $userinfo['Prenom'], " ", $userinfo['Nom']; ?> </h2>
    <?php if (isset($_SESSION['id']) && $userinfo['id'] == $_SESSION['id'] )//Utilisateur
    

    {
      ?>

  <link href="../assets/front/css/style.css" rel="stylesheet" >
  <link href="../assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/front/css/styleServices.css" rel="stylesheet" >
      <div class="box">
        <div class="box1">
          <div>
            Nom:<br/>
            Prenom: <br/>
            Adresse Mail: <br/>
            Numéro de téléphone: <br/>
            Type de spécialité: <br/>
            Adresse: <br/>
            Code postal: <br/>
          </div>
          <div>
            <b><?php echo $userinfo['Nom']?></b><br/>
            <b><?php echo $userinfo['Prenom']?></b><br/>
            <b><?php echo $userinfo['Email']?></b><br/>
            <b><?php echo $userinfo['Numero']?></b><br/>
            <b><?php echo $userinfo['Type']?></b><br/>
            <b><?php echo $userinfo['Adresse']?></b><br/>
            <b><?php echo $userinfo['Postal']?></b>
          </div>
        </div>
        <div class="boxrow">
          <div>
            <a class="btn btn-primary" href="deconnexion.php "><b>Déconnexion</b></a><br/>
          </div>
          <div>
            <a class="btn btn-primary" href="modifierProfil.php"><b>Modifier</b> mon profil</a><br/>
          </div>
          <div>
            <a type="button" class="btn btn-primary" href ="supprimerProfil.php"><b>Supprimer</b> mon profil</a><br>
          </div>
          <div>
            <a class="btn btn-primary" href="deconnexion.php ">Aller à la page <b>Evènement</b></a><br/>
          </div>
          <div>
            <a class="btn btn-primary" href="services.php">Aller à la page <b>Service</b></a> <br/>
          </div>
           <div>
            <a class="btn btn-primary" href="addService.php?id=<?= $userinfo['id'] ?>">Aller à la page <b>Ajout Service</b></a> <br/>
          </div>
          <div>
            <a class="btn btn-primary" href="servicePerso.php?id=<?= $userinfo['id'] ?>">Afficher mes <b>demande service</b></a> <br/>
          </div>
        </div>
      </div>
  </section>
  <?php }}}?>
  <?php include_once 'footer.php';?>
</body>
</html>

