<?php
session_start();
    require_once '../../../../config.php';
    require_once '../../../../Controller/artisteC.php';
    $artisteC =  new artisteC();
if(isset($_POST['Email']) && isset($_POST['Code']))
	{
        $Email = $_POST['Email'];   
        $Code = $_POST['Code'];
        if (!empty($Email) && !empty($Code))  
            {   
                $requser = connexionArtiste($Email, $Code);
                $userexist = $requser->rowCount();
                if ($userexist == 1)
                    {
                        $userinfo = $requser->fetch();
                        $_SESSION['id'] = $userinfo['id'];
                        $_SESSION['Nom'] = $userinfo['Nom'];
                        $_SESSION['Prenom'] = $userinfo['Prenom'];
                        header("Location:ProfilArtiste.php?id=".$_SESSION['id']);
                    } 
                else {$erreur = "Mauvais mot de passe!!";}
            }
        else {$erreur = "Vous devez remplir tous les champs";}
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

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
	<?php include_once 'header.php'; ?>
	<section class="container mastosection my-5">
        <h2>Ajouter un service</h2>
        <div class="form-container zone">
            <form action="" method = "POST">
                <div class="row">
                	<div class="col-25">
                	    <label>Adresse mail</label>
                	</div>
                	<div class="col-75">
                	    <input type="text" name = "Email" value="<?php if(isset($Email)){echo $Email;} ?>">
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

	<script src="../assets/js/script.js"></script>
</body>

</html>