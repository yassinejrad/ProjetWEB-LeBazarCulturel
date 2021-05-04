<?php
include 'connect.php';
//include '../html/hey.php';
include 'event.php' ; 

$sql = "select * from event2  ";
$result = $conn->query($sql);


if (isset($_POST["search_sub"]))
   {
        $name = $_POST["search_name"] ; 
        $sql = "select * from event2 where name ='$name' ";
        $result = $conn->query($sql);
   }

/*
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["location"]. "<br>";
  }
*/


//echo '</form>' ; 


$conn->close();

?>


<html>
    
    <form  action="" method="POST"> 
    <!--    <a class="btn btn--radius-2 btn--red btn-align-sort" name="hello" type="submit"  role="button">sort</a> -->
        <div class="form-row m-b-55">                   
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">                    
                            <input class="input--style-5 btn-align-sort" placeholder="Name" type="text" name="search_name">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn--radius-2 btn--red btn-align-sort" name="search_sub" type="submit">search</button>
        </div>

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
                            <h1 name="artists" class="blog-post-artists">artists : ' . $row['artist1'] . '  ' . $row['artist2'] . ' ' . $row['artist3'] . ' </h1>
                            <br>
                            <button class="btn btn--radius-2 btn--red" type="submit">Read more</button>
                            <a class="btn btn--radius-2 btn--red" href="Edit.php?name=' . $row['name'] . '" role="button">Edit</a>
                            <a class="btn btn--radius-2 btn--red" href="delete.php?name=' . $row['name'] . '" role="button">Delete</a>
                            
                        </div>
                    </div>
                
                </body>
            
            ';
            
        }

        ?>
    </form>
</html>