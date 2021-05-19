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
    <link href="dark.css" rel="stylesheet">
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
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles2.css" rel="stylesheet" >
       

</head>

<body  >
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
        <a href="acceuil.php">Acceuil</a>
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
          
          <a class="portfolio-item" href="readmoreA.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA">
                            <div class="caption">
                                <div class="caption-content">
                                
                                    <div class="h2"><?PHP echo $article['titre']; ?></div>
                                    <p class="mb-0"><?PHP echo substr($article['description'], 0, 36).'...'; ?></p>
                                </div>
                            </div>
                            
                            <img class="card-img-top"  src="<?php echo $article["image"]; ?>"  alt="image"  />
                            
                            </a>
          <div class="card-footer text-muted"  >
          Publier le <?PHP echo $article['dateA']; ?>
          par <?PHP echo $article['nomAuteur']; ?>
<!--modifier / supprimer -->
          <div style="text-align: right;">
          <a href="modifierarticle.php?id=<?PHP echo $article['idA']; ?>"  ><button type="button" class="btn btn-outline-light  w-2 p-2" class="btn badge-info " style="color:blue;" ><i class="fa fa-edit" aria-hidden="true"></i> </button>  </a>
          <a href="supprimerarticle.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA"  ><button type="button" class="btn btn-outline-light  w-2 p-2" class="btn badge-info" style="color:red;"><i class="fa fa-times" aria-hidden="true"></i> </button>  </a>
           </div> 
        </div> 
        </div>
			<?PHP
				}
			?>

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
         </form>
              </span>
            </div>
          </div>
        </div>
       <!-- ajouter-->
        <div class="card my-4">
          <h5 class="card-header">Vous pouvez ajouter un article </h5>
          <div class="card-body">
          <a href="ajoutA.php" ><button type="button" class="btn btn-outline-dark  w-100 p-2" class="btn badge-info " style="color:pink;"><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter un article</button>  </a>

          </div>
        </div>
      </div>
    </div>
  </div>


  <style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
</style>
 
<script src="black.js"></script>

        <?php include_once 'footer.php'; ?>
</body>
</html>
