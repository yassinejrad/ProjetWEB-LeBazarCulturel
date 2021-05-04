<?php
include 'connect.php';
//include '../html/hey.php';
include 'event.php' ; 

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


/*
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["location"]. "<br>";
  }
*/


//echo '<form  action="" method="POST">' ; 

//echo' <a class="btn btn--radius-2 btn--red btn-align-sort" name="hello" href="sortview.php"  role="button">sort</a>' ; 
/*
while ($row = $result->fetch_assoc()) 
{
    $name = $row['end_date'] ; 
    echo"$name" ;  
    $ev =  new Event($row['name'] , $row['location'] ,
    $row['start_date'] , $row['end_date'] , $row['sponsor1'] 
  , $row['sponsor2'] , $row['sponsor3'] , $row['artist1'] , $row['artist2'] ,
    $row['artist3'] , $row['description'] , $row['image']) ; 
    
    $ev->aff() ; 


}
*/



/*
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
*/

//echo '</form>' ; 


$conn->close();

?>



<html>
    
    <form  action="" method="POST"> 

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
            <button class="btn btn--radius-2 btn--red btn-align-sort" name="hello" type="submit">sort</button>
            <button class="btn btn--radius-2 btn--red btn-align-sort" name="normal_view" type="submit">normal view</button>
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



















