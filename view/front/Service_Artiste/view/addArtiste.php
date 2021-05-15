<?php
    require '../../../../controller/artisteC.php';
    require_once 'CS.php';
    $artisteC =  new artisteC();
if 
    (
        isset($_POST['Nom']) && 
        isset($_POST['Prenom']) && 
        isset($_POST['Email']) && 
        isset($_POST['Numero']) && 
        isset($_POST['Type']) && 
        isset($_POST['Postal']) && 
        isset($_POST['Adresse']) && 
        isset($_POST['Code']) &&
        isset($_POST['CodeConfirmation'])
    )
	{
        $artiste = new Artiste
            (
                $Nom = $_POST['Nom'], 
                $Prenom = $_POST['Prenom'], 
                $Email = $_POST['Email'], 
                $Numero = $_POST['Numero'],    
                $Type = $_POST['Type'], 
                $Adresse = $_POST['Adresse'], 
                $Postal = $_POST['Postal'], 
                $Code = $_POST['Code'],  
            );

        $CodeConfirmation = $_POST['CodeConfirmation']; 
        $cs = Cs($Nom, $Prenom, $Email, $Numero, $Type, $Adresse, $Postal, $Code, $CodeConfirmation, $Mode); 
        if ($cs == 1 ) 
        {
            $artisteC->addArtiste($artiste);
            header('Location:ConnexionArtiste.php');
        }
   else {$erreur = $cs;}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Le Bazar Culturel: Service</title>
    <link href="../assets/front/css/style.css" rel="stylesheet" >
    <link href="../assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/front/css/styleServices.css" rel="stylesheet" >
    <style>

    </style>
</head>

<body>
	<?php include_once 'header.php'; ?>
	<section class="container mastosection">
        <h2>Créer un compte Artiste</h2>
        <div class="form-container">
            <form action="" method = "POST">
            	<div class="row">
            		<div class="col-25">
                	    <label>Nom</label>
                	</div>
                	<div class="col-75">
                	    <input type="text" name = "Nom" value="<?php if(isset($Nom)){echo $Nom;} ?>">
                	</div>
                </div>
                <div class="row">
                	<div class="col-25">
                	    <label>Prénom</label>
                	</div>
                	<div class="col-75">
                	    <input type="text" name = "Prenom" maxlength="20" value="<?php if(isset($Prenom)){echo $Prenom;} ?>">
                	</div>
                </div>
                <div class="row">
                	<div class="col-25">
                	    <label>Adresse mail</label>
                	</div>
                	<div class="col-75">
                	    <input type="text" name = "Email" value="<?php if(isset($Email)){echo $Email;} ?>">
                	</div>
                </div>
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Telephone</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name = "Numero" value="<?php if(isset($Numero)){echo $Numero;} ?>">
                    </div>
                </div>
                <div class="row">
                	<div class="col-25">                
                	    <label>Type </label>
                	</div>
                	<div class="col-75">
                	    <select name="Type" value="<?php if(isset($Type)){echo $Type;} ?>">  
                	        <option value="Photographie">Photographie</option>
                	        <option value="Peinture">Peinture</option>
                	        <option value="Sculture">Sculture</option>
                	        <option value="Instrument">Instrument</option>
                	        <option value="Livre">Livre</option>
                	    </select>
                	</div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Adresse</label>
                    </div>
                    <div class="col-75">
                        <input type="textarea" name = "Adresse" value="<?php if(isset($Adresse)){echo $Adresse;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Code postal</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "Postal" value="<?php if(isset($Postal)){echo $Postal;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Mot de passe</label>
                    </div>
                    <div class="col-75">
                        <input type = "password" name = "Code">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Mot de passe (Confirmation)</label>
                    </div>
                    <div class="col-75">
                        <input type = "password" name = "CodeConfirmation">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Envoyer!!" class="btn btn-primary" name = "submit">
                </div>
            </form>
            <?php 
            if (isset($erreur)) {echo $erreur;}
            else{$erreur = null;}
             ?>
            
        </div>
    </section>
	<?php include_once 'footer.php'; ?>
</body>
</html>