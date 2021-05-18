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
            header('Location:../../view/back/afficherA2.php');
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script type="text/javascript">
 function testAlertDialog()  
 {
      alert("Votre article a été ajouté avec succès!");
 } 
</script>

</head>

 


    
    <body>
    <?php include_once 'header.php'; ?>
    <div class="container">

<!-- Page Heading/Breadcrumbs -->
<p class="mt-4 mb-4">
  <br>
</p>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="blog.php">blog</a>
  </li>
  <li class="breadcrumb-item active">Ajouter blog</li>
</ol>

<div class="row">
<tr></tr>


  <!-- Blog Entries Column -->
  <div class="col-md-8">

        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST"  >
            <table align="center">
            <tr>  
               <td>
                    <h1> 
                New article
            </h1>
        </td> 
    </tr>    
                <tr>  
                    <td>
                        <label class="label"  for="titre">titre:
                        </label>
                    </td>
                    <td><input class="controle" type="text" name="titre" id="titre" maxlength="50" required /></td>
                    <span class="resultat"></span>
                </tr>
                <tr>
                    <td>
                        <label class="label"  for="nomAuteur">Nom Auteur:
                        </label>
                    </td>
                    <td><input class="controle" type="text" name="nomAuteur" id="nomAuteur" maxlength="50" required /></td>
                    <span class="resultat"></span>
                </tr>
                
                <tr>
                    <td>
                        <label class="label"  for="description">description:
                        </label>
                    </td>
                    <td>
                        <input class="controle" type="text" name="description" id="description" maxlength="500" required /></>
                    </td>
                    <span class="resultat"></span>
                </tr>
                <tr>
                    
                    <td>
                        <label class="label"  for="dateA">dateA:
                        </label>
                    </td>
                    <td>
                        <input class="controle" type="date_local" name="dateA" id="dateA" required />
                        <script>
                            $('#dateA').val(new Date().toJSON().slice(0,10));
                        </script>
                    </td>
                    <span class="resultat"></span>
                </tr>
                <tr>
                    <td>
                        <label class="label"  for="image">Image:
                        </label>
                    </td>
                    <td>
                    <form class="controle" enctype="multipart/form-data" method="post" autocomplete="on" action="upload/">
                        <p>
                        <input type="file" name="image" id="image" required />
                        </p>
                        <span class="resultat"></span>
                       <p class="submitter two-thirds columns"> 
                       <input type="submit" value="Ajouter" onclick="testAlertDialog()" required > 
                      
                        </form>
                    </td>
                     
            </table>
        </form>
        
<style>
input.controle {
  outline:0;
  font-size:14px;
  width:250px;
}	
label.label {
  display:inline-block;
  width:200px;
  text-align: right;
  font-style: italic;
  margin-right:5px;
}
input.controle:valid {
  border:3px solid #0a0;
}
input.controle:invalid {
  border:3px solid #a00;
}
input.controle:valid + span:before  {
  content: "\f00c";
  font-family: "fas fa-check";
  color:#0a0;
  font-size: 1.5em;
}	
input.controle:invalid + span:before  {
  content: "\f00d";
  font-family: "fas fa-times";
  color:#a00;
  font-size: 1.5em;
}
</style>


<?php include_once 'footer.php'; ?>

    </body>
</html>