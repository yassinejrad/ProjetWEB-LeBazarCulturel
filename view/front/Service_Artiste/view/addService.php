<?php
session_start();
    require_once '../../../../Controller/serviceC.php';
    require_once '../../../../Model/Service.php';

    $serviceC =  new serviceC();
    if 
    (
        isset($_POST['Type']) && 
        isset($_POST['Prix']) && 
        isset($_POST['Description'])
    ) 
    {
        if 
            (
                !empty($_POST['Type']) && 
                !empty($_POST['Prix']) && 
                !empty($_POST['Description'])
            ) 
            {
                $service = new Service
                (
                    $Type = $_POST['Type'], 
                    $Prix = (float)$_POST['Prix'], 
                    $Description = $_POST['Description'],
                    $Id_A = $_GET['id']
                );
                if 
                    (
                        strlen($Type) <= 50 &&
                        strlen($Prix) <= 50 &&
                        strlen($Description) <= 600
                    ) 
                    {
                        if ($Type == "Photographie" || $Type == "Sculpture" || $Type =="Peinture"  || $Type == "Instrument" || $Type ==  "Livre") 
                            {                        
                                if ((float)$Prix>= 0) 
                                    {
                                        $serviceC->addService($service);
                                        header('Location:servicePerso.php?id='.$_SESSION['id']);
                                    }
                                else {$erreur = "Entrez une valeur supérieur à 0 pour le prix!!";}
                            }
                        else{$erreur = "Entrez une de ces 5 valeurs:  Photograpie/Sculture/Peinture/Instrument/Livre";}
                    }
                else{$erreur = "Veuillez respecter les règles suivantes:<br/>
                            -Pas plus de 11 caractères pour le type <br/>
                            -Pas plus de 600 caractères pour la description";}
            }
        else {$erreur = "Vueillez remplir tous les champs";}
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
	<section class="container zone">
        <div class="zone">
        <h2>Ajouter un service</h2>
        <a href = "services.php" class="btn btn-primary">Tous les services</a>
        <div class="form-container zone">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Type </label>
                    </div>
                    <div class="col-75">
                        <select name="Type" id="Type" value = "<?= $result['Type'] ?>">  
                            <option value="Photographie">Photographie</option>
                            <option value="Peinture">Peinture</option>
                            <option value="Sculpture">Sculpture</option>
                            <option value="Instrument">Instrument</option>
                            <option value="Livre">Livre</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Prix</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "Prix" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Description</label>
                    </div>
                    <div class="col-75">
                        <input type = "textarea" name = "Description">
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-25">
                        <label>Artiste Id</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "Id_A" >
                    </div>
                </div>--><br>
                <div class="row">
                    <input type="submit" value="Envoyer!!" class="btn btn-primary" name = "submit">
                </div>
            </form>
        </div>
    </div>
    </section>
    <?php 
    if (isset($erreur)) {echo $erreur;}?>
	<?php include_once 'footer.php'; ?>
</body>
</html>
