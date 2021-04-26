<?php


   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <title>Button hover effects</title>
    <link rel="stylesheet" href="resetb.css" />
    <link rel="stylesheet" href="styleb.css" />
  </head>
    
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
    rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Profile</title>
    <link rel="icon" href="" type="image/icon type">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title></title>
    <link rel="stylesheet" href="resetz.css" />
    <link rel="stylesheet" href="stylez.css" />
   
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
<script src="navbar.js"></script>

<link rel="stylesheet" href="stylep.css">
<nav class="navbar navbar-inverse">
    <div class="grid-container">
        <div class="grid-item">
            <a class="navbar-brand" >HOME</a>
        </div>

        <div class="grid-item grid-item2">
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn--left" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="grid-item">
            <a href="#"> <img onmouseover="changeImgHome(this)" onmouseout="fixImgHome(this)" border="0"
                              src="Images\\w.home.png" alt="" align="middle"
                              class="home-icon"></a>
         
        </div>
    </div>
</nav>
<div class="container">
    <div class="info">
        <img src="Images\ros.jpg" alt="img" class="profile-img">
        <p class="center">Rostom</p>
        <p class="numposts">9</p>
        <p class="posts">𝑷𝒐𝒔𝒕𝒔</p>
        <p class="numfollowers">207</p>
        <p class="followers">𝑭𝒐𝒍𝒍𝒐𝒘𝒆𝒓𝒔</p>
        <p class="name">Description</p>
        <button class="btn btn--top" type="button" id="myButton" onclick="location.href = 'edit.php';" class="btn btn-light"
                style="height: 3rem; width: 9rem;">Modify
        </button>
        <i class="fa fa-gear" style="font-size:30px; margin-left: 2%;"></i>
    </div>




    <div id="Home" class="tabcontent" style="display: block;"
    <h3>Posts</h3>
    <div class="grid-container grid-container-post">
        <div class="grid-item grid-item-post">
            <img alt="picture"
                 src="images/1.jpg"
                 class="img-fluid"/>

        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/2.jpg"
                 class="img-fluid"/>

        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/3.jpg"
                 class="img-fluid"/>
        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/4.jpg"
                 class="img-fluid"/>
        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/5.jpg"
                 class="img-fluid"/>
        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/6.jpg"
                 class="img-fluid"/>
        </div>

        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/7.jpg"
                 class="img-fluid"/>
        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/8.jpg"
                 class="img-fluid"/>
        </div>
        <div class="grid-item grid-item">
            <img alt="picture"
                 src="images/9.jpg"
                 class="img-fluid"/>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
  
    <span class="close">&times;</span>
    
    <img class="modal-content" >
    <div class="screen-image">
      <img
        
        alt=""
        class="screen-image__img"
        id="img01"
      />
      <div class="screen-image__cover" ><button type="submit" onclick="location.href = 'details.php';"class="btn btn--left">Details</button> </div>
    </div>
    <script src="./appp.js"></script> 
    
    
   
</div>

<div id="News" class="tabcontent" style="display: none;">

</div>

<div id="Contact" class="tabcontent" style="display: none;">

</div>

<div id="About" class="tabcontent" style="display: none;">

</div>
<script src="Modal.js"></script>
</body>

</html>