<?php 
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
<<<<<<< Updated upstream

  $inf1= new produitC();
  $liste=$inf1->afficherProduits();
=======
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';

  $inf1= new produitC();
  $liste=$inf1->afficherProduits();
  $inf2= new categorieC();
  $liste2=$inf2->afficherCategories();
>>>>>>> Stashed changes
?>


<!DOCTYPE html>
<html lang="en">

<head>

<<<<<<< Updated upstream
    <meta charset="utf-8">
=======
<meta charset="utf-8">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
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

>>>>>>> Stashed changes
</head>


<body>
<<<<<<< Updated upstream

    <!-- Navigation -->
    <nav class="navbar-expand-lg navbar-light badge-light fixed-top">
        <div class="login">

            <a style="color:black;" href="#"> <i class="fa fa-sign-in" aria-hidden="true"></i> s'inscrire</a>
            <a style="color:black;">/</a>
            <a style="color:black" href="#"> <i class="fa fa-sign-in" aria-hidden="true"></i> se connecter</a>



        </div>
        <div class="titre">
            <a href="#"><img class="logo" src="images/logo.png">
                <a class="nav-link" href="index.php">Le bazar culturel</a>
        </div>

        <!-- <a href="#"><img class="card-img-top" src="images/logo.png" alt=""></a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="about.php"> <i class="fa fa-user"></i> A propos de nous</a>
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
                    <a class="nav-link" href="services.php"> <i class="fa fa-clone"></i> Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Evenements.php"> <i class="fa fa-calendar "></i> Evenements</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="blog.php"> <i class="far fa-newspaper"></i> Articles </a>
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
=======
<?php
        foreach($liste2 as $a) {
    ?>
    <?php include_once 'header.php'; ?>
    <?php
    }
    ?>
>>>>>>> Stashed changes

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
<<<<<<< Updated upstream
        <h1 class="mt-4 mb-3">Portfolio 2
            <small>Subheading</small>
=======
        <h1 class="mt-4 mb-3">
            <br>
>>>>>>> Stashed changes
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
<<<<<<< Updated upstream
            <li class="breadcrumb-item active">Portfolio 2</li>
        </ol>

=======
            <li class="breadcrumb-item active">Instruments</li>
        </ol>
       
>>>>>>> Stashed changes
        <div class="row">
        <?php
        foreach($liste as $a) {
    ?>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
<<<<<<< Updated upstream
                    <a href="#"><img class="card-img-top" src="<?php  echo $a['IMAGE']?>" alt=""></a>
=======
                    <a href="#">
                    <p class="star">
                   <i  id="change" onclick="myfunction(1)" class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                    <img class="card-img-top" src="<?php  echo $a['IMAGE']?>" ></a>
>>>>>>> Stashed changes
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $a['NOM'] ?></a>
                        </h4>
<<<<<<< Updated upstream
                        <p class="card-text"> <?php echo $a['DESCP'] ?></p>
=======
                        <p class="card-text"> <?php echo $a['DESCP'] ?></br>
                        </p>
                        
                        <p class="Buy-button"> <button type="button"  class="btn btn-outline-dark btn-lg">BUY</button></p>
                    <p class="Buy-button"> <a class="btn btn-primary" href="#">View More
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a> </p>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
<<<<<<< Updated upstream
           
        </div>
=======
         
        </div>
        
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
    <!-- /.container -->


    <!-- /.contacter nous! -->

    <!-- Footer -->
    <footer class="py-5 badge-info">
        <div class="container">
            <div class="contact-header">
                <h3> Suivez nous sur :</h3>

            </div>
            <div class="social-media ">
                <a href=" https://fr-fr.facebook.com/ " class="social-icon ">
                    <i class="fab fa-facebook-f "></i>
                </a>
                <a href="https://twitter.com/?lang=fr " class="social-icon ">
                    <i class="fab fa-twitter "></i>
                </a>
                <a href=" https://google.com/? " class="social-icon ">
                    <i class="fab fa-google "></i>
                </a>
                <a href="https://instagram.com/? " class="social-icon ">
                    <i class="fab fa-instagram "></i>
                </a>
                <a href="# " class="social-icon ">
                    <i class="fa fa-phone " aria-hidden="true "></i>
                </a>
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

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
=======

    <?php include_once 'footer.php'; ?>
>>>>>>> Stashed changes

</body>

</html>