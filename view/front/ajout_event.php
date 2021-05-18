<?php
    include '../../controller/eventc.php';



    if(isset($_POST["location"]) && isset($_POST["start_date"])&& 
    isset($_POST["end_date"])&& isset($_POST["sponsor1"])&& isset($_POST["sponsor2"])&&
    isset($_POST["sponsor3"])&& isset($_POST["artist1"])&& 
    isset($_POST["artist2"])&& isset($_POST["artist3"])&&
    isset($_POST["description"])&& isset($_POST["name"])&& isset($_POST["image"]) && isset($_POST["price"]) )
    {
    
    
    $evc = new Eventc ; 
    
    $location = $_POST["location"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];



    $sponsor1 = $_POST["sponsor1"];
    
    $sponsor2 = $_POST["sponsor2"];
    $sponsor3 = $_POST["sponsor3"];


    $artist1 =$_POST["artist1"] ; 
    $artist2 =$_POST["artist2"] ; 
    $artist3 = $_POST["artist3"]; 

    $description = $_POST["description"] ; 

    $price = $_POST["price"] ;
    $name = $_POST["name"];   
    $image = $_POST["image"];
    $sponsor1 = $evc->get_sponsor_id($sponsor1) ; 
    $sponsor2 = $evc->get_sponsor_id($sponsor2) ; 
    $sponsor3 = $evc->get_sponsor_id($sponsor3) ; 

    $artist1 =$evc->get_artist_id($artist1) ; 
    $artist2 =$evc->get_artist_id($artist2)  ; 
    $artist3 = $evc->get_artist_id($artist3) ; 


        echo"$sponsor1 $sponsor2 $sponsor3 $artist1 $artist2 $artist3 " ; 


        
        $rand_id = $evc->rand_id() ; 
        $ev = new Event( $rand_id ,  $name , $location ,
        $start_date , $end_date , $sponsor1 , 
        $sponsor2 , $sponsor3 , $artist1 , $artist2 ,
        $artist3 , $description , $image ,$price );
        
        

        $test= $evc->control_date($start_date , $end_date);
       // $evc->add_link($id_link ,  $sponsor1 , $sponsor2 , $sponsor3 ) ;

       
    
      if($test == False && $ev->sponsor1!=$ev->sponsor2 && $ev->sponsor1!=$ev->sponsor3 && $ev->sponsor2!=$ev->sponsor3
      && $ev->artist1!=$ev->artist2 && $ev->artist1!=$ev->artist3 && $ev->artist3!=$ev->artist2  )
      {
       
        $evc->add_event( $rand_id ,   $name , $location ,
         $start_date , $end_date , $description , $image ,  $price) ;
        $evc->create_link_spons( $rand_id ,  $sponsor1 , $sponsor2, $sponsor3  );
        $evc->create_link_artist($rand_id , $artist1 , $artist2, $artist3  ) ; 
        
      }
      
      else 
      {
        $message = "la date de debut et fin ne sont pas correctes" ; 
        header("location: create.php?error=".$message);
      }

    }
    
?>


<html>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->

    <!-- Main CSS-->
    <link href="css/create.css" rel="stylesheet" media="all">
</head>

<body>

    <form class="form-inline m-2" action="" method="POST">  
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Event Registration Form</h2>
                    </div>
                    
                    <div class="card-body">
                        
                            <div class="form-row m-b-55">
                                <div class="name">Date</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="date" name="start_date">
                                                <label class="label--desc">start date</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="date" name="end_date">
                                                <label class="label--desc">end date</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row m-b-55">
                                <div class="name">Name and Location</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                
                                                <input class="input--style-5" placeholder="Name" type="text" name="name">
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" placeholder="Location" type="text" name="location">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Artist 1 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="artist1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                                
                                                <?php
                                                
                                                $evc = new Eventc ; 
                                                $list=$evc->get_artist() ;  
                                                for ($x = 0; $x <= count($list)-1; $x++) 
                                                {
                                                    echo'<option>'.$list[$x].'</option>' ; 
                                                }
                                                ?>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="name">Artist 2 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="artist2">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                                
                                                <?php
                                                
                                                $evc = new Eventc ; 
                                                $list=$evc->get_artist() ;  
                                                for ($x = 0; $x <= count($list)-1; $x++) 
                                                {
                                                    echo'<option>'.$list[$x].'</option>' ; 
                                                }
                                                ?>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="name">Artist 3 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="artist3">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                                
                                                <?php
                                                
                                                $evc = new Eventc ; 
                                                $list=$evc->get_artist() ;  
                                                for ($x = 0; $x <= count($list)-1; $x++) 
                                                {
                                                    echo'<option>'.$list[$x].'</option>' ; 
                                                }
                                                ?>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="name">Description</div>
                                <div class="value">
                                    <div class="input-group">
                                        <textarea  name="description" class="input--style-5"  cols="40" rows="2"></textarea>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Sponsor 1 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sponsor1">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                
                                                <?php
                                                
                                                $evc = new Eventc ; 
                                                $list=$evc->get_sponsor() ;  
                                                for ($x = 0; $x <= count($list)-1; $x++) 
                                                {
                                                    echo'<option>'.$list[$x].'</option> ' ; 
                                                }
                                                ?>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="name">Sponsor 2 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            
                                        <select name="sponsor2">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                
                                                <?php
                                                
                                                $evc = new Eventc ; 
                                                $list=$evc->get_sponsor() ;  
                                                for ($x = 0; $x <= count($list)-1; $x++) 
                                                {
                                                    echo'<option>'.$list[$x].'</option> ' ; 
                                                }
                                                ?>
                                            </select>  
                                            
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="name">Sponsor 3 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            
                                        <select name="sponsor3">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                
                                                <?php
                                                
                                                $evc = new Eventc ; 
                                                $list=$evc->get_sponsor() ;  
                                                for ($x = 0; $x <= count($list)-1; $x++) 
                                                {
                                                    echo'<option>'.$list[$x].'</option> ' ; 
                                                }
                                                ?>
                                            </select>
                                            
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row m-b-55">
                                <div class="name">Image</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                
                                                <input class="input--style-5"  type="text" name="image">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="form-row m-b-55">
                                <div class="name">Price</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                
                                            <input class="input--style-5"  type="number" name="price">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            
                            <div>
                                <button class="btn btn--radius-2 btn--red" href="test2.php" type="submit">Register</button>
                            </div>
                    

                        
                
                    </div>
                
                
                </div>
            </div>
        </div>

    </form> 
    <script src="black.js"></script>
</body>
</html>

