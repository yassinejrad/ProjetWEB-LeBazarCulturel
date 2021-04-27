<?php

$mysqli = mysqli_connect("localhost", "root", "", "atelier_php");
$name = $_GET['name'];


//$sql = "SELECT *  from event2 where name='$name'";

//$result = $conn->query($sql);

//echo"$result" ; 

$query = "SELECT *  from event2 where name='$name'";

$result = mysqli_query($mysqli, $query);

/* fetch associative array */
$row = mysqli_fetch_row($result); 

echo "$row[0]" ; 
echo "$row[1]" ; 

echo "$row[2]" ; 
echo "$row[3]" ; 
echo "$row[4]" ; 
echo "$row[5]" ; 
echo "$row[6]" ; 
echo "$row[7]" ; 
echo "$row[8]" ; 
echo "$row[9]" ; 
echo "$row[10]" ; 
echo "$row[11]" ; 
echo "$row[12]" ; 



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
    <link href="create.css" rel="stylesheet" media="all">
</head>

<body>
    <form class="form-inline m-2" action="edit2.php" href="edit2.php?id='<?php echo"$row[0]" ?>'" method="POST">  
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
                                                <input class="input--style-5" type="date" name="start_date" value="<?php echo"$row[6]" ?>" >
                                                <label class="label--desc">start date</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="date" name="end_date" value="<?php echo"$row[7]" ?>" >
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
                                <div class="name">Artist 1 </div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="artist1">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>pink floyd</option>
                                                <option>eric clapton</option>
                                                <option>bb king</option>
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
                                                <option>pink floyd</option>
                                                <option>eric clapton</option>
                                                <option>bb king</option>
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
                                                <option>pink floyd</option>
                                                <option>eric clapton</option>
                                                <option>bb king</option>
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
                                        <textarea  name="description" class="input--style-5"  cols="40" rows="2"> <?php echo"$row[11]" ?></textarea>
                                        
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
                                                <option>coca cola </option>
                                                <option>mercedes benz</option>
                                                <option>bmw </option>
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
                                                <option>coca cola </option>
                                                <option>mercedes benz</option>
                                                <option>bmw </option>
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
                                                <option>coca cola </option>
                                                <option>mercedes benz</option>
                                                <option>bmw </option>
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
                                                
                                                <input class="input--style-5" value=" <?php echo"$row[12]" ?> "  type="text" name="image">
                                                
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

