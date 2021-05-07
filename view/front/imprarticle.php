<?PHP
	include "../../controller/articleC.php";
  include_once '../../model/article.php';

	$articleC = new articleC();
	$listearticle = $articleC->afficherarticles();
  $listearticle = $articleC->triarticleD();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">
<!--titre-->
    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">
<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <script src="js/alertArticle.js"></script>
</head>

<body onload="window.print()" >
<!-- Navigation -->
    
<!-- Page Content -->
  <div class="container">
<!-- Page Heading/Breadcrumbs -->
    <p class="mt-4 mb-4">
      <br>
    </p>
    <?php
         if(isset($_GET['id']) ) {  
            $article=$articleC->recupererarticle($_GET['id']); 
		?>
    
    <div class="row">
      <div class="col-lg-8">
      <p class="partie1"><strong><?PHP echo $article['titre']; ?></strong></p>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="../<?php echo $article["image"]; ?>" alt="">
        <hr>
        <!-- Date/Time -->
        <p>Publier le <?PHP echo $article['dateA']; ?>
          par <?PHP echo $article['nomAuteur']; ?></p>
        <hr>
        <!-- Post Content -->
        <p class="lead"><?PHP echo $article['description']; ?></p>
      </div>
       <?PHP
				}
			?>        
      </div>
    </div>
  </div>
 
        
</body>
</html>
