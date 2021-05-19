<?php
    include_once '../../Model/commentaire.php';
    include_once '../../Controller/commentaireC.php';

    $error = "";
    // create commentaire
    $commentaire = null;
    // create an instance of the controller
    $commentaireC = new commentaireC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["message"])
        
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["message"]) 
           
        ) {
            $commentaire = new commentaire(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['message']
            
            );
            $commentaireC->ajoutercommentaire($commentaire);
            //header('Location:readmore.php');
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
    <meta name="message" content="">
    <meta name="author" content="">

    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         
    <!-- Custom styles for this template -->
    
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <script src="js/alert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script type="text/javascript">
 function testAlertDialog()  
 {
      alert("Votre commentaire a été ajouté avec succès!");
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
                New commentaire
            </h1>
        </td> 
    </tr>
    
                <tr>
                    
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="50" required /></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="50" required /></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="message">message:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="message" id="message" maxlength="500" required /></td>
                    </td>
                </tr>
                <tr>
                    
                    
                    <td>
                       
                       <input type="submit" value="Ajouter" onclick="testAlertDialog()" required > 
                      <td>
                        </tr>
                     
            </table>
        </form>
        
        <?php include_once 'footer.php'; ?>
    </body>
</html>