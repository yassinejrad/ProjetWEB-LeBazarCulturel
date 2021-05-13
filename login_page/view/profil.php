<?php
session_start();
$conn = new mysqli("localhost", "root", "", "databasephp") ;
$ID=$_SESSION['auth'] ; 
$sql = "select * from produit  where user='$ID'";
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
    <title>Button hover effects</title>
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
            <a class="navbar-brand" >HOME</a>
            
        </div>

        <div class="grid-item grid-item2">
      
        </div>

        <div class="grid-item">
            
            <a href="#"> <img onmouseover="changeImgHome(this)" onmouseout="fixImgHome(this)" border="0"
                              src="Images\\w.home.png" alt="" align="middle"
                              class="home-icon"></a>
                             
                             
          
                              <div class="dropdown">
    
    
   
                          <div class="dropdown__select">
        <span class="dropdown__selected">Call to action</span>
        <i class="fa fa-caret-down dropdown__caret"></i>
      </div>
      <ul class="dropdown__list">
        <li class="dropdown__item">
        <i class="fa fa-plus-circle dropdown__icon" ></i>
         <a class="dropdown"  href="edit.php">Edit Profil</a>
         
        
        </li>

     
        <li class="dropdown__item">
        <i class="fa fa-user dropdown__icon"></i>
        <a class="dropdown"  href="favoris.php">favoris</a>
       
        </li>
        <li class="dropdown__item">
        <i class="fa fa-cog dropdown__icon"></i>
        <a class="dropdown"  href="resh.php">all</a>
     
        </li>
        <li class="dropdown__item">
        <i class="fa fa-circle dropdown__icon"></i>
        <a class="dropdown"  href="goodbye.php">log out  </a>
       
      
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