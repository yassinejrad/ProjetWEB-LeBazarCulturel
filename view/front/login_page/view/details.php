<?php 
$conn = new mysqli("localhost", "dhia72", "191JMT1252", "bazarculturelle") ;
 
$IDV=$_GET["id"] ;
$sql = "select * from produits  where REFERENCE='$IDV'";
$result = $conn->query($sql) or die($conn->error);




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    /> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    />
    <title>CSS Units</title>
    <link rel="stylesheet" href="resetd.css" />
    <link rel="stylesheet" href="stylerrr.css" />
  </head>
  <body>
    <div class="product">
      <div class="product__left">

        <span class="product__size">1</span>
        <?php 
      while ($row = $result->fetch_assoc()) 
 {
  echo '<img src="'.$row["IMAGE"].'" alt="" class="product__image" />' ;
   echo'<ul class="dots">
   <li class="dots__item active"></li>
   <li class="dots__item"></li>
   <li class="dots__item"></li>
 </ul>
</div>
<div class="product__right">
 <h2 class="product__name">'.$row['NOM'].'</h2>
 <p class="product__price">
  <span class="product__sale"> </span>
   '.$row['PRIX'].'
 Dt </p>
 <p class="product__desc">
  '.$row['DESCP'].'
 </p>'; 
 } ; 
      ?> 
        
        
       
        <button class="btn btn--primary btn--rounded product__buy">
          
         By Now
          
        </button>
    
      </div>
    </div>
  </body>
</html>
