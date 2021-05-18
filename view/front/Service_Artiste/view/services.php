<?php
session_start();
  require_once '../../../../Controller/serviceC.php';
  $bdd = getConnexion();
  if (isset($_GET['Prix']) && isset($_GET['Type'])) 
    {
      $Prix = $_GET['Prix'];
      $Type = htmlspecialchars($_GET['Type']);
      if ($Type !== "Select") 
        {
          if ($Prix == "D") 
            {
              $tri = "DESC";
            }
            else{$tri = "ASC";}
          if (!empty($_GET['Type'])) 
            {
              $services = rechercherServiceByType($tri, $Type);
            }
          else
            {
              $serviceC =  new serviceC();
              $services = $serviceC->afficherService();
              echo "sede";
            }
        }
      else
    {
      $serviceC =  new serviceC();
      $services = $serviceC->afficherService();
    }
    } 
  else
    {
      $serviceC =  new serviceC();
      $services = $serviceC->afficherService();
      if (isset($_GET['Reference'])) 
        {
          $serviceC->deleteService($_GET['Reference']);
          header('Location:services.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Bazar Culturel: Service</title>
  <link href="../assets/front/css/style.css" rel="stylesheet" >
  <link href="../assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/front/css/styleServices.css" rel="stylesheet" >
</head>
<body class="tronc">
  <section class="zone container">
    <?php include_once 'header.php'; ?>
  </section>
  <section class="container">
    <div class="corps">
      <div class="enfant">
        <h2>Services</h2>
      </div>
      <div class="bouton enfant ">
        <div class="ajout centrer">
          <a href="services.php" class="btn btn-primary">Retour au général</a>
        </div>
        <div class="Trie">
          <form action="" method = "GET" class="formulaire">
            <div class="centrer ">
              <select name="Type">
                <option>Select</option>
                <option>Photographie</option>
                <option>Sculpture</option>
                <option>Peinture</option>
                <option>Instrument</option>
                <option>Livre</option>
              </select>           
            </div>
            <div class="checkbox">
              <div class="checkbox-1">
                <label>Ordre prix: </label>
              </div>
              <div class="checkbox-3">
                <input type="checkbox" name="Prix" value="C">
              </div>
              <div class="checkbox-2">
                <label>Croissant</label>
              </div>
              <div class="checkbox-5">
                <input type="checkbox" name="Prix" value="D">
              </div>
              <div class="checkbox-4">
                <label>Décroissant</label>
              </div>
            </div>
            <div class="centrer">
              <input type="submit" name="Choix" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>

    <div class="liste enfant">
      <?php while ($a = $services-> fetch())
      {
        ?>
      <div class="box2 zone list">
        <div>
          <strong class="shop-item-title"> <?= $a['Type'] ?> </strong><br>
          Le prix de ce service est de: <?= $a['Prix'] ?>dt.<br>
          <?= $a['Description'] ?>
        </div>
        
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section>
  <?php include_once 'footer.php'; ?>
</section>
</body>
</html>