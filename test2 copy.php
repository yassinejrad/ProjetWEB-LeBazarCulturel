<?php
include 'connect.php';
//include '../html/hey.php';

$sql = "select * from event2";
$result = $conn->query($sql);






while ($row = $result->fetch_assoc()) 
{
     echo '
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
            <link rel="stylesheet" href="create.css?v=<?php echo time(); ?>">
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
$conn->close();




?>

<!-- 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>

    <div class="blog-post">
        <div class="blog-post-image">
            <img name="image"  src="eventt.jpg" alt="">
        </div>
        <div class="blog-post-info">
            <div class="blog-post-date">
                
                <span name="date" >Los angeles : october 27-29 2021 </span>
            </div>
            <h1 name="name" class="blog-post-title" >testt</h1>
            <p name="description" class="blog-post-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus vitae, 
                earum debitis magnam voluptate voluptatibus fugiat ab vero, iure quisquam culpa similique dolorum eaque,
                 ut rerum libero? Expedita, repudiandae rem.
            </p>
            <h1 name="artists" class="blog-post-artists">artists : pink floyd  led zeppelin  bon jovi</h1>

            <a class="blog-post-cta">read more</a>
        </div>
    </div>


</body>
</html>


-->