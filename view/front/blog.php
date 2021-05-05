<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>le bazar culturel</title>
  <link rel="shortcut icon" href="images/logo.png">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar-expand-lg navbar-light badge-light fixed-top">
    <div class="login">
      
      <a style="color:black;" href="#">s'inscrire</a>
      <a style="color:black;" >/</a>
      <a style="color:black" href="#">se connecter</a>

      
    
  </div>
      <div class="titre">
      <a href="#"><img class="logo" src="images/logo.png" >
      <a  class="nav-link" href="index.php">Le bazar culturel</a>
    </div>
     
     <!-- <a href="#"><img class="card-img-top" src="images/logo.png" alt=""></a>-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="about.php">A propos de nous</a>
          </li>

          <li class="nav-justified dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Catégories
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="Instrument.php">Instrument</a>
              <a class="dropdown-item" href="Livres.php">Livres</a>
              <a class="dropdown-item" href="sculptures.php">sculptures</a>
              <a class="dropdown-item" href="Peintures.php">Peintures</a>
              <a class="dropdown-item" href="Photographies.php">Photographies</a>
              <a class="dropdown-item" href="Consomi_tounsi.php">Consomi_tounsi</a>
              <a class="dropdown-item" href="tickets.php">tickets</a>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Evenements.php">Evenements</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="blog.php">Articles</a>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Artiste
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
             <a class="dropdown-item" href="Tous les artistes.php">Tous les artistes</a>
              <!-- <a class="dropdown-item" href="sidebar.php">Sidebar Page</a>
              <a class="dropdown-item" href="faq.php">FAQ</a>
              <a class="dropdown-item" href="404.php">404</a>
              <a class="dropdown-item" href="pricing.php">Pricing Table</a>-->
            </div>
          </li>
                <!-- Sidebar Widgets Column -->
      <div class="col-md-3">

        <!-- Search Widget -->
        <div class="card mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="recherche...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <p class="mt-4 mb-4">
      <small>Articles</small>
    </p>

=======
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
>>>>>>> Stashed changes
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Acceuil</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>
<<<<<<< Updated upstream

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="images/blog1.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">L’Œuvre à la loupe : « La Nuit étoilée » de Van Gogh</h2>
            <p class="card-text">Le 30 mars 1853 naissait Vincent Van Gogh aux Pays-Bas. Plus d’un siècle et demi plus tard, Le bazar culturel rend hommage à l’un des plus grands peintres néerlandais dans un nouveau numéro de L’Œuvre à la loupe ! Lumière sur l’histoire et la symbolique de l’une des…</p>
            <a href="blog1.php" class="btn btn-primary">Suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publier le 17 avril 2021 par Cécile Martet
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="images/blog2.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Collectionneur d’Art : 6 profils types</h2>
            <p class="card-text">Spéculateur glacé ou accumulateur compulsif, découvreur de talents génial ou mécène providentiel : le Collectionneur d’art contemporain ne laisse personne indifférent ! Mais qui est-il vraiment ? Le bazar culturel dresse un portrait de 6 profils de Collectionneurs aussi passionnants les uns que les autres. Et vous, quel type…</p>
            <a href="blog2.php" class="btn btn-primary">Suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publier le 10 avril 2021 par Agnès Foissac
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="images/blog3.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">L’Œuvre à la Loupe : Le bal du Moulin de la galette de Renoir</h2>
            <p class="card-text">La rédaction du bazar culturel vous fait découvrir les secrets d’une œuvre célèbre grâce à l’Œuvre à la loupe. Aujourd’hui, plongez-vous dans l’ambiance insouciante d’un dimanche après-midi à la guinguette avec le Bal du Moulin de la Galette, d’Auguste Renoir. Peint en 1876, ce chef d’œuvre…</p>
            <a href="blog3.php" class="btn btn-primary">Suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publier le 03 avril 2021 par Juliette Rivière
          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Recherche</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Rechercher un blog...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
=======
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
>>>>>>> Stashed changes
              </span>
            </div>
          </div>
        </div>
<<<<<<< Updated upstream


        <!-- Side Widget -->
=======
<!-- Side Widget -->
>>>>>>> Stashed changes
        <div class="card my-4">
          <h5 class="card-header">Article</h5>
          <div class="card-body">
            Ne ratter pas nos articles chaque samedi.
          </div>
        </div>
<<<<<<< Updated upstream

      </div>

    </div>
    <!-- /.row -->

  </div>
  <div class="row mb-6">

  </div>
    <!-- /.contacter nous! -->
  
    <!-- Footer -->
    <footer class="py-5 badge-info">
      <div class="container"> 
        <div class="contact-header">
          <h3> Suivez nous sur :</h3>
          
        </div>
      <div class="social-icon">
        <a href="https://twitter.com/?lang=fr"><i class="icon1"></i></a>
        <a href="https://fr-fr.facebook.com/"><i class="icon2"></i></a>
        <a href="https://www.google.com/webhp?authuser=0"><i class="icon3"></i></a>
        <a href="https://www.youtube.com/"><i class="icon4"></i></a>
        <a href="#"><i class="icon5"></i></a>
        <a href="#"><i class="icon6"></i></a>
        <a href="https://www.pinterest.fr/"><i class="icon7"></i></a>
        <a href="#"><i class="icon8"></i></a>
      </div>
      <!-- /.container -->
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="contact.php">Contact</a>
      </div>
      <div class="container">
        <p class="m-0 text-center text-white">CopyRight FreeDev 2021</p>
      </div>
    </footer>
  
    <!--  core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <div class="footer-bottom">
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          /*
          var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
           };
          */
          
          $().UItoTop({ easingType: 'easeOutQuart' });
          
        });
      </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>

</body>

=======
      </div>
    </div>
  </div>
        <?php include_once 'footer.php'; ?>
</body>
>>>>>>> Stashed changes
</html>
