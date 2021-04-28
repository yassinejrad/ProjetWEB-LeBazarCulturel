<?PHP
	include "../../controller/articleC.php";
  include_once '../../model/article.php';

	$articleC = new articleC();
	$listearticle = $articleC->afficherarticles();
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

<body>
<!-- Navigation -->
    <?php include_once 'header.php'; ?>
<!-- Page Content -->
  <div class="container">
<!-- Page Heading/Breadcrumbs -->
    <p class="mt-4 mb-4">
      <br>
    </p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Acceuil</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>
    <div class="row">
    <tr></tr>
<!-- Blog Entries Column -->
      <div class="col-md-8">
			<?PHP
				foreach($listearticle as $article){
			?>
          <div class="card mb-4">
          <img class="card-img-top" src="../<?php echo $article["image"]; ?>"  alt="image">
          <div class="card-body">
            <h2 class="card-title"><?PHP echo $article['titre']; ?></h2>
            <p class="card-text"><?PHP echo $article['description']; ?></p> 
            <a href="#" class="btn btn-primary">Suite &rarr;</a>
<!--modifier et supprimer -->
              <a href="modifierarticle.php?id=<?PHP echo $article['idA']; ?>" class="btn btn-primary">Modifier un article </a> 
              <a href="supprimerarticle.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA" class="btn btn-primary">Supprimer un article </a>
          </div>
          <div class="card-footer text-muted">
          Publier le <?PHP echo $article['dateA']; ?>
          par <?PHP echo $article['nomAuteur']; ?>
          </div>
        </div> 
			<?PHP
				}
			?>
<!-- ajouter-->
        <a href="addarticle.php" class="btn btn-primary">Ajouter un article </a>
      </div>
<!-- Sidebar Widgets Column -->
      <div class="col-md-4">
<!-- recherche-->
        <div class="card mb-4">
          <h5 class="card-header">Recherche</h5>
          <div class="card-body">
              <form  action="chercherarticle.php" method="POST" >
              <div class="input-group">
              <span class="input-group-append">
         <input type="text" name="titre" class="form-control" placeholder="Rechercher un blog..." maxlength="50">
        <input type="submit" value="recherche" name="rechercher">  
         </form>
              </span>
            </div>
          </div>
        </div>
<!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Article</h5>
          <div class="card-body">
            Ne ratter pas nos articles chaque samedi.
          </div>
        </div>
      </div>
    </div>
  </div>
        <?php include_once 'footer.php'; ?>
</body>
</html>
