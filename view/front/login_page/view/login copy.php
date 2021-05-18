<?php
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/user.php';
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/controller/userC.php';


$error = "";


$user = null;


$userC = new userC();

if (
    isset($_POST["NOM"]) && 
    isset($_POST["TEL"]) &&
    isset($_POST["ADRESSE"]) && 
    isset($_POST["EMAIL"]) && 
    isset($_POST["PASSE"]) 
)
 {
    if (
        !empty($_POST["NOM"]) && 
        !empty($_POST["TEL"]) && 
        !empty($_POST["ADRESSE"]) && 
        !empty($_POST["EMAIL"]) && 
        !empty($_POST["PASSE"]) && 
        !empty($_POST["female"]) &&   
         empty($_POST["male"])
     
        
    ) {

        $user = new user(
            $_POST['NOM'],
            $_POST['TEL'], 
            $_POST['ADRESSE'],
            $_POST['EMAIL'],
            $_POST['PASSE'],
            'female',
            $_POST['TYPE'] ,
            " "  ,
            $_POST['IMG']  ,
            0

        );
        $userC->ajouterUser($user);
        $userC->AUTH($_POST["EMAIL"],$_POST["PASSE"]) ; 
        
      
    }  
    else if (  
    !empty($_POST["NOM"]) && 
    !empty($_POST["TEL"]) && 
    !empty($_POST["ADRESSE"]) && 
    !empty($_POST["EMAIL"]) && 
    !empty($_POST["PASSE"]) && 
    !empty($_POST["male"]) &&   
    empty($_POST["female"])) {
        $user = new user(
            $_POST['NOM'],
            $_POST['TEL'], 
            $_POST['ADRESSE'],
            $_POST['EMAIL'],
            $_POST['PASSE'] , 
            'male' ,
            $_POST['TYPE'] , 
            " "  ,
            $_POST['IMG'],
            0 

);
        $userC->ajouterUser($user);


    }
    else {
        $error = "Missing information";
echo($error) ;
    } 

   
    
}
if (
    isset($_POST["EMAIL_AUTH"]) && 
    isset($_POST["PASSE_AUTH"])  ) 
    {
        if (
            !empty($_POST["EMAIL_AUTH"]) && 
            !empty($_POST["PASSE_AUTH"]) 
        ) 
        {
         $userC->AUTH($_POST["EMAIL_AUTH"],$_POST["PASSE_AUTH"]) ; 
        
       
    
        }
         else {

            $error = "Missing information";
            echo($error) ; 
           
         }

    }  



?>
    


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css" />
    <title>Sign in & Sign up Form</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="forms-container">

            <div class="signin-signup">
                <form action="login.php" method="post" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="email" name="EMAIL_AUTH">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="PASSE_AUTH">
                    </div>
                    <input type="submit" value="Login" class="btn solid">
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="login.php" class="sign-up-form" method="post">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="NOM" name="NOM" id="NOM" />
                    </div>
               
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="number" placeholder="TELEPHONE" name="TEL" id="TEL" />
                    </div>
                   

             
                
                  
                    <div class="input-field">
                        <i class="fas fa-address-card"></i>
                        <input type="text" placeholder="ADRESSE" name="ADRESSE" id="ADRESSE" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="EMAIL" name="EMAIL" id="EMAIL" />
                    </div>
                   
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="MOT DE PASSE" name="PASSE" id="PASSE" />
                    </div>
                    <div class="input-field">
                        <div class="select-box" >
                          
                            <select  name="TYPE">
                               
                            <option>Buyer</option>
                            <option>Seller</option>
                          
                        </select>
                    </div>
                        </div>

                     <div class="wrapper" >
                       <div class= "label" >
                        <input class="ch"  type="checkbox"   id="checkM" name= "male"/>  
                        <label for="check" > HOMME</label>      
                   
                     </div>
                     </div>
                      <div class="wrapper_f" >
                        <div class= "label" >
                        <input  class="ch" type="checkbox"   id="checkF" name="female"/>
                         <label for="check" > FEMME</label>      
                    
                       </div>
                       <script type="text/javascript" > 
                       $('.ch').on('change',function() {
                         $  ('.ch').not (this).prop('checked',false) ;   
                       }) ;
                       </script>
                       
                  
                     
                     </div>
                     <label class="label" style="font-weight: bold"> Photo</label></br>
                       <input    type="file" name="IMG" accept="image/png, image/jpeg" >

                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3> Are you New here ?</h3>
                    <p>Nice to meet you!</p>
                    <button class="btn transparent" id="sign-up-btn">
                      Sign Up
                    </button>
                </div>
                <img src="log.svg" class="image" alt="" />
            </div>
   

            <div class="panel right-panel">
                <div class="content">
                    <h3>You already had an account?</h3>
                    <p>Nice to meet you!</p>
                    <button class="btn transparent" id="sign-in-btn">
                      Sign In
                    </button>
                </div>
                <img src="register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

</body>

</html>