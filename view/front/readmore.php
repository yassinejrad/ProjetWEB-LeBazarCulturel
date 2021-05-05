<?php 
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
$produitC= new produitC();
$inf2= new categorieC();
$liste2=$inf2->afficherCategories();
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
 .cardi {

    position: relative;
  right: -20px;

 }
.partie1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #fa92bad5;
    ;
}

.partie2 {
    font-family: 'Open Sans', sans-serif;
    color: #97daf5d5;
    ;
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
        <h1 class="mt-4 mb-4">
            <br>
        </h1>
       
        
      
        <?php
     if(isset($_GET['REFERENCE']) ) {  
        $produit=$produitC->recupererproduits($_GET['REFERENCE']); 
    ?>
     <ol class="breadcrumb">
      <li class="breadcrumb-item">
    <a href="categorie2.php">Categorie</a>
      </li>
    <li class="breadcrumb-item active">Blog n°<?PHP echo $produit['REFERENCE']; ?></li>
    </ol>
    <div class="row">
    <tr></tr>
    <p class="star">
                   <i  id="change" onclick="myfunction(1)" class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
      <div class="col-lg-8">
      <p class="partie1"><strong><?PHP echo $produit['NOM']; ?></strong></p>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $produit["IMAGE"]; ?>" alt="">
        <hr>
<p class="lead"><?PHP echo $produit['DESCP']; ?></p>
<p class="Buy-button"> <button type="button"  class="btn btn-outline-dark btn-lg">BUY</button></p>
      </div>
      
            <?php
    }
    ?>
       
        </div>
       
        <!-- /.row -->
      
    
     <!-- Pagination -->
     <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
        </div>
    <?php include_once 'footer.php'; ?>

</body>

</html>