<?PHP
	include "../../controller/articleC.php";
  include "../../controller/commentaireC.php";

	$articleC = new articleC();
	$listearticle = $articleC->afficherarticles();
  $listearticle = $articleC->triarticleD();

  $error = "";
  // create commentaire
  $commentaire = null;
  // create an instance of the controller
  $commentaireC = new commentaireC();
  if (
      isset($_POST["nom"]) && 
      isset($_POST["prenom"]) &&
      isset($_POST["message"]) 
     
    
      
  ) {
      if (
          !empty($_POST["nom"]) && 
          !empty($_POST["prenom"]) && 
          !empty($_POST["message"]) 
          
         
      ) {
          $commentaire = new commentaire(
              $_POST['nom'],
              $_POST['prenom'], 
              $_POST['message']
         
              
          );
          $commentaireC->ajoutercommentaire($commentaire);
          //header('Location:readmore.php');
      }
      else
          $error = "Missing information";
  }
  $commentaireC = new commentaireC();
	$listecommentaire = $commentaireC->affichercommentaires();
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
    <?php
         if(isset($_GET['id']) ) {  
            $article=$articleC->recupererarticle($_GET['id']); 
		?>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="blog.php">blog</a>
      </li>
    <li class="breadcrumb-item active">Blog n°<?PHP echo $article['idA']; ?></li>
    </ol>

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
        <p class="lead"><?PHP echo $article['description']; ?></p>   
      </div>
     <?PHP
				}
			?>        
      </div>
<!--impression-->
     <a href="imprarticle.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA" class="btn btn-primary">Imprimer</a>

<!--commentaire-->
<div class="card my-4">
          <h5 class="card-header">Laissez un commentaire:</h5>
          <div class="card-body">
          <form action="" method="POST"  >
            <div class="form-group">
            <label for="nom">nom:
                        </label>
                        <input type="text" name="nom" id="nom" maxlength="50" required />
              </div>
              <div class="form-group">
              <label for="prenom">prenom:
                        </label>
                        <input type="text" name="prenom" id="prenom" maxlength="50" required />
              </div>
              <div class="form-group">
              <label for="message">message:
                        </label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Ajouter</button>
             
            </form>
          </div>
          </div>
        <div class="media mb-4">
          <div class="media-body">
          <?PHP
				foreach($listecommentaire as $commentaire){
			?>
      <!--<img class="d-flex mr-3 rounded-circle" src="images/perso2.jpg" width="50px" height="50px" alt="">-->
      
            <h5 class="mt-0"><?PHP echo $commentaire['nom']; ?> <?PHP echo $commentaire['prenom']; ?></h5>
            <?PHP echo $commentaire['message']; ?>

            <div style="text-align: right;">
            <button id="btnPopup" class="btnPopup" >⋮</button>
            </div>
           <div id="overlay" class="overlay">
           <div id="popup" class="popup">
           <h2>
           <span id="btnClose" class="btnClose">&times;</span>
           </h2>
           <div>
           <a href="supprimercommentaire.php?id=<?PHP echo $commentaire['idCom']; ?>" id="idCom" name="idCom" class="btn btn-primary">Supprimer commentaire</a>    
           </div>
           </div>
           </div>
<!-- date et temps -->
            <div class="text-muted" style="text-align: right; font-size: 12px;">
            <SCRIPT LANGUAGE="JavaScript">
             var maintenant=new Date();
             var jour=maintenant.getDate();
            var mois=maintenant.getMonth()+1;
            var an=maintenant.getFullYear();
            var h=maintenant.getHours();
            var m=maintenant.getMinutes();
            document.write("Publié le ",jour,"/",mois,"/",an," à ",h,":",m);
            </SCRIPT>
            </div>

            <?PHP
				}
			?>
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
