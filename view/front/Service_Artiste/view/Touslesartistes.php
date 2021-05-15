<?php
  require_once '../../../../controller/artisteC.php';
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
            </div>
          </section>
      </section>
<?php 
}


?>