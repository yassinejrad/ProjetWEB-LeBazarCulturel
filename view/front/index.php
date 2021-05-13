<<<<<<< Updated upstream
<?php

?>




=======
<?php 
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';

  $inf1= new categorieC();
  $liste=$inf1->afficherCategories();
?>

>>>>>>> Stashed changes
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
    <link href="dark.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>


    <style>
   




    
    
    </style>
</head>

<body>

    <!-- Navigation -->
<<<<<<< Updated upstream
    <nav class="navbar-expand-lg navbar-light badge-light fixed-top">
        <div class="login">

            <a style="color:black;" href="#"> <i class="fa fa-sign-in" aria-hidden="true"></i> s'inscrire</a>
            <a style="color:black;">/</a>
            <a style="color:black" href="../back/index.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> se connecter</a>



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
        foreach($liste as $a) {
    ?>
    <?php include_once 'header.php'; ?>
    <?php
    }
    ?>
>>>>>>> Stashed changes
    <header>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/banner.png')">

                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/banner3.jpg')">
                    <div class="banner-wrap">
                        <div class="banner_center">
                            <h1>Second Slide</h1>
                            <h2>This is a description for the second slide.</h2>
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/banner2.jpg')">
                    <div class="banner-wrap">
                        <div class="banner_center">
                            <h1>Third Slide</h1>
                            <h2>This is a description for the third slide.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

     
        <script src="black.js"></script>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Artistes</h1>

        <!-- artistes -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">artistes 1</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Tous les artistes.php">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">artiste 2</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint
                            fuga.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Tous les artistes.php">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">artiste 3</h4>
                    <div class="card-body">
                        <p class="card-text">..</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Tous les artistes.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- vente -->
        <h2>Nos sélections</h2>

        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img1.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="Instrument.php">Guitar</a>
                        </h4>
                        <p class="card-text">...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img2.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="Livres.php">Book</a>
                        </h4>
                        <p class="card-text">..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img3.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="sculptures.php">sculpture</a>
                        </h4>
                        <p class="card-text">..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img4.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="Peintures.php">cheval</a>
                        </h4>
                        <p class="card-text">..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img5.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="Photographies.php">photo</a>
                        </h4>
                        <p class="card-text">..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="images/img6.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="Consomi_tounsi.php">Barnous</a>
                        </h4>
                        <p class="card-text">..</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- evenement -->
        <div class="row">
            <div class="col-lg-6">
                <h4 class="card-title">
                    <a href="Evenements.php">Soiré inobliable</a>
                </h4>
                <p>Ne rater pas notre soiré Jazz.</p>
                <ul>
                    <li>
                        <strong>le 01/05/2021</strong>
                    </li>
                    <li>Hotel Badira Hammamet</li>

                </ul>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/img7.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- comment ça marche -->

        <div class="services-section" id="services">
            <div class="container">
                <div class="services-header">
                    <h3 class="card-title">
                        <a>Essayez gratuitement l’oeuvre chez vous pendant 14 jours:</a>
                    </h3>
                </div>

                <div class="col-md-4 services-grid">
                    <img src="images/img8.png" alt="" />
                    <h5>Prix négociés</h5>
                    <p>Le bazar culturel développe des relations durables,de confiance avec ses galeries partenaires. </p>

                </div>
                <div class="col-md-4 services-grid">
                    <img src="images/img9.png" alt="" />
                    <h5>Paiements sécurisés</h5>
                    <p>Vous pouvez régler votre commande entoute sécurité par carte bancaire, Paypal ou virement bancaire.</p>

                </div>
                <div class="col-md-4 services-grid">
                    <img src="images/img10.png" alt="" />
                    <h5>Livraison</h5>
                    <p>le bazar culturel livre les oeuvres dans toute la Tunisie entier via des transporteurs spécialisés. </p>
                    <p> </p>
                </div>
<<<<<<< Updated upstream

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
            </div>
     </div>
    
     <?php include_once 'footer.php'; ?>
<<<<<<< Updated upstream
        
>>>>>>> Stashed changes
=======
     <script src="black.js"></script>
>>>>>>> Stashed changes
</body>

</html>