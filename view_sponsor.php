<?php
include 'connect.php';
//include '../html/hey.php';
include 'event.php' ; 

$sql = "select * from sponsor  ";
$result = $conn->query($sql);





//echo '</form>' ; 


$conn->close();

?>



<html>
    
  
        <?php
        while ($row = $result->fetch_assoc()) 
        {
            echo '
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
                    <link rel="stylesheet" href="create.css">
                    <title>Document</title>
                </head>
                <body>

                <form  action="" method="POST"> 
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <img name="image"  src="' . $row['image'] . '" alt="">
                        </div>
                        <div class="blog-post-info">
                            <h1 name="name" class="blog-post-title" >' . $row['name'] . '</h1>
                            <p name="description" class="blog-post-text">
                            ' . $row['description'] . '
                            </p>
                            <a class="btn btn--radius-2 btn--red" href="edit_spons.php?name=' . $row['name'] . '" role="button">Edit</a>
                            <a class="btn btn--radius-2 btn--red" href="delete_spon.php?name=' . $row['name'] . '" role="button">Delete</a>
                            </div>
                    </div>
                </form>
                
                </body>
            
            ';
            
        }

        ?>

</html>