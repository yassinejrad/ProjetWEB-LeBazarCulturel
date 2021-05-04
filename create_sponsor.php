<?php
    include 'connect.php';
    include 'spons.php' ; 

    if( isset($_POST["description"])&& isset($_POST["name"])&& isset($_POST["image"]) )
    {

        $description = $_POST["description"] ; 
        $name = $_POST["name"];   
        $image = $_POST["image"];
        
            
        $sponsor = new spons( $name , $description , $image);

        $sql = "insert into sponsor (name,description,image) values 
        ('$name' , '$description' ,'$image' )";
        $conn->query($sql);
        $conn->close();


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
    <link href="create.css" rel="stylesheet" media="all">
</head>

<body>

    <form class="form-inline m-2" action="" method="POST">  
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Sponsor Registration Form</h2>
                    </div>
                    
                    <div class="card-body">

                            <div class="form-row m-b-55">
                                <div class="name">Name :</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                
                                                <input class="input--style-5" placeholder="Name" type="text" name="name">
                                                
                                            </div>
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

                            
                            <div>
                                <button class="btn btn--radius-2 btn--red" href="test2.php" type="submit">Register</button>
                            </div>
                    

                        
                
                    </div>
                
                
                </div>
            </div>
        </div>

    </form> 

</body>

</html>