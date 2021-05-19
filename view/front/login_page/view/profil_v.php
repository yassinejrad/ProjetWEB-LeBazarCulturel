<?php
include_once 'C:\xampp\htdocs\2a4\blog6\view\front\login_page\controller\starC.php';
include_once 'C:\xampp\htdocs\2a4\blog6\view\front\login_page\model\star.php';
session_start();
$conn = new mysqli("localhost","root","","bazarculturelle") ;
$ID=$_SESSION['auth'] ; 
$IDV=$_GET["ID"] ; 
$_SESSION['help']=$IDV ;
$sql = "select * from user  where id='$IDV'";
$result = $conn->query($sql) or die($conn->error);

$sqlp = "select * from produits  where user='$IDV'";
$resultp = $conn->query($sqlp) or die($conn->error);

if (isset($_POST["msg"])) {
  header('location:CHatBox-master/index.php?ID='.$IDV.'') ;  

}
$sqls = "select * from star  where id_h='$IDV'";
$results = $conn->query($sqls) or die($conn->error); 
$nbr_p=mysqli_num_rows($results) ; 
if ($nbr_p==0) {

  $nbr_p=1; 
}

$sqll = "select * from user  where ID='$IDV'";
$resultl = $conn->query($sqll) or die($conn->error); 
while ($rowl = $resultl->fetch_assoc()) {
$like=$rowl["star"] ; 
}
$moy=$like /$nbr_p ;
{
  if (
    ! empty($_GET["001"]) 
   ) {

 
    $valeur=0 ;

    $sqlttt = "select * from star  where id_h='$IDV' and id_v='$ID' ";
    $resulttt = $conn->query($sqlttt) or die($conn->error); 
    $starC=new starC() ;
    while ($rowttt = $resulttt->fetch_assoc()) {
      $valeur=$rowttt["valeur"] ; 
    }
     $like-=$valeur ; 
    
    $starC->supprimerstar($IDV, $ID) ; 
   
    $star=new star(
  $IDV, 
  $ID, 
  1,
  ) ;
  
  $starC->ajouterstar($star) ;
  $like+=1; 
  $sqls = "select * from star  where id_h='$ID'";
  $results = $conn->query($sqls) or die($conn->error); 
  $nbr_p=mysqli_num_rows($results) ; 
  if ($nbr_p==0) {
  
    $nbr_p=1; 
  }
  $moy=$like /$nbr_p ;
  $sqladd = "   update user set   star=$moy  where ID='$IDV' ";
  
        $resultadd = $conn->query($sqladd) or die($conn->error);
        

 }  
  if (
   
    !empty($_GET["002"]) 
   
 
    
) {
  $valeur=0 ;

  $sqlttt = "select * from star  where id_h='$IDV' and id_v='$ID' ";
  $resulttt = $conn->query($sqlttt) or die($conn->error); 
  $starC=new starC() ;
  while ($rowttt = $resulttt->fetch_assoc()) {
    $valeur=$rowttt["valeur"] ; 
  }
   $like-=$valeur ; 
  
  $starC->supprimerstar($IDV, $ID) ; 
 
  $star=new star(
$IDV, 
$ID, 
2,
) ;

$starC->ajouterstar($star) ;
$like+=2; 
$sqls = "select * from star  where id_h='$ID'";
$results = $conn->query($sqls) or die($conn->error); 
$nbr_p=mysqli_num_rows($results) ; 
if ($nbr_p==0) {

  $nbr_p=1; 
}
$moy=$like /$nbr_p ;
$sqladd = "   update user set   star=$moy  where ID='$IDV' ";

      $resultadd = $conn->query($sqladd) or die($conn->error);

 


    
  
} 
if (
 
 ! empty($_GET["003"]) 

 

  
) {
   
  $valeur=0 ;

  $sqlttt = "select * from star  where id_h='$IDV' and id_v='$ID' ";
  $resulttt = $conn->query($sqlttt) or die($conn->error); 
  $starC=new starC() ;
  while ($rowttt = $resulttt->fetch_assoc()) {
    $valeur=$rowttt["valeur"] ; 
  }
   $like-=$valeur ; 
  
  $starC->supprimerstar($IDV, $ID) ; 
 
  $star=new star(
$IDV, 
$ID, 
3,
) ;

$starC->ajouterstar($star) ;
$like+=3;
$sqls = "select * from star  where id_h='$ID'";
$results = $conn->query($sqls) or die($conn->error); 
$nbr_p=mysqli_num_rows($results) ; 
if ($nbr_p==0) {

  $nbr_p=1; 
} 
$moy=$like /$nbr_p ;
$sqladd = "   update user set   star=$moy  where ID='$IDV' ";

      $resultadd = $conn->query($sqladd) or die($conn->error);
  


  

}
if (
  
 ! empty($_GET["004"]) 


  
) {


   
  $valeur=0 ;

  $sqlttt = "select * from star  where id_h='$IDV' and id_v='$ID' ";
  $resulttt = $conn->query($sqlttt) or die($conn->error); 
  $starC=new starC() ;
  while ($rowttt = $resulttt->fetch_assoc()) {
    $valeur=$rowttt["valeur"] ; 
  }
   $like-=$valeur ; 
  
  $starC->supprimerstar($IDV, $ID) ; 
 
  $star=new star(
$IDV, 
$ID, 
4,
) ;

$starC->ajouterstar($star) ;
$like+=4;
$sqls = "select * from star  where id_h='$ID'";
$results = $conn->query($sqls) or die($conn->error); 
$nbr_p=mysqli_num_rows($results) ; 
if ($nbr_p==0) {

  $nbr_p=1; 
} 
$moy=$like /$nbr_p ;
$sqladd = "   update user set   star=$moy  where ID='$IDV' ";

      $resultadd = $conn->query($sqladd) or die($conn->error);

  
  

}
if (

  !empty($_GET["005"])  
 

  
) {


  $valeur=0 ;

  $sqlttt = "select * from star  where id_h='$IDV' and id_v='$ID' ";
  $resulttt = $conn->query($sqlttt) or die($conn->error); 
  $starC=new starC() ;
  while ($rowttt = $resulttt->fetch_assoc()) {
    $valeur=$rowttt["valeur"] ; 
  }
   $like-=$valeur ; 
  
  $starC->supprimerstar($IDV, $ID) ; 
 
  $star=new star(
$IDV, 
$ID, 
5,
) ;

$starC->ajouterstar($star) ;
$like+=5; 
$sqls = "select * from star  where id_h='$ID'";
$results = $conn->query($sqls) or die($conn->error); 
$nbr_p=mysqli_num_rows($results) ; 
if ($nbr_p==0) {

  $nbr_p=1; 
}
$moy=$like /$nbr_p ;
$sqladd = "   update user set   star=$moy  where ID='$IDV' ";

      $resultadd = $conn->query($sqladd) or die($conn->error);

} 

  }

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
    <link rel="stylesheet" href="stylestar.css" />
    <link rel="stylesheet" href="stylenaj.css" />
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
<form action="" classe="profil" method="GET"  >
<?php
  
  if (4<$moy )
   {
    echo' 
      <div class="raiting-block" >
          <input id="raiting-block__item__05" class="raiting-block__item" type="radio"  name="05"  value="05"   checked  "  >
          <label " type="sumbit"  ></label>
          <input id="" class="raiting-block__item" type="radio" name="04" value="04"     >
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio" name="03" value="03"      ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"   name="02" value="02"     ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="01" value="01"    " >
          <label for=""></label>
      </div>
      ' ; 
  
   }
   if (4<=$moy&&$moy<5 )
   {
    echo' 
      <div class="raiting-block" >
          <input id="raiting-block__item__05" class="raiting-block__item" type="radio"   value="05" name="05"   "  >
          <label for="raiting-block__item__05" type="sumbit" type="submit"  ></label>
          <input id="" class="raiting-block__item" type="radio"  value="04" checked name="04"  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  value="03" name="03"  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="02" value="02"  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="01" value="01"  " >
          <label for=""></label>
      </div>
      ' ; 
  
   }
   if (3<=$moy&&$moy<4 )
   {
    echo' 
      <div class="raiting-block" >
          <input id="raiting-block__item__05" class="raiting-block__item" type="radio"   value="05" name="05"    "  >
          <label for="raiting-block__item__05" type="sumbit" type="submit"  ></label>
          <input id="" class="raiting-block__item" type="radio"  value="04" name="04"  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  value="03"  name="03" checked  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="02" value="02"  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="01" value="01"  " >
          <label for=""></label>
      </div>
      ' ; 
  
   }
   if (2<=$moy&&$moy<3)
   {
    echo' 
      <div class="raiting-block" >
      <input id="raiting-block__item__05" class="raiting-block__item" type="radio"   value="05" name="05"     >
      <label for="raiting-block__item__05" type="sumbit" type="submit"  ></label>
      <input id="" class="raiting-block__item" type="radio"  value="04"  name="04"  >
      <label for=""></label>
      <input id="" class="raiting-block__item" type="radio"  value="03" name="03" >
      <label for=""></label>
      <input id="" class="raiting-block__item" type="radio"  name="02"  checked value="02"  >
      <label for=""></label>
      <input id="" class="raiting-block__item" type="radio"  name="01" value="01"  >
      <label for=""></label>
      </div>
      
      ' ;   
  
  
  
  
   }
   if (1<=$moy&&$moy<2)
   {
    echo' 
    <div class="raiting-block" >
    <input id="raiting-block__item__05" class="raiting-block__item" type="radio"   value="05" name="05"     >
    <label for="raiting-block__item__05" type="sumbit" type="submit"  ></label>
    <input id="" class="raiting-block__item" type="radio"  value="04"  name="04"  >
    <label for=""></label>
    <input id="" class="raiting-block__item" type="radio"  value="03" name="03" >
    <label for=""></label>
    <input id="" class="raiting-block__item" type="radio"  name="02"   value="02"  >
    <label for=""></label>
    <input id="" class="raiting-block__item" type="radio"  name="01" checked value="01"  >
    <label for=""></label>
    </div>
      ' ; 
  
   }
   if (0<=$moy &&$moy<1   )
   {
    echo' 
      <div class="raiting-block" >
          <input id="raiting-block__item__05" class="raiting-block__item" type="radio"     name="05" value="05"  >
          <label for="raiting-block__item__05" type="sumbit" type="submit"  ></label>
          <input id="" class="raiting-block__item" type="radio"  name="04"  value="04"  ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="03"   value="03"   ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="02" value="02"   ">
          <label for=""></label>
          <input id="" class="raiting-block__item" type="radio"  name="01" value="01"  " >
          <label for=""></label>
      </div>
      
      ' ; 
  
   }
  
  
  ?>
      
    </form>
  
    <div class="grid-container">
        <div class="grid-item">
            <a class="navbar-brand" >HOME</a>
            
        </div>

        <div class="grid-item grid-item2">
      
        </div>

        <div class="grid-item">
            
            <a href="../../acceuil.php"> <img onmouseover="changeImgHome(this)" onmouseout="fixImgHome(this)" border="0"
                              src="Images\\w.home.png" alt="" align="middle"
                              class="home-icon"></a>
                             
                             
                             <?php
                        
                        
                    if ($ID==$IDV) 
                    {   echo'
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
    ' ;
                    } 
                    else {

                      echo' <form class="" method="post">' ;
                      echo'<br> <button name="msg" type="sumbit" class="btn btn--left" >Contacter</button>  ' ;   
                      echo' </form>';
                      }
                 
      ?>   
        </div>
        
        
    </div>
    
</nav>
<div class="container">
    <div class="info">
<?php

while ($row = $result->fetch_assoc()) 
        {
        echo'
        <img src="' .$row['IMG'].'" alt="img" class="profile-img">
        <p class="center">' .$row['NOM'].'</p>
        <p class="numposts">' .$row['DESCRIPTION'].'</p>
       
    '  ;
} 

    ?> 
    
    </div>
    <form action="go.php" method="GET" >
<div class="star">

<input id="star__item__05" class="star__item" type="radio"  name="005" valeur="005" onclick="submit()"  )>
     
<label for="star__item__05"></label>
      
        <input id="star__item__04" class="star__item" type="radio"  name="004" valeu="4"  onclick="  submit()"">
        <label for="star__item__04"></label>
        <input id="star__item__03" class="star__item" type="radio" name="003" value="3"  onclick="submit()">
        <label for="star__item__03"></label>
        <input id="star__item__02" class="star__item" type="radio" name="002" valuer="002"  onclick="submit()">
        <label for="star__item__02"></label>
        <input id="star__item__01" class="star__item" type="radio"  unchecked name="001" value="001"   onclick="submit()">
        <label for="star__item__01"></label>

        </div>          

      </form>
    <div id="Home" class="tabcontent" style="display: block;"
    <h3>Posts</h3>
    <div class="grid-container grid-container-post">
    <?php
 while ($rowp = $resultp->fetch_assoc()) 
 {   
    echo'
    <div class="grid-item grid-item-post">
            <img alt="picture"
                 src="'.$rowp['IMAGE'].'"
                 id="'.$rowp['REFERENCE'].'"
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