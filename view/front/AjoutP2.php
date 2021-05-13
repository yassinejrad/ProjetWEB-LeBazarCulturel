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
    
            );
            $userC->ajouterattente($user);
            header('Location:../../view/back/afficheAttente.php');
        }
        else
            $error = "Missing information";
    }
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="dark.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />




    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>

    <style>
    .form-control {
        height: calc(2.4rem + 2px);
        border: 1px solid #444951;
        background: transparent;
        border-radius:33px;
        color: #979a9f;
        padding: 0.45rem 0.75rem;
    }

    input.form-control:valid {
        border: 3px solid #0a0;
    }

    input.form-control:invalid {
        border: 3px solid #a00;
    }

    input.form-control:valid+span:before {
        content: "\f00c";
        font-family: "FontAwesome";
        color: #0a0;
        font-size: 1.5em;
    }

    input.form-control:invalid+span:before {
        content: "\f00d";
        font-family: "FontAwesome";
        color: #a00;
        font-size: 1.5em;
    }
    </style>

<script LANGUAGE="javascript">
    function ok() {
        alert("Votre produit a été ajouté avec succès!");
    }


    function surligne(myForm, erreur) {
        if (erreur)
            myForm.style.backgroundColor = "#fba";
        else
            myForm.style.backgroundColor = "";
    }

    function verifNB(myForm) {
        var NB = parseInt(myForm.value);
        if (isNaN(NB) || NB < 0) {
            surligne(myForm, true);
            return false;
        } else {
            surligne(myForm, false);
            return true;
        }
    }

    function verifReff(myForm) {
        if (myForm.value.length == 0) {
            surligne(myForm, true);
            return false;
        } else {
            surligne(myForm, false);
            return true;
        }

    }

    function verifform(f) {

        var NBOk = verifqteP(f.NB);
        var refOk = verifReff(f.ref);

        if (NBOk && refOk)
            return true;
        else {
            alert("Veuillez remplir correctement tous les champs");
            return false;
        }
    }


    function verifier() {
        var nom = document.getElementById("NOM").value



        if (nom.charAt(0) < "A" || nom.charAt(0) > "Z") {
            //alert("le nom doit etre en majuscule")
            document.querySelector("#erreur").innerHTML = "le nom doit etre en majuscule"
            return false
        }
    }

    function date() {
        $('#DATE').val(new Date().toJSON().slice(0, 10));
    }
    </script>
</head>
    <body>
    
    <?php
        foreach($liste2 as $a) {
    ?>
    <?php include_once 'header.php'; ?>
    <?php
    }
    ?>
    <div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">
    <br>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Products</li>
</ol>


    <form action="AjoutP2.php" method="POST">
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block margin-bottom-sm">
                            <div class="title"><strong>Product Table</strong></div>
                            <div class="table-responsive">
                                <div class="card-header">
                                    <i class="fas fa-table"></i> Ajouter un nouveau produit
                                </div>

                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <form id="myForm" method="POST" onsubmit="return verifform(this)">

                                        <label style="font-weight: bold"> Nom du produit </label>
                                        <input type="text" class="form-control" id="NOM" name="NOM"
                                            placeholder="Nom du produit" value=" " onblur="verifier()"
                                            style="width:500px" pattern="[0-9a-zA-Z-\.]{3,12}" required> </br>
                                        <label style="font-weight: bold"> Description du produit </label>
                                        <textarea class="form-control" name="DESC" placeholder="Description  du produit"
                                            value=" " //onblur="verifReff(this) " style="width:500px" cols="30"
                                            rows="10" pattern="[0-9a-zA-Z-\.]{3,100}" required> </textarea> </br>
                                        <label style="font-weight: bold"> Prix dt </label>
                                        <input type="number" class="form-control" onblur="verifNB(this)"
                                            class="form-control " name="PRIX" value=" " min="0" max=""
                                            placeholder="Prix en Dt " style="width:200px " required></br>
                                        <label style="font-weight: bold">Date D'Ajout</label> </br>
                                        <input type="date-local" class="form-control" id="DATE" name="DATE" value=""
                                            required>
                                            <script>
                                        $('#DATE').val(new Date().toJSON().slice(0, 10));
                                        </script>
                                        </br>
                                        <label style="font-weight: bold">FreeQuantity</label> </br>
                                        <input type="number" class="form-control" id="quantite" name="QTE" min="0"
                                            max="" required>
                                        </br>
                                        <label style="font-weight: bold">CATEGORIE</label> </br>
                                        <select name="CATEGORIE" id="CATEGORIE" class="form-control mb-3 mb-3"
                                            onblur="verifReff(this)" required>
                                            <option> Select </option>
                                            <?php
                              foreach($liste as $t) {
                            ?>
                                            <option value = "<?php echo $t['CODE'] ?>"> <?php echo $t['NOM'] ?> </option>
                                            <?php
                              }
                            ?>
                                        </select>
                                        </br>
                                        <label style="font-weight: bold">USER</label> </br>
                                        <select name="USER" id="USER" class="form-control mb-3 mb-3"
                                            onblur="verifReff(this)" required>
                                            <option> Select </option>
                                            <?php
                              foreach($liste1 as $t) {
                            ?>
                                            <option> <?php echo $t['ID'] ?> </option>
                                            <?php
                              }
                            ?>
                                        </select>

                                        </br> <label style="font-weight: bold">Ajouter une photo</label></br>
                                        <input type="file" name="IMAGE" accept="image/png,image/jpeg" required>
                                        </br>
                                        </br>

                                        <input type="button"
                                            onclick="document.getElementById('id').style.display='block'" value="Save"
                                            name="Submit" class=" btn btn-outline-success ">
                                        <input type="reset" value="Reset" name="reset" class="btn btn-outline-danger">
                                       <!-- <input type="submit" value="submit" name="submit" class="btn btn-primary"
                                            onclick="verifier()">-->
            

                                        <div id="id" class="modal">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <form method="POST" action="">
                                                    <strong>Great !</strong> You just added a Product
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <div class="clearfix ">
                                                        <input type="submit"
                                                            onclick="document.getElementById('id').style.display='none'"
                                                            class="btn-secondary" value="Okay">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <script>
                                        var modal = document.getElementById('id')
                                        window.onclick = function(event) {
                                            if (event.target == modal) {
                                                modal.style.display = "none";
                                            }
                                        }
                                        </script>


                                        <script>
                                        $('#DATE').val(new Date().toJSON().slice(0, 10));
                                        </script>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </form>
</div>
    </div>
        <?php include_once 'footer.php'; ?>
    </body>
</html>