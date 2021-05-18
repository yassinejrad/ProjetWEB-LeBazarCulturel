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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

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

.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 350px;
  height: 350px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
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
    <li class="breadcrumb-item active">Product n°<?PHP echo $produit['REFERENCE']; ?></li>
    </ol>
    <div class="row">
    <tr></tr>
    <div class="col-lg-5 mt-5">
    <div class="zoom">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php  echo $produit['IMAGE']?>" alt="Card image cap" id="product-detail">
                   </div>
                    </div>
                </div>
  
      <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><strong><?PHP echo $produit['NOM']; ?></strong></h1>
                            <p class="h3 py-2"><?PHP echo $produit['PRIX']; ?>DT</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                
                            </p>
                           

                            <h6>Description:</h6>
                            <p><?PHP echo $produit['DESCP']; ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Quantity :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?PHP echo $produit['QTE']?></strong></p>
                                </li>
                            </ul>
                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="<?PHP echo $produit['NOM']; ?>">
                            <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                            <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-outline-success btn-lg" name="submit" value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-outline-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                                </div>
                             </form>
                           

                        </div>
                    </div>
                </div>






      
            <?php
    }
    ?>
       
        </div>
       
        <!-- /.row -->
      
    
     <!-- Pagination -->
     
        </div>
    <?php include_once 'footer.php'; ?>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <script src="black.js"></script>
</body>

</html>