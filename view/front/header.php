<?php 
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';

  $inf1= new categorieC();
  $liste2=$inf1->afficherCategories();

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<header>

        
<nav class="navbar-expand-lg navbar-light badge-light fixed-top">

<div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img class="user-avatar rounded-circle" src="<?php echo $_SESSION['IMG']?>"  width=" 40px" alt="User Avatar">
                     </a>

                     <div class="user-menu dropdown-menu">
                         <a class="nav-link" href="#"> 
                             <?php
                    if($_SESSION['TYPE']=='Seller'){
                   echo'<a class="dropdown-item" href="http://localhost/2A4/blog6/view/front/login_page/view/profil.php"> Profile </a>';
}
else {
    echo'<a class="dropdown-item" href="http://localhost/2A4/blog6/view/front/login_page/view/edit.php"> Profile </a>';
}
    
    ?>  </a>

<a class="dropdown-item" href="http://localhost/2A4/blog6/view/front/login_page/view/favoris.php">Favoris</a>
<a class="dropdown-item" href="http://localhost/2A4/blog6/view/front/login_page/view/resh.php">Tous les profiles</a>
                    
                     </div>
                 </div>


    
        <div class="titre">
            <a href="index.php"><img class="logo" src="images/logo.png">
                <a class="nav-link" href="acceuil.php">Le bazar culturel</a>
        </div>
        

                  
                 <!--  -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="col-md-1">     
<input type="checkbox" class="checkbox" id="chk" />
        <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="ball"></div>
                </label>
    
        </div>
         <!--  -->
            <ul class="navbar-nav ml-auto">
           
                <li class="nav-item">
                    <a class="nav-link" href="about.php"> <i class="fas fa-address-card"></i> A propos de nous</a>
                </li>

                <li class="nav-justified dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-list-alt" aria-hidden="true"></i>
              Catégories
            </a>
            
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        
                        <?php
        foreach($liste2 as $a) {
    ?>
                        <a class="dropdown-item" href="categorie2.php?CODE=<?php echo $a['CODE'] ?>"><?php echo $a['NOM'] ?></a>
      
                        <?php
    }
    ?>
                    </div>
                   
          
                </li>
          <li class="nav-item">
                    <a class="nav-link" href="services.php"> <i class="fa fa-clone"></i> Services</a>
                </li>
                
                <li class="nav-justified dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-calendar "></i>  Evenements
            </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="event.php">  Evenements</a>
                        <a class="dropdown-item" href="sponsor.php">Sponseur</a>


                    </div>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="blog.php"> <i class="far fa-newspaper"></i> Articles </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Artiste
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                        <a class="dropdown-item" href="Tous les artistes.php">Tous les artistes</a>
                      
                    </div>
                </li>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-3">

                    <!-- Search Widget -->
                    <div class="card mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="recherche...">
                            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
        </div>
       
    </nav>
    
    </header>
    </html>