<?php 
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
include '../../controller/promoC.php';

$produitC= new produitC();
$inf2= new categorieC();
$liste2=$inf2->afficherCategories();

$promotionC = new promotionC();
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
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
   <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css'>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
   
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="readmore.css">
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <link  rel="stylesheet" href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link  rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    
    
    <style>
    
</style>

</head>


<body>
        <?php
     if(isset($_GET['REFERENCE']) ) {  
        $produit=$produitC->recupererproduits($_GET['REFERENCE']); 
    ?>
    
    <div class="row">
    
    <div class="bg-black vh-100 d-flex justify-content-center align-items-center">
    <div class="container d-flex justify-content-center">
        <div class="card p-4">
            <div class="p-info px-3 py-3">
                <div>
                    <h5 class="mb-0"><?PHP echo $produit['NOM']; ?></h5> 
                </div>
                <div class="p-price d-flex flex-row" style="color:#FF0000;"> <span>DT</span>
                <strong>
        <?PHP 
         if ($produit['STATUE']==2){
   $elementC= $promotionC->afficherElementPromo($produit['REFERENCE'] );
     $prix= $produit['PRIX'] -(($produit['PRIX'] * $elementC->pourcentage)/100);   
   echo $prix; 
   echo '<del class="product-old-price" style="color:black;"> <h1  style="color:black;" > '.$produit['PRIX'].' </h1></del>';
         }     
     ?>
     </strong>
     </p> 
     <?php
     if ($produit['STATUE']==1){
         echo '<h1>'.$produit['PRIX'].' </h1>';
     }
          ?> 
                </div>
                <div class="heart"> <a href="favo.php?REFERENCE=<?PHP echo $produit['REFERENCE']; ?>"><i class="bx bx-heart"></i></a> </div>
            </div>
            <div class="text-center p-image"> <img src="<?PHP echo $produit['IMAGE']; ?>"> </div>
            <div class="p-about">
                <p> <?PHP echo $produit['DESCP']; ?></p>
 
            </div>
            </br>
            <div class="buttons d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-danger w-100">Ajouter Au panier </button> <button class="btn btn-outline-danger w-100">Acheter Maintenant</button> </div>
        </div>
    </div>
      
            <?php
    }
    ?>
       
        </div>

   
        </div>
    <?php include_once 'footer.php'; ?>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css'>
    <!-- End Script -->

    <!-- Start Slider Script -->
   
</body>

</html>