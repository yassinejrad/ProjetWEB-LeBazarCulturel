<?php
    include_once  '../../controller/produitC.php';
    include_once '../../model/produit.php';
    include_once  '../../controller/categorieC.php';
    include_once '../../model/categorie.php';
    include_once  '../../controller/attenteC.php';
    include_once '../../model/attente.php';
    $error = "";
    $inf2= new categorieC();
      $liste=$inf2->recupererCategorie();
      $inf4= new categorieC();
      $liste1=$inf4->recupereruser();
      $inf3= new categorieC();
      $liste3=$inf3->afficherCategories();
      $inf5= new categorieC();
      $liste2=$inf5->afficherCategories();
    // create user
    $user = null;
    
    // create an instance of the controller
    $userC = new attenteC();
    
    if (
        isset($_POST["NOM"]) && 
        isset($_POST["PRIX"]) &&
        isset($_POST["DATE"]) && 
        isset($_POST["QTE"]) && 
        isset($_POST["IMAGE"])&& 
        isset($_POST["DESC"])&&
        isset($_POST["CATEGORIE"])&&
        isset($_POST["USER"])
    ) {
        if (
            !empty($_POST["NOM"]) && 
            !empty($_POST["PRIX"]) && 
            !empty($_POST["DATE"]) && 
            !empty($_POST["QTE"]) && 
            !empty($_POST["IMAGE"]) && 
            !empty($_POST["DESC"]) &&
            !empty($_POST["CATEGORIE"])&&
            !empty($_POST["CATEGORIE"]) 
            
        ) {
            $user = new produit(
              $_POST['NOM'],
                $_POST['PRIX'], 
                $_POST['DATE'],
                $_POST['QTE'],
                $_POST['IMAGE'],
                $_POST['DESC'],
                $_POST['CATEGORIE'],
                $_POST['USER'],
                1
               
    
            );
            $userC->ajouterattente($user);
           header('Location:categeorie2.php');
        }
        else
            $error = "Missing information";
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<meta name="author" content="">
    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap2/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util2.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>

<form action="" method="POST"  >
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
                Ajouter un produit
				</span>
             
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"  for="NOM">Nom du produit</span>
          <br>
					<input   class="controle" type="text" name="NOM" id="NOM" placeholder="Entrez le nom du produit" maxlength="50" pattern="[0-9a-zA-Z-\.]{3,12}" required />
					<span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100"for="DESC" >Description du produit</span>
          <br>
					<input class="controle" type="text" name="DESC" id="DESC" maxlength="500" placeholder="Entrez votre description ici..." required />
                    <span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="PRIX">Prix dt</span>
          <br>
					<input class="controle" type="number" name="PRIX" id="PRIX"  min="0" max="" placeholder="Entrez le nom d'auteur" maxlength="50" required  />
					<span class="resultat"></span>
				</div>

          <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="DATE">Date D'Ajout</span>
          <br>
					<input class="controle"  type="date_local" name="DATE" id="DATE" placeholder="Entrez le titre du blog" maxlength="50" required />
					<span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="QTE">Quantité</span>
          <br>
					<input class="controle"   type="number" name="QTE" id="QTE" placeholder="Entrez le nom d'auteur" maxlength="50" required  />
					<span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="CATEGORIE">CATEGORIE</span>
          <br>
         <select name="CATEGORIE" id="CATEGORIE" class="controle" required>
                                            <option> Select </option>
                                            <?php
                              foreach($liste as $t) {
                            ?>
                                            <option value = "<?php echo $t['CODE'] ?>"> <?php echo $t['NOM'] ?> </option>
                                            <?php
                              }
                            ?>
                                        </select>
					<span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="USER">USER</span>
          <br>
          <select name="USER" id="USER" class="controle" required>
                                            <option> Select </option>
                                            <?php
                              foreach($liste1 as $t) {
                            ?>
                                            <option> <?php echo $t['ID'] ?> </option>
                                            <?php
                              }
                            ?>
                                        </select><span class="resultat"></span>
				</div>

            <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100" for="IMAGE">Image</span>
                    <form class="controle" enctype="multipart/form-data" method="post" autocomplete="on" action="upload/">
                        <p>
                        <input  type="file" name="IMAGE" id="IMAGE" accept="image/png,image/jpeg" required />
                        </p>
                        <span class="resultat"></span>
                        </form>
				</div>

             <!--   <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100" for="STATUE">Statue</span>
                    <select name="STATUE" id="STATUE" class="form-control mb-3 mb-3" required >
               <option value="select" selected>Select</option> 
           <option value ="1"> nouveauté   </option>
  <option value ="2"> EN PROMO </option>
  </select>
				</div> 
            -->
        
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			
		</div>
	</div>
</form>
<style>
input.controle {
  outline:0;
  font-size: 18px;
  width:250px;
  line-height: 1.5;
}	
label.label {
  font-family: Poppins-Medium;
  font-size: 18px;
  color: #666666;
  line-height: 1.5;
  padding-left: 5px;
}
/*input.controle:valid {
  border:3px solid #0a0;
}
input.controle:invalid {
  border:3px solid #a00;
}*/
input.controle:valid + span:before  {
    
  content: "\f00c";
  font-family: "FontAwesome";
  color:#0a0;
  font-size: 1.5em;
}	
input.controle:invalid + span:before  {
  content: "\f00d";
  font-family: "FontAwesome";
  color:#a00;
  font-size: 1.5em;
}
</style>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery2/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap2/js/popper.js"></script>
	<script src="vendor/bootstrap2/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
    <script>
                            $('#DATE').val(new Date().toJSON().slice(0,10));
        </script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main2.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
