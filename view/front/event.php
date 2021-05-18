<?php
include '../../controller/eventc.php';

//$usr = 52 ; 
//$sql = "select * from event2 e, user u  where e.user = u.id and u.id = $user" ; 

//$sql = "select * from event2 where user=$user ";
$conn = new mysqli("localhost", "root", "", "bazarculturelle"); 

$sql = "select * from event2  ";
$result = $conn->query($sql);

if (isset($_POST["hello"]))
   {
        $sql = "select * from event2 ORDER BY name ";
        $result = $conn->query($sql);
   }

else if (isset($_POST["search_sub"]))
   {
        $name = $_POST["search_name"] ; 
        $sql = "select * from event2 where name ='$name' ";
        $result = $conn->query($sql);
   }

else if (isset($_POST["normal_view"])  )
{
    $sql = "select * from event2  ";
    $result = $conn->query($sql);

}

//echo '</form>' ; 
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="dark.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="css/eventcss.css" rel="stylesheet">
      
</head>

<body>

    <!-- Navigation -->
    <?php include_once 'header.php'; ?>
    <!-- -->
    <!-- Page Content -->
    <div class="container">

    <h1 class="mt-4 mb-3">
            <br>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="acceuil.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Evenements</li>
            
        </ol>

            
        
        <form action="" class="event-form" method="POST">
            <button class="btn btn-secondary" name="hello" type="submit">sort</button>
            <button class="btn btn-secondary" name="normal_view" type="submit">normal view</button>
            <button class="btn btn-secondary" name="search_sub" type="submit">search</button>
            <input type="text" class="btn btn-secondary" name="search_name" >

            <?php
                while ($row = $result->fetch_assoc()) 
                {
                    $evc = new Eventc ; 
                    //echo " ". $row['id'] . "";
                    $list=$evc->get_artists_names($row['id']) ; 
                    echo '
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="stylesheet" href="css/eventcss2.css?v=<?php echo time(); ?>">
                            <title>Document</title>
                        </head>
                        <body>

                            <div class="blog-post">
                                <div class="blog-post-image">
                                    <img name="image"  src="' . $row['image'] . '" alt="">
                                </div>
                                <div class="blog-post-info">
                                    <div class="blog-post-date">
                                        
                                        <span name="date" >' . $row['location'] . ': ' . $row['start_date'] . ' - ' . $row['end_date'] . ' </span>
                                    </div>
                                    <h1 name="name" class="blog-post-title" >' . $row['name'] . '</h1>
                                    <p name="description" class="blog-post-text">
                                    ' . $row['description'] . '
                                    </p>
                                    <h1 name="artists" class="blog-post-artists">Artists : ' . $list[0] . '  ' . $list[1] . ' ' . $list[2] . ' </h1>
                                    <h1 name="artists" class="blog-post-artists">Prix :  ' . $row['price'] . 'DT</h1>
                                   
                                    <br>
                                    <a class="event-blog-post-cta" type="submit" href="contact/index.php" >Inscription</a>
                                    
                                    
                                </div>
                            </div>
                        
                        </body>
                    
                    ';
                    
                }

                ?>


        </form>




    </div>

    
    <script src="black.js"></script>
    <?php include_once 'footer.php'; ?>


</body>

</html>








