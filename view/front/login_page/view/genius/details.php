<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    /> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    />
    <title>CSS Units</title>
    <link rel="stylesheet" href="resetd.css" />
    <link rel="stylesheet" href="styled.css" />
  </head>
  <body>
    <div class="product">
      <div class="product__left">
        <img src="./logo.png" alt="" class="product__logo" />
        <span class="product__size">1</span>
        <img src="./nike.png" alt="" class="product__image" />
        <ul class="dots">
          <li class="dots__item active"></li>
          <li class="dots__item"></li>
          <li class="dots__item"></li>
        </ul>
      </div>
      <div class="product__right">
        <h2 class="product__name">   Art </h2>
        <p class="product__price">
          $ 200.00 <span class="product__sale"></span>
        </p>
        <p class="product__desc">
          <br>Lens :	33.0mm ƒ/2.8 0.008s ISO 400 </br>
          <br> Size :	8.54 MB</br>
          <br> Resolution 	3594px x 4492px</br>
          <br> Camera 	Canon EOS 80D</br>
          <br> Software 	Adobe Photoshop Lightroom Classic 7.4 (Windows)</br>
          <br> Taken at 	July 29, 2018 1:29 pm</br>
          <br> Aspect Ratio 	1797:2246</br>
        </p>
       
        <button class="btn btn--primary btn--rounded product__buy">
          
         By Now
          
        </button>
    
      </div>
    </div>
  </body>
</html>
