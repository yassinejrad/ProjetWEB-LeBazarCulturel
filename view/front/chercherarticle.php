<?php
include "../../controller/articleC.php";
include_once '../../model/article.php';
$error = "";

    // create article
<<<<<<< HEAD
 // $article = null;
=======
    $article = null;
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf

    // create an instance of the controller
    $articleC = new articleC();
    
        if(isset($_POST['titre']) ) { //S'il y a eu une recherche en crée le tableau avec le résultat
<<<<<<< HEAD
        
            $listearticle=$articleC->chercher($_POST['titre']);

    ?>
    
=======
            $titre=$_POST['titre'];
            $listearticle=$articleC->chercher($titre);

    ?>
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
</head>
<<<<<<< HEAD
    <body >
=======
    <body>
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
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
        <a href="blog.php">Blog</a>
      </li>
      <li class="breadcrumb-item active">Recherche Blog</li>
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
          </div>
          <div class="card-footer text-muted">
          Publier le <?PHP echo $article['dateA']; ?>
          par <?PHP echo $article['nomAuteur']; ?>
<<<<<<< HEAD
          
=======
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
          </div>
         
        </div>
			<?PHP
				}
			?>
        
    <?php
        }
        
    ?>
    
<<<<<<< HEAD
=======
    
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
    <?php include_once 'footer.php'; ?>
    </body>
</html>