<?php

$mysqli = mysqli_connect("localhost", "root", "", "bazarculturelle");
$name = $_GET['name'];
include '../../controller/eventc.php';
//$sql = "SELECT *  from event2 where name='$name'";
//$result = $conn->query($sql);
//echo"$result" ; 
$query = "SELECT *  from event2 where name='$name'";
$result = mysqli_query($mysqli, $query);
/* fetch associative array */
$row = mysqli_fetch_row($result); 
if(isset($_POST["location"]) && isset($_POST["start_date"])&& 
    isset($_POST["end_date"])&& 
    isset($_POST["description"])&& isset($_POST["name"])&& 
    isset($_POST["image"]) && isset($_POST["price"]) )
    { 
    $evc = new Eventc ; 
    $location = $_POST["location"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    $description = $_POST["description"] ; 
    $id = $_POST["id"] ;
    $price = $_POST["price"] ;
    $name = $_POST["name"];   
    $image = $_POST["image"];
    

        $test= $evc->control_date($start_date , $end_date);
       // $evc->add_link($id_link ,  $sponsor1 , $sponsor2 , $sponsor3 ) ;
      if($test == False)
      {
       
        $evc->edit_event( $id ,   $name , $location ,
         $start_date , $end_date , $description , $image ,  $price);
         header("location: event.php");
        
      }
      
      else 
      {
        $message = "la date de debut et fin ne sont pas correctes" ; 
        header("location: create.php?error=".$message);
      }

    }


$mysqli->close() ; 


//$conn->close();

//header("location: test2.php");

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
    <title>Au Register Forms by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->

    <!-- Main CSS-->
    <link href="css/create.css" rel="stylesheet" media="all">
</head>

<body>
    <form class="form-inline m-2" action=""  method="POST">  
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Event Update Registration Form</h2>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST">
                            
                            <div class="form-row m-b-55">
                                <div class="name">ID</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                
                                                <input class="input--style-5" value=" <?php echo"$row[0]" ?> " type="text"  name="id" readonly>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row m-b-55">
                                <div class="name">Date</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="date" name="start_date" value="<?php echo"$row[3]" ?>" >
                                                <label class="label--desc">start date</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="date" name="end_date" value="<?php echo"$row[4]" ?>" >
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
                                                
                                                <input class="input--style-5" value=" <?php echo"$row[1]" ?> " type="text" name="name">
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" value="<?php echo"$row[2]" ?>" type="text" name="location">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Description</div>
                                <div class="value">
                                    <div class="input-group">
                                        <textarea  name="description" class="input--style-5"  cols="40" rows="2"> <?php echo"$row[5]" ?></textarea>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-row m-b-55">
                                <div class="name">Image</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                
                                                <input class="input--style-5" value=" <?php echo"$row[6]" ?> "  type="text" name="image">
                                                
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
                                                
                                            <input class="input--style-5" value=" <?php echo"$row[8]" ?> "  type="number" name="price">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            
                            <div>
                            <!--    <button class="btn btn--radius-2 btn--red" type="submit">Register</button> -->
                            
                            <button class="btn btn--radius-2 btn--red" type="submit">Update</button>
                        
                        </div>
                    
                    
                        </form>
                
                    </div>
                
                
                </div>
            </div>
        </div>

    </form> 

</body>











</html>

