<?php
include "../../controller/produitC.php";
include_once '../../model/produit.php';
$error = "";

    // create produit
    //$cat=$_GET['CODE'];
    // create an instance of the controller
    
    
        

          

    ?>
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
    <style>
    .card-text a :hover {
box-shadow: 0 5px 5px rgba(0, 0, 0,0.2);
;

    } 
    .card-text.showContent p{
        height:auto;
}
.card-text.showContent a.readmore-btn{

    background-color:red;
}
.card-title {
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    font-family:'Times New Roman', Times, serif;
    color:rgb(7, 2, 36);
}
user agent stylesheet
div {
    display: block;
}
.card-text {
    background-color:beige;
    border-radius: 15px;
    padding: 2em;
    box-shadow: 0px 10px 5px #b2bec3;
    text-align: center;
    font-family: 'Poppins';
    
    max-width: 100%;
    max-height: 100%;
}
.Buy-button{
    text-align: center;
    
}
.star {
color:rgb(0,0, 0);

}

.fa-star-o:active{
    color:rgb(0,255, 0);
}


</style>

</head>
    <body>
        <!-- Navigation -->
    <?php include_once 'header.php'; ?>
    <?PHP
    if(isset($_POST['titre']) ) { //S'il y a eu une recherche en crée le tableau avec le résultat
            $titre=$_POST['titre'];
            $produitC = new produitC();
           if( $listeproduit=$produitC->chercher($titre))
           {
              
               
               ?>
      <!-- Blog Entries Column -->
            <?PHP
				foreach($listeproduit as $produit){
                    echo "ici";
			?>
  <!-- Page Content -->
  <div class="container">
  
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            <br>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Instruments</li>
        </ol>

        
        <div class="row">
    <tr></tr>
    
        
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
      <div class="card h-100">
                    <a href="#">
                    <p class="star">
                   <i  id="change" onclick="myfunction(1)" class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                    <img class="card-img-top" src="<?php  echo $produit['IMAGE']?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $produit['NOM'] ?></a>
                        </h4>
                        <p class="card-text"> <?php echo $produit['DESCP'] ?></br>
                        </p>
                        
                        <p class="Buy-button"> <button type="button"  class="btn btn-outline-dark btn-lg">BUY</button></p>
                        <p class="Buy-button"> <a class="btn btn-primary" href="#">View More
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a> </p>
                    
                    </div>
                </div>
      </div>
       </div>
       	
  </div>
  <?PHP
				}
			?>
        
    <?php
        }
        
    ?>
    <?php
        }
        
    ?>
    <script src="black.js"></script>	
    <?php include_once 'footer.php'; ?>
    </body>
</html>
