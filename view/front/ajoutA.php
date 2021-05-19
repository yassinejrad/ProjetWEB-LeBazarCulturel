<?php
 
    include '../../Controller/articleC.php';
    include_once  '../../controller/attenteaC.php';
    $error = "";
    // create article
    $article = null;
    // create an instance of the controller
    $articleC = new attenteaC();
    if (
        isset($_POST["titre"]) && 
        isset($_POST["nomAuteur"]) &&
        isset($_POST["description"]) && 
        isset($_POST["dateA"]) && 
        isset($_POST["image"])
    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["nomAuteur"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["dateA"]) && 
            !empty($_POST["image"])
        ) {
            $article = new article(
                $_POST['titre'],
                $_POST['nomAuteur'], 
                $_POST['description'],
                $_POST['dateA'],
                $_POST['image']
            );
            $articleC->ajouterattentea($article);
           header('Location:blog.php');
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
                Ajouter un article
				</span>
             
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"  for="titre">Titre</span>
          <br>
					<input   class="controle" type="text" name="titre" id="titre" placeholder="Entrez le titre du blog" maxlength="50" required />
					<span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="nomAuteur">Nom Auteur</span>
          <br>
					<input class="controle"   type="text" name="nomAuteur" id="nomAuteur" placeholder="Entrez le nom d'auteur" maxlength="50" required  />
					<span class="resultat"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100"for="description" >Description</span>
          <br>
					<input class="controle" name="description" id="description" maxlength="500" placeholder="Entrez votre description ici..." required />
                    <span class="resultat"></span>
				</div>

          <div class="wrap-input100 validate-input" >
					<span class="label-input100" for="dateA">Date</span>
          <br>
					<input class="controle"  type="date_local" name="dateA" id="dateA" placeholder="Entrez le titre du blog" maxlength="50" required />
					<span class="resultat"></span>
				</div>


            <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100" for="image">Image</span>
                    <form class="controle" enctype="multipart/form-data" method="post" autocomplete="on" action="upload/">
                        <p>
                        <input  type="file" name="image" id="image" accept="image/png,image/jpeg" required />
                        </p>
                        <span class="resultat"></span>
                        </form>
				</div>

				
        
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
                            $('#dateA').val(new Date().toJSON().slice(0,10));
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
