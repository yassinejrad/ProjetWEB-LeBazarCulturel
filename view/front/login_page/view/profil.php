<?php
session_start();
<<<<<<< HEAD
$conn = new mysqli("localhost","root","","bazarculturelle") ;
=======
$conn = new mysqli("localhost", "dhia72", "191JMT1252", "bazarculturelle") ;
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
$ID=$_SESSION['auth'] ; 
$sql = "select * from produits  where user='$ID'";
$result = $conn->query($sql) or die($conn->error);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
<<<<<<< HEAD
    <title>Le bazar culturel</title>
    <link rel="shortcut icon" href="../../images/logo.png">
=======
    <title>Button hover effects</title>
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
    <link rel="stylesheet" href="resetb.css" />
    <link rel="stylesheet" href="styleb.css" />
  </head>
    
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
    rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Profile</title>
    <link rel="icon" href="" type="image/icon type">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title></title>
    <link rel="stylesheet" href="resetz.css" />
    <link rel="stylesheet" href="stylez.css" />
    <link rel="stylesheet" href="styler.css" />
   
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
<script src="navbar.js"></script>

<link rel="stylesheet" href="stylep.css">
<nav class="navbar navbar-inverse">
    <div class="grid-container">
        <div class="grid-item">
            <a class="navbar-brand" >PROFIL</a>
            
        </div>

        <div class="grid-item grid-item2">
      
        </div>

        <div class="grid-item">
            
            <a href="http://localhost/2A4/blog6/view/front/acceuil.php"> <img onmouseover="changeImgHome(this)" onmouseout="fixImgHome(this)" border="0"
                              src="Images\\w.home.png" alt="" align="middle"
                              class="home-icon"></a>
                             
                             
          
                              <div class="dropdown">
    
    
   
                          <div class="dropdown__select">
<<<<<<< HEAD
        <span class="dropdown__selected">Encore plus</span>
=======
        <span class="dropdown__selected">Call to action</span>
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
        <i class="fa fa-caret-down dropdown__caret"></i>
      </div>
      <ul class="dropdown__list">

      <li class="dropdown__item">
        <i class="fa fa-product-hunt" ></i>
<<<<<<< HEAD
        <a class="dropdown"  href="http://localhost/2A4/blog6/view/front/AjoutP2.php">Ajouter un produit</a>
        </li> 

        <li class="dropdown__item">
        <i class="fa fa-product-hunt" ></i>
        <a class="dropdown"  href="http://localhost/2A4/blog6/view/front/addarticle.php">Ajouter un article</a>
        </li> 

        <li class="dropdown__item">
        <i class="fa fa-plus-circle dropdown__icon" ></i>
         <a class="dropdown"  href="edit.php">Modifier votre profil</a>
=======
         <a class="dropdown"  href="http://localhost/2A4/blog6/view/front/AjoutP2.php">ADD NEW PRODUCT</a>
         
        
        </li> 
        <li class="dropdown__item">
        <i class="fa fa-plus-circle dropdown__icon" ></i>
         <a class="dropdown"  href="edit.php">Edit Profil</a>
         
        
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
        </li>

     
        <li class="dropdown__item">
        <i class="fa fa-user dropdown__icon"></i>
<<<<<<< HEAD
        <a class="dropdown"  href="favoris.php">Favoris</a>
        </li>

        <li class="dropdown__item">
        <i class="fa fa-cog dropdown__icon"></i>
        <a class="dropdown"  href="resh.php">Tous les profils</a>
        </li>
        <li class="dropdown__item">
        <i class="fa fa-circle dropdown__icon"></i>
        <a class="dropdown"  href="goodbye.php">Déconnecter</a>
=======
        <a class="dropdown"  href="favoris.php">favoris</a>
       
        </li>
        <li class="dropdown__item">
        <i class="fa fa-cog dropdown__icon"></i>
        <a class="dropdown"  href="resh.php">all</a>
     
        </li>
        <li class="dropdown__item">
        <i class="fa fa-circle dropdown__icon"></i>
        <a class="dropdown"  href="goodbye.php">log out  </a>
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
       
      
        </li>
      </ul>
    </div>
     
        </div>
        
        
    </div>
    
</nav>
<div class="container">
    <div class="info">
        <img src="<?php echo $_SESSION['IMG']?>" alt="img" class="profile-img">
        <p class="center"><?php echo $_SESSION['NOM']?></p>
        <p class="numposts"><?php echo $_SESSION['DESCRIPTION']?></p>
   

        
    </div>


  
          

    <div id="Home" class="tabcontent" style="display: block;"
    <h3>Posts</h3>
    <div class="grid-container grid-container-post">
    <?php
 
  
   
 while ($row = $result->fetch_assoc()) 
 {
     
    echo'

    
    <div class="grid-item grid-item-post">
            <img alt="picture"
                 src="'.$row['img'].'"
                 id="'.$row['id'].'"
                 class="img-fluid"/>
                 </div>
                
' ; 
    }
     





?>

</form>
    
</div>

<div id="myModal" class="modal">
  
    <span class="close">&times;</span>
    
    <img class="modal-content" >
    <div class="screen-image">
      <img
        
        alt=""
        class="screen-image__img"
        id="img01"
        
      />
      <div class="screen-image__cover" ></div>
    </div>
    <script src="./appp.js"></script> 
    
    
   
</div>

<script src="Modal.js"></script>
</body>

</html>