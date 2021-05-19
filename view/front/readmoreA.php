<?PHP
	include "../../controller/articleC.php";
  include "../../controller/commentaireC.php";
  session_start();
	$articleC = new articleC();
	$listearticle = $articleC->afficherarticles();
  $listearticle = $articleC->triarticleD();

  $error = "";
  // create commentaire
  $commentaire = null;
  // create an instance of the controller
  $id=$_SESSION['auth'];
  $commentaireC = new commentaireC();
  if (

      isset($_POST["message"]) 
  ) {
      if (
          !empty($_POST["message"]) 
         
      ) {
          $commentaire = new commentaire(
              $_POST['message'],
              $_GET['id'],
         $id   
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
    <link href="dark.css" rel="stylesheet">
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
        <hr>
<!-- Date/Time -->
        <p>Publier le <?PHP echo $article['dateA']; ?>
          par <?PHP echo $article['nomAuteur']; ?></p>
        <hr>
<div class="zoom" > 
        <p class="desc"> <?PHP echo $article['description']; ?> </p>
</div>
 <div class="photoo">
 <div class="zoom">
        <img   class="img-fluid rounded" src="../<?php echo $article["image"]; ?>" alt="">
        </div>
        </div>
        </div>
    
      <?PHP
				}
			?>        
      </div>
     
     
       
<!--impression-->
     <a href="imprarticle.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA" class="btn btn-primary">Imprimer</a>
     <button onclick="myFunction()">Copy text</button>
<!--commentaire-->
<div class="card my-4">
          <h5 class="card-header">Laissez un commentaire:</h5>
          <div class="card-body">
          <form action="" method="POST" >
            
         
              <div class="form-group">
              <img class="d-flex mr-3 rounded-circle" src="<?php echo $_SESSION['IMG']?>" width="50px" height="50px" alt="">   
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
          if ($commentaire['idA']==$_GET['id']){
			?>
          <?PHP echo $commentaire['message']; ?>
          <div style="text-align: right;">
         
          <a  href="supprimercommentaire.php?idA=<?PHP echo $_GET['id'];?>&&id=<?PHP echo $commentaire['idCom']; ?>" id="idCom" name="idCom"  ><button type="button" class="btn btn-outline-light  w-2 p-2" class="btn badge-info" style="color:red;"><i class="fa fa-times" aria-hidden="true"></i> </button>  </a>
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
      }
			?>
           </div> 
        </div>
       </div>
       
 
     

<style>

/* zoom*/
.zoom {
  padding: 50px;
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
.desc 
{
  margin-bottom: 10px;
  margin-right: 210px;
  font-size: 18px;
  font-weight: 300;
  line-height: 1.4;
  fontName: "Lucida Console";
}

.photoo {
  position: relative;
left: 550px;
top:-100px;
vertical-align:middle;
  width: 500px;
  height: 500px;
  transition: width 2s, height 2s, transform 2s;
}

.photoo:hover {
  
  width: 500px;
  height: 500px;
  transform: rotate(360deg);
}

</style>




        <?php include_once 'footer.php'; ?>
        <script src="black.js"></script>
</body>
</html>
