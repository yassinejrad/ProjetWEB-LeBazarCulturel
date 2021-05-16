<?php
	include_once '../../controller/articleC.php';
	include_once '../../model/article.php';
    $error = "";
	$articleC = new articleC();
	if (
		isset($_POST["titre"]) && 
        isset($_POST["nomAuteur"]) &&
        isset($_POST["description"]) && 
        isset($_POST["dateA"]) && 
        isset($_POST["image"])
	){
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
			
            $articleC->modifierarticle($article, $_GET['id']);
            header('Location:blog.php');
        }
        else
            $error = "Missing information";
	}
   
?>

<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">
<!--titre-->
    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">
<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
   
   
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
  <li class="breadcrumb-item active">Modifier blog</li>
</ol>
<div class="row">
<tr></tr>
  <!-- Blog Entries Column -->
  <div class="col-md-8">
  
        <div id="error">     
            <?php echo $error; ?>
        </div>
<!--recupererarticle-->  
		<?php
         if(isset($_GET['id']) ) {  
            $article=$articleC->recupererarticle($_GET['id']); 
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						
					</td>
				</tr>
				<tr>
					<td>
						<label for="titre">titre:
						</label>
					</td>
					<td>
						<input type="text" name="titre" id="titre" maxlength="20" value="<?php echo $article['titre'];?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="nomAuteur">nom_Auteur:
                        </label>
                    </td>
                    <td><input type="text" name="nomAuteur" id="nomAuteur" maxlength="20" value="<?php echo $article['nomAuteur'];?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="description">description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description" maxlength="500" value="<?php echo $article['description'];?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>
                    </td>
                    <td>
                        <label for="dateA">dateA:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateA" id="dateA" value="<?php echo $article['dateA'];?>">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="image">image:
                        </label>
                    </td>
                    <td>
                    <form enctype="multipart/form-data" method="post" autocomplete="on" action="upload/">
                        <p>
                        <input type="file" name="image" id="image" value="<?php echo $article['image'];?>"> 
                        </p>
                        <p class="submitter two-thirds columns"> 
                  </form>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer" > 
                    </td>
                    <td>
                        <input type="reset" value="Annuler"  >
                    </td>                   
                </tr>
            </table>
        </form>

        <?php
        }
    ?>
    <script src="black.js"></script>
	<?php include_once 'footer.php'; ?>
	</body>
</html>