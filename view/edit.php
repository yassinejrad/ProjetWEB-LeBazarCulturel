<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>SpeedCode</title>
    <link rel="stylesheet" href="reseteed.css" />
    <link rel="stylesheet" href="styleed.css" />
  </head>
  <body>
    <div class="signup">
      <h2 class="signup__heading">Modify Profile</h2>
    
       <form action="#" class="signup__form" autocomplete="off">
        <div class="form__group">
          <input type="text" class="form__input" placeholder="Name" />
        </div>
        <div class="form__group">
          <input type="text" class="form__input" placeholder="Tel" />
        </div>
        <div class="form__group">
          <input type="email" class="form__input" placeholder="Email" />
        </div>
       
        <div class="form__group">
          <input type="email" class="form__input" placeholder="Adresse" />
        </div>
     
        <div class="form__group">
          <input type="password" class="form__input" placeholder="Passeword" />
        </div>
        <div class="form__group">
          <textarea class="form__input" placeholder="Discription" ></textarea>
         </div>
         <div class="form__group">
         <label for="toggle-input" class="toggle">
          <h2 class="sex__heading"> Male or  Female  </h2>  
          <input type="checkbox" class="toggle__input" id="toggle-input" /> 
          
          <div class="toggle__bar">
            <div class="toggle__spin"></div>
          </div>
        </label>
      </div>
        
      
      <div class="form__group">
          <button type="submit" class="form__submit">
            <span class="form__submit-text">Sign Up </span
            ><i class="fa fa-long-arrow-right form__submit-icon"></i>
          </button>
        </div>
        
      </form>
    </div>
  </body>
</html>
