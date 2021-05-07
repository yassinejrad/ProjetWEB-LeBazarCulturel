<?php

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
</head>

<body>

    <!-- Navigation -->
    <?php include_once 'header.php'; ?>

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
            </div>
     </div>

     <?php include_once 'footer.php'; ?>
        
</body>

</html>