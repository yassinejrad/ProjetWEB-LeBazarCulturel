<?php 
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
include "../../controller/articleC.php";
$n=0;
$conn=mysqli_connect("localhost","root","","bazarculturelle");
$sql="SELECT * FROM produits  ORDER BY QTE DESC ";
$result = $conn->query($sql) or die($conn->error);
  $inf1= new categorieC();
  $liste=$inf1->afficherCategories();
  //articles 
 $articleC = new articleC();
 $listearticle = $articleC->afficherarticles();
$listearticle = $articleC->triarticleD();
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom styles for this template -->
     <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="dark.css" rel="stylesheet">
    <link href="card.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
   
  
    
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:300,400,800'>
    <link rel='stylesheet' href='https://cdn.linearicons.com/free/1.0.0/icon-font.min.css'>

    <script src="animation.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="dark.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "60a44303d8a5c2000710e0d6";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->





</head>

<body>

    <!-- Navigation -->
    <?php
        foreach($liste as $a) {
    ?>
    <?php include_once 'header.php'; ?>
    <?php
    }
    ?>
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
                        <h1>BIENVENUE DANS NOTRE MONDE CHOISISSEZ VOTRE PRODUIT.</h1>
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/banner2.jpg')">
                    <div class="banner-wrap">
                        <div class="banner_center">
                        <h1>QUALITÉ EST NOTRE PREMIER PRIORITÉ</h1>
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

 

    <h2>Nos sélections</h2>

<div class="row">
<?php
$n=0;
while($row = $result->fetch_assoc() ) {
if($n<=6 && $n==0) {
    echo' <div class="col-md-4">
    
    <div class="card mb-3 product-wap rounded-0" data-aos="fade-right">
        <div class="card rounded-0">
            <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                
                <a style="display: block;
                text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <i class="far fa-eye"></i></a>
                <a style="display: block;
                text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                
                <i class="far fa-heart"></i></a>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
            
           
           
        </div>
    </div>
    </div>
    


    ';
 }
 
     if($n<=6 && $n==1) {
         echo' <div class="col-md-4">
        
         <div class="card mb-3 product-wap rounded-0" data-aos="fade-up">
             <div class="card rounded-0">
                 <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
                 <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled">
                     <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                     
                     <a style="display: block;
                     text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <i class="far fa-eye"></i></a>
                     <a style="display: block;
                     text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     
                     <i class="far fa-heart"></i></a>
                     </ul>
                 </div>
             </div>
             <div class="card-body">
                 <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
                 
                
                
             </div>
         </div>
         </div>
         
  
  
         ';
      }


 
 
     if($n<=6 && $n==2) {
         echo' <div class="col-md-4">
         
         <div class="card mb-3 product-wap rounded-0 "data-aos="fade-left">
             <div class="card rounded-0">
                 <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
                 <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled">
                     <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                     
                     <a style="display: block;
                     text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <i class="far fa-eye"></i></a>
                     <a style="display: block;
                     text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     
                     <i class="far fa-heart"></i></a>
                     </ul>
                 </div>
             </div>
             <div class="card-body">
                 <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
                 
                
                
             </div>
         </div>
         </div>
         
  
  
         ';
      }
      if($n<=6 && $n==3) {
         echo' <div class="col-md-4">
         
         <div class="card mb-3 product-wap rounded-0 "data-aos="fade-left">
             <div class="card rounded-0">
                 <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
                 <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled">
                     <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                     
                     <a style="display: block;
                     text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <i class="far fa-eye"></i></a>
                     <a style="display: block;
                     text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     
                     <i class="far fa-heart"></i></a>
                     </ul>
                 </div>
             </div>
             <div class="card-body">
                 <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
                 
                
                
             </div>
         </div>
         </div>
        
  
  
         ';
      }
      
      if($n<=6 && $n==4) {
         echo' <div class="col-md-4">
        
         <div class="card mb-3 product-wap rounded-0 "data-aos="fade-up">
             <div class="card rounded-0">
                 <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
                 <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled">
                     <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                     
                     <a style="display: block;
                     text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <i class="far fa-eye"></i></a>
                     <a style="display: block;
                     text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     
                     <i class="far fa-heart"></i></a>
                     </ul>
                 </div>
             </div>
             <div class="card-body">
                 <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
                 
                
                
             </div>
         </div>
         </div>
        
  
  
         ';
      }
      if($n<=6 && $n==5) {
         echo' <div class="col-md-4">
         
         <div class="card mb-3 product-wap rounded-0 "data-aos="fade-right">
             <div class="card rounded-0">
                 <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
                 <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                     <ul class="list-unstyled">
                     <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                     
                     <a style="display: block;
                     text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     <i class="far fa-eye"></i></a>
                     <a style="display: block;
                     text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     
                     <i class="far fa-heart"></i></a>
                     </ul>
                 </div>
             </div>
             <div class="card-body">
                 <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
                 
                
                
             </div>
         </div>
         </div>
         
  
  
         ';
      }
$n++; 
}
?>

    
 
</div>
  
        <!-- /.row -->
<!-- articles -->
<h1 class="my-4">Articles</h1>
 
<div class="row">

<?PHP
				foreach($listearticle as $article){
			?>
    <div class="col-md-4">
    <div class="mouve" >
    <div class="card mb-3 product-wap rounded-0"> 
    <div class="card rounded-0">           
       <img  class="card-img rounded-0 img-fluid"  src="../<?php echo $article["image"]; ?>" style="width: 400px; height: 400px;" >
       <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
           <ul class="list-unstyled">
           <a style="color:white;" href="" class="h3 text-decoration-none"><?PHP echo substr($article['description'], 0, 36).'...'; ?></a>
           <a style="display: block;
           text-align: center;"class="BC text-white mt-2"href="readmoreA.php?id=<?PHP echo $article['idA']; ?>" id="idA" name="idA"><span></span>
           <span></span>
           <span></span>
           <span></span><i class="far fa-eye"></i></a>           
           </ul>
       </div>
   </div>
   <div class="card-body">
       <a style="color:red;" href="" class="h3 text-decoration-none"><?PHP echo $article['titre']; ?></a>
   </div>
</div>
</div>  
</div>   
        <?PHP
				}
			?>
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
               
             
                  
                        <h1 class="partie1"> Essayez gratuitement l’oeuvre chez vous pendant 14 jours:</h1>
                   
                </div>

                <div class="col-md-4 services-grid">              
                <h5 style="color:#97daf5d5;" class="fa fa-eur">       Prix négociés:</h5>
                    <p >Le bazar culturel développe des relations durables,de confiance avec ses galeries partenaires. </p>

                </div>
                <div class="col-md-4 services-grid">

                    <h5 style="color:#97daf5d5;" class="fa fa-unlock-alt" >      Paiements sécurisés:</h5>
                    <p>Vous pouvez régler votre commande entoute sécurité par carte bancaire, Paypal ou virement bancaire.</p>

                </div>
                <div class="col-md-4 services-grid">
             
                    <h5 style="color:#97daf5d5;" class="fa fa-truck" >     Livraison:</h5>
                    <p>le bazar culturel livre les oeuvres dans toute la Tunisie entier via des transporteurs spécialisés. </p>
                    <p> </p>
                </div>
            </div>
     </div>
     </div>
     </div>
    <style>
        .mouve {
 /* width: 100px;
  height: 50px;*/
  font-weight: bold;
  position: relative;
  animation: mymove 9s  ;
}

@keyframes mymove {
  from {left: -100px;}
  to {left: 200px;}
}


    </style>
     <?php include_once 'footer.php'; ?>
     <script src="black.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
  AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
      });
  </script>
</body>

</html>