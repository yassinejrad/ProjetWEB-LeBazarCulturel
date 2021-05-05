<?php 
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
$cat=$_GET['CODE'];
$conn=mysqli_connect("localhost","dhia72","191JMT1252","bazarculturelle");
$sql="SELECT * FROM produits where CATEGORIE=".$cat." ";
$result=mysqli_query($conn,$sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR); 
$artnum=mysqli_num_rows($result);
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
 .prix {
color:rgb(0,255, 0);
text-align: center;
font: size 21px;
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
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
      <div class="card h-100">
                    <a href="#">
                    <p class="star">
                   <i  id="change" onclick="myfunction(1)" class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                    <img class="card-img-top" src="<?php  echo $art2['IMAGE']?>" width="100" height="100" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $art2['NOM'] ?></a>
                        </h4>
                        <p class="card-text"> <?PHP echo substr($art2['DESCP'], 0, 36).'...'; ?></br>
                        </p>
                        <div class="prix">
                        <a><?php echo $art2['PRIX'] ?>dt</a>
                        </div>
                        <p class="Buy-button"> <button type="button"  class="btn btn-outline-dark btn-lg">BUY</button></p>
                        <a href="readmore.php?REFERENCE=<?PHP echo $art2['REFERENCE']; ?>" id="REFERENCE" name="REFERENCE" class="btn btn-primary">Suite &rarr;</a> 
             </p>
                    
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
        
        <!-- /.row -->
      <div class="row">
        <div class="col-md-4">
<!-- recherche-->
        <div class="card my-11">
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
    
     <!-- Pagination -->
    
        </div>
        </div>
    <?php include_once 'footer.php'; ?>

</body>

</html>