<?php
<<<<<<< HEAD
$conn = new mysqli("localhost","root","","bazarculturelle") ;
=======
$conn = new mysqli("localhost", "dhia72", "191JMT1252", "bazarculturelle") ;
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
session_start();
$id=$_SESSION['auth'] ; 
$sql = "select * from produits p, user u ,favoris f where p.REFERENCE=f.id_produit and f.id_user='$id' and f.id_user=u.id ";
$result = $conn->query($sql) or die($conn->error);
$sqlt = "select * from produits p, user u ,favoris f where p.REFERENCE=f.id_produit and f.id_user='$id' and f.id_user=u.id ";
$resultz = $conn->query($sqlt) or die($conn->error);
$e=0; ;
while ($rowz= $resultz->fetch_assoc()) 
 {
    if (isset($_POST[$e])) {
         $d= $rowz["REFERENCE"];
        $sqld = "delete from favoris where id='$d'  ";
        $resultd = $conn->query($sqld) or die($conn->error); 
      header('location:favoris.php') ;   
    }
$f=$rowz['id_produit'] ;
    
 if (isset($_POST[$rowz['REFERENCE']])) {
    header('location:details.php?id='.$f.'') ;  

 }

   
$e++; 
   
 }

 
  
 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Slider by Juan Ioo</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="component.css">
   

    
    <link rel="stylesheet" href="css/lightslider.css" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--JQUERY-->
    <script type="text/javascript" src="js_f/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js_f/lightslider.js"></script>
    <script src="modernizr.custom.js"></script>
</head>
<body>
</html>

    
    <div class="compare-basket">
        <button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
    </div>
   
    <script src="classie.js"></script>
 
 <form action="" method="POST" >
  
      <?php
      
     echo '<div class="view">' ;
        
     echo '<section class="grid">' ;
      
     echo ' <div class="container">' ;
    
        echo '   <ul id="autoWidth" class="cs-hidden">' ;
            
 
     $n=0 ; 
            while ($row = $result->fetch_assoc()) 
            {
      
                echo '
                
                <li class="item-a">  <!--SLIDER BOX-->
             
                <div class="box">
                   
                   
                    <div class="product">
                        
                        <div class="product__info">
                            
                 <div class="imgbx">
                      <img class="product__image"src="'.$row["IMAGE"].'">
                    </div>
                
                    <img class="product__image"  />
                    
                </div>
			
                <label class="action action--compare-add"><input class="check-hidden" type="checkbox" /><i  class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">Add to compare</span></label>
         
            </div>
            <div class="content">
               
                <button name="'.$row['REFERENCE'].'" type="sumbit" class="btn btn--left"href="edit.html" >buy it</button>    <button name="'.$n.'" class="btn btn--right" onclick="location.href="edit.html"">delete</button>
                
                
                
            </div>
      
        
                </div>
                
                
            </li>
            ';
         
       $n++ ; 
     
        }
     


        echo ' </ul> ' ;
    echo ' </div> ' ;
        echo '</section>  ' ;
        echo '</div> ' ; 
        echo '
        <section class="compare">
        <button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
       </section> ';


    


  ?>

 </form>


<buttono onclick= ></button>


    <script src="classie.js"></script>
    <script src="az.js"></script>
    <script src="main.js"></script>

       
   
 
</body>
</html>