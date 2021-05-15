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
            <p class="card-text"><?PHP echo substr($article['description'], 0, 36).'...'; ?></p> 
           <a href="readmoreA.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA" class="btn btn-primary">Suite &rarr;</a>          
          </div>
          <div class="card-footer text-muted"  >
          Publier le <?PHP echo $article['dateA']; ?>
          par <?PHP echo $article['nomAuteur']; ?>
<!--modifier / supprimer -->
          <div style="text-align: right;">
            <button id="btnPopup" class="btnPopup" >⋮</button>
            </div>
           <div id="overlay" class="overlay">
           <div id="popup" class="popup">
           <h2>
           <span id="btnClose" class="btnClose">&times;</span>
           </h2>
           <div>
           <a href="modifierarticle.php?id=<?PHP echo $article['idA']; ?>" class="btn btn-primary">Modifier un article </a> 
           <a href="supprimerarticle.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA" class="btn btn-primary" >Supprimer un article </a>    
           </div>
           </div>
           </div>
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

  <style>
.btnPopup{

padding: 0em 0.5em;
}
.btnPopup:hover{
background-color: rgb(192, 192, 192);}
.overlay {
position: fixed;
left: 0px;
top:0px;
background-color: rgba(0,0 ,0 , 0);
width: 100%;
height: 100%;
z-index:1; /*permet de placer l'élément overlay au-dessus des autres éléments.*/
display:none; /*permet de rendre invisible l'élément overlay. il sera visible lorsqu'on clique sur le bouton.*/
}
.popup{
margin: 10% auto;
width : 70%;
background-color: rgb(243, 243, 243);
padding: 1em;
box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
border-radius: 5px;
}
.btnClose {
float: right;
font-size:16pt;
cursor: pointer;
color: rgb(26, 26, 26);
}
</style>
<script>
var btnPopup = document.getElementById('btnPopup');
var overlay = document.getElementById('overlay');
btnPopup.addEventListener('click',openMoadl);
function openMoadl() 
{
overlay.style.display='block';
}
</script>
<script>
var btnClose = document.getElementById('btnClose');
btnClose.addEventListener('click',closeModal);
function closeModal() {
overlay.style.display='none';
}
</script>
        <?php include_once 'footer.php'; ?>
</body>
</html>
