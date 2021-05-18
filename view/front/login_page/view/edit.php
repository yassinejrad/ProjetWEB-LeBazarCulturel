<?php
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/user.php';
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/controller/userC.php';
session_start();
$ID = $_SESSION['auth'];
$t= $_SESSION['TYPE'];
$img=$_SESSION['IMG'];
$userC = new userC();



$user = null;
if (
  isset($_POST["NOM"]) &&
  isset($_POST["TEL"]) &&
  isset($_POST["ADRESSE"]) &&
  isset($_POST["EMAIL"]) &&
  isset($_POST["PASSE"])
) {
  if (
    !empty($_POST["NOM"]) &&
    !empty($_POST["TEL"]) &&
    !empty($_POST["ADRESSE"]) &&
    !empty($_POST["EMAIL"]) &&
    !empty($_POST["PASSE"]) &&
    !empty($_POST["sex"])



  ) {
    if ($_SESSION['TYPE']=='Seller'){
      $dec= $_POST['DESCRIPTION'];
    }
    else 
    {
     $dec='';
    }

    $user = new user(
      $_POST['NOM'],
      $_POST['TEL'],
      $_POST['ADRESSE'],
      $_POST['EMAIL'],
      $_POST['PASSE'],
      'female',
      $t , 
$dec ,
      $img,
      0


    );
    $userC->modifierUSER($user, $ID);
    $_SESSION['NOM']= $_POST['NOM'];  
    $_SESSION['DESCRIPTION']=   $_POST['DESCRIPTION']  ;
    if ($_SESSION['TYPE']=='Seller'){
      header('location:profil.php') ;
    }
    else 
    {
      header('location:http://localhost/2A4/blog6/view/front/acceuil.php') ;
    }
  } else if (
    !empty($_POST["NOM"]) &&
    !empty($_POST["TEL"]) &&
    !empty($_POST["ADRESSE"]) &&
    !empty($_POST["EMAIL"]) &&
    !empty($_POST["PASSE"]) &&
    empty($_POST["sex"])
  ) {
    if ($_SESSION['TYPE']=='Seller'){
      $dec= $_POST['DESCRIPTION'];
    }
    else 
    {
     $dec='';
    }
    $user = new user(
      $_POST['NOM'],
      $_POST['TEL'],
      $_POST['ADRESSE'],
      $_POST['EMAIL'],
      $_POST['PASSE'],
      'male',
      $t,
      $dec,
      $img,
      0       

    );
    $userC->modifierUSER($user, $ID);
    $_SESSION['NOM']= $_POST['NOM'];  
    $_SESSION['DESCRIPTION']=   $_POST['DESCRIPTION'] ;
    if ($_SESSION['TYPE']=='Seller'){
      header('location:profil.php') ;
    }
    else 
    {
      header('location:http://localhost/2A4/blog6/view/front/acceuil.php') ;
    }
    
  } else {
    $error = "Missing information";
    echo ($error);
  }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <title>Button hover effects</title>

    <link rel="stylesheet" href="styleb.css" />
  </head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>SpeedCode</title>
  <link rel="stylesheet" href="reseteed.css" />
  <link rel="stylesheet" href="styleed.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="signup">
    <h2 class="signup__heading">Modify Profile</h2>


    <?php
    $ligne = $userC->afficherUser_specifique($ID);
    foreach ($ligne as $a) {

    ?>
      <form action="edit.php" class="signup__form" autocomplete="off" method="post">
        <div class="form__group">
          <input type="text" name="NOM" class="form__input" placeholder="NAME" value="<?php echo $a['NOM'] ?>" />
        </div>
        <div class="form__group">
          <input type="text" class="form__input" name="TEL" placeholder="Tel" value="<?php echo $a['TEL'] ?>" />
        </div>
        <div class="form__group">
          <input type="text" class="form__input"  name="ADRESSE" placeholder="ADRESSE" value="<?php echo $a['ADRESSE'] ?> " />
        </div>

        <div class="form__group">
          <input type="email" class="form__input"   name="EMAIL" placeholder="Email" value="<?php echo $a['EMAIL'] ?> " />
        </div>



        <div class="form__group">
          <input type="text" class="form__input" name="PASSE" placeholder="Passeword" value="<?php echo $a['PASSE'] ?> " />
        </div>

        <?php
 if ($_SESSION['TYPE']=='Seller'){
echo ' 
<div class="form__group">
<textarea class="form__input" name="DESCRIPTION" placeholder="Discription">'. $a['DESCRIPTION']. ' </textarea>
</div>' ;
 }
?>
i

        <div class="form__group">
          <label for="toggle-input" class="toggle">
            <h2 class="sex__heading"> Male or Female </h2>


            <input type="checkbox" class="toggle__input" name="sex" id="toggle-input" <?php
                                                                                      if (!($a['SEX'] == "male")) {
                                                                                        echo 'checked';
                                                                                      }

                                                                                      ?> />

            <div class="toggle__bar">
              <div class="toggle__spin"></div>
            </div>
    
      </label>
  </div>
  <div class="form__group">
    <button    class="form__submit"    >
      <span class="17a2b8">Modifier</span><i class="fa fa-long-arrow-right form__submit-icon"></i>
 
    </button>
 
  </div>

  
   
 
  </form>
  


<?php


    }



?>





<div class="tired">

<button   type="submit"  onclick="location.href = 'delete.php';"  class="btn btn--left">Delete  


</button>
   

 </div>  

 </div>

</body>

</html>