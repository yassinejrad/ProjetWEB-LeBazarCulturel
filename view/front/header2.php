<?php 
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';

  $inf1= new categorieC();
  $liste2=$inf1->afficherCategories();
?>

<!DOCTYPE html>
<html lang="en">
<header>

        
<nav class="navbar-expand-lg navbar-light badge-light fixed-top">

        <div class="login">

           
            
            <a style="color:black" href="login_page/view/login.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> S'inscrire/se connecter</a>
        </div>
        <div class="titre">
            <a href="#"><img class="logo" src="images/logo.png">
                <a class="nav-link" href="index.php">Le bazar culturel</a>
        </div>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="col-md-1">     

       </br>
    
        </div>
            <ul class="navbar-nav ml-auto">
         
               
               
          <li class="nav-item">
                   
                </li>
                <!-- Sidebar Widgets Column -->
               
            </ul>
        </div>
        </div>
       
    </nav>
    
    </header>
    </html>