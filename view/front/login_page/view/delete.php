<?php
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/user.php';
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/controller/userC.php';
session_start();
$ID = $_SESSION['auth'];
if (isset($_POST['sub'])) {
  $userC = new userC();

  $userC->supprimerUser($ID);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title></title>
  <title>Le bazar culturel</title>
    <link rel="shortcut icon" href="../../images/logo.png">
  <link rel="stylesheet" href="a.css" />
</head>

<body>
  <!-- https://images.unsplash.com/photo-1519098901909-b1553a1190af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80 -->
  <div class="card">
    <div class="card-avatar">
      <img src="<?php echo $_SESSION['IMG'] ?>" alt="" class="card-image" />
      <span class="card-status"></span>
    </div>
    <h3 class="card-name"><?php echo $_SESSION['NOM'] ?></h3>
    <p class="card-desc">
      ARE YOU SUR ???
    </p>

    <div class="card-meta">
      <div class="card-meta-item">
    
      </div>

      <div class="card-meta-item">
      
        </div>
 
      </div>



   
      <div class="carda-action">
    <form class="b" method="post">
     

        <button type="submit" name="sub" class="card-button card-button--primary">Goodbye</button>



    </form>

  </div>

   
     

        <button type="submit" onclick="location.href = 'http://localhost/2A4/blog6/view/front/acceuil.php'" name="a" class="card-button card-button--secondary">Keep it</button>



    




</body>




</html>