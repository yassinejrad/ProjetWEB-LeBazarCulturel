<?php 
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
include '../../controller/promoC.php';
$cat=$_GET['CODE'];
$conn=mysqli_connect("localhost","root","","bazarculturelle");
$sql="SELECT * FROM produits where CATEGORIE=".$cat." ";
$result=mysqli_query($conn,$sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR); 
$artnum=mysqli_num_rows($result);
$inf2= new categorieC();
$liste2=$inf2->afficherCategories();

$promotionC = new promotionC();

                
            
?>



<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">
    <link href="dark.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
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
 .cardi {

    position: relative;
  right: -20px;

 }
 .prix {
color:rgb(0,255, 0);
text-align: center;
font: size 21px;
}

.sale {

	display: inline-block;
	background: red;
	color: white;
	height: 2.5rem;
	width: 2.5rem;
	text-align: center;
	vertical-align: middle;
	line-height: 2.5rem;
	
	transform: rotate(-20deg);
	animation: beat 1s ease infinite alternate;
	&:before,
	&:after {
		content:"";
		
		background: inherit;
		height: inherit;
		width: inherit;
        
		z-index: -1;
		transform: rotate(30deg);
	}
	&:after {
		transform: rotate(60deg);
	}
}

@keyframes beat {
	from {	transform: rotate(-20deg) scale(1); }
	to {	transform: rotate(-20deg) scale(1.1); }
}
</style>

</head>


<body>
<?php
        foreach($liste2 as $a) {
    ?>
    <?php include_once 'header.php'; ?>
    <?php
    }
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
            <li class="breadcrumb-item active">Products</li>
            <li class="breadcrumb-item active"> 
            <a href="trie.php"><i class="fas fa-filter"></i>
</a> 
            </li>
            <li class="breadcrumb-item">
                <a href="AjouterP2.php"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
            </li>
        </ol>
       
        <div class="row">
        <?php
     if($artnum >0)
      {
    ?>
    <?php
     while($art2=mysqli_fetch_assoc($result))
      {
    ?>
           
      <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                            <?PHP 
         if ($art2['STATUE']==2){
   $elementC= $promotionC->afficherElementPromo($art2['REFERENCE'] );
  $promo= $elementC->pourcentage  ;

  echo' <span class ="sale"> - '. $promo. '  </span>   '; 
  echo ' <img  class="card-img rounded-0 img-fluid"  src="'.$art2['IMAGE'].'" style="width: 400px; height: 400px;" >';
   
         }    
         
         elseif ($art2['STATUE']==1){  
              echo'  <img  class="card-img rounded-0 img-fluid"  src="'.$art2['IMAGE'].'" style="width: 400px; height: 400px;" >';
            }    
         
            ?>
                
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                              
                                <ul class="list-unstyled">
                                    <li>
                                        <li><a class="btn btn-outline-success text-white" href="favo.php?REFERENCE=<?PHP echo $art2['REFERENCE']; ?>"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-outline-success text-white mt-2"href="readmore2.php?REFERENCE=<?PHP echo $art2['REFERENCE']; ?>"id="REFERENCE" name="REFERENCE"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-outline-success text-white mt-2" href=""><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a style="color:red;" href="" class="h3 text-decoration-none"><?php echo $art2['NOM'] ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li><?PHP echo substr($art2['DESCP'], 0, 36).'...'; ?></li>
                                    
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                
                                <p class="text-center mb-0" style="color:#FF0000;">
                        <strong>
        <?PHP 
         if ($art2['STATUE']==2){
   $elementC= $promotionC->afficherElementPromo($art2['REFERENCE'] );
     $prix= $art2['PRIX'] -(($art2['PRIX'] * $elementC->pourcentage)/100);   
   echo $prix; 
   echo '<del class="product-old-price" style="color:black;" > '.$art2['PRIX'].' DT</del>';
         }    
         
     ?>
     
     </strong>
     </p> 
     <?php
     if ($art2['STATUE']==1){
         echo '<p class="text-center mb-0">'.$art2['PRIX'].' DT</p>';
     }
          ?>                      
                            </div>
                        </div>
                    </div>








            <?php
    }
    ?>
          <?php
    }
    ?>
        </div>
        </div>
        </div>
        <!-- /.row -->
      
        <div class="col-md-4">
<!-- recherche-->
        <div class="card mb-4">
          <h5 class="card-header">Recherche</h5>
          <div class="card-body">
              <form  action="rechercheproduits.php" method="POST" >
              <div class="input-group">
              <span class="input-group-append">
         <input type="text" id ="titre" name="titre" class="form-control" placeholder="Rechercher un produit..." maxlength="50">
        <input type="submit" value="recherche" name="rechercher">  
         </form>
              </span>            
            </div>
    </div>
    </div>
        </div>
        </div>
        
        <script src="black.js"></script>
    <?php include_once 'footer.php'; ?>

</body>

</html>