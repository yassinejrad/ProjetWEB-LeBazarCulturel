<?php



$conn = new mysqli("localhost", "root", "", "databasephp") ;
$Buyer="Buyer" ; 
$sql = "select * from user where TYPE='$Buyer' ";

    if(!empty($_POST["q"]) ) {

        $name =$_POST["q"];  
        if(!empty($_POST["n"]) ){
            $sql = "select * from user where TYPE='$Buyer' and NOM ='$name' ORDER BY  NOM ";
            $result = $conn->query($sql);

        }
        else if(!empty($_POST["sex"]) ){
            $sql = "select * from user where  TYPE='$Buyer' and  NOM ='$name' ORDER BY  SEX ";
            $result = $conn->query($sql);

        }
        else if(!empty($_POST["tel"]) ){
            $sql = "select * from user where TYPE='$Buyer' and  NOM ='$name' ORDER BY  TEL ";
            $result = $conn->query($sql);

        } 
        else  {

    $sql = "select * from user where NOM ='$name'" ;
    $result = $conn->query($sql);
        }
        
       
    }

    $result = $conn->query($sql);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Profile Cards</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="maina.css">
    <script src="rech.js" defer> </script> 
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/1d4badc57d.js" crossorigin="anonymous"></script>
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src=script.js></script>
</body>
  



<html>

  <form action="" method="POST"  id="search-form">
    <div  class="search"  name="search_name" >  
      <input
       name="q"
        type="text"
        class="search-input"
        placeholder="Typing something..."
        autocomplete="off" 
        autofocus
        
      />
     </div>

    
     </form>
 
     <div class="radio-container" >
<h1>TYPE</h1>
  <input type="radio" id="tel" name="tel"  />
  <label for="tel">tel</label>

  <input type="radio" id="n" name="n"  />
  <label for="n">name</label>

  <input type="radio" id="sex" name="sex" />
  <label for="sex">sex</label>
</div>
  


   


    <!--    <a class="btn btn--radius-2 btn--red btn-align-sort" name="hello" type="submit"  role="button">sort</a> -->
       
    <form  action="" method="POST"> 
      <?php
         echo ' <section>' ;
           echo '<div class="container">' ;
           echo  '<h1 class="heading">Result</h1>';
        echo ' <div class="card-wrapper"> ' ; 
      
       while ($row = $result->fetch_assoc()) 
        {
            echo '
         
           
                <div class="card">
                    <img src="images/cardbg.jpg" alt="card background" class="card-img">
                    <img src="'. $row['IMG'] . '" alt="profileimage1" class="profile-img">
                    <h1>' . $row['NOM'] . '</h1>
                    <p class="job-title">' . $row['TEL'] . '</p>
                    <p class="about"> ' . $row['DESCRIPTION'] . '</p>
                    <a href="profil_v.php?ID='. $row['ID'].'" class="btn">Profil
                    </a>
                 
                </div>
             
            ';
            
        }


   
        echo ' </div>' ;
        echo ' </div>' ;
        echo ' </section>' ;

        ?>
    </form>

</html>



















</html>