<?php
    include_once '../../Model/article.php';
    include_once '../../Controller/articleC.php';

    $error = "";

    // create article
    $article = null;

    // create an instance of the controller
    $articleC = new articleC();
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
            $articleC->ajouterarticle($article);
            header('Location:blog.php');
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
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <script src="js/alertArticle.js"></script>

    
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
        
        <form action="" method="POST">
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
                        <label for="titre">titre:
                        </label>
                    </td>
                    <td><input type="text" name="titre" id="titre" maxlength="50"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nomAuteur">Nom Auteur:
                        </label>
                    </td>
                    <td><input type="text" name="nomAuteur" id="nomAuteur" maxlength="120"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description" maxlength="500"></>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <label for="dateA">dateA:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateA" id="dateA" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Image:
                        </label>
                    </td>
                    <td>
                    <form enctype="multipart/form-data" method="post" autocomplete="on" action="upload/">
                        <p>
                        <input type="file" name="image" id="image" required />
                        </p>
                       <p class="submitter two-thirds columns"> 
                       <input type="submit" value="Ajouter" > 
                       
                        </form>
                    </td>
                     
            </table>
        </form>
        
        <?php include_once 'footer.php'; ?>
    </body>
</html>