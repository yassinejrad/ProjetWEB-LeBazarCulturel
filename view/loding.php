
<?php 


?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="7 'profil.php'" > 
    <title>Pace JS | Preloader</title>
    <link rel="stylesheet" href="stylel.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="pace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
 
  </head>
<body>
</div>
        <div id="preloader">
            <div class="p">LOADING</div>
        </div>
    
      
    
        <h1 class="title"># Welcome Rostom </h1>
         
   
     
       
 
       <script>
 
        paceOptions = {
        ajax: true,
        document: true,
        eventLag: false
        };

        Pace.on('done', function() {
        $('.p').delay(500).animate({top: '-100%%', opacity: '0'}, 73000, $.bez([0.39,1,0.32,3]));


        $('#preloader').delay(1500).animate({top:'-100%'}, 2000, $.bez([0.39,1,0.32,3]));
        TweenMax.from(".title", 2, {
             delay:2,
                    y: 10,
                  opacity: 0,
                  ease: Expo.easeInOut
                  
            })
       
       
       });
    

       </script> 



</body>

</html>
