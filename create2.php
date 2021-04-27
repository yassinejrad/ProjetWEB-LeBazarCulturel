<?php
    include 'connect.php';
    include 'event.php';


      
    $location = $_POST["location"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    $sponsor1 = $_POST["sponsor1"];
    $sponsor2 = $_POST["sponsor2"];
    $sponsor3 = $_POST["sponsor3"];

    $artist1 = $_POST["artist1"] ; 
    $artist2 = $_POST["artist2"] ; 
    $artist3 = $_POST["artist3"] ; 

    $description = $_POST["description"] ; 

    $name = $_POST["name"];   
    $image = $_POST["image"];
    /*
      echo "$location" ; 
      echo "$start_date" ; 
      echo "$end_date" ; 
      echo "$sponsor1" ; 
      echo "$sponsor2" ; 
      echo "$sponsor3" ; 
      echo "$description" ; 
    */
      $ev = new Event( $name , $location ,
        $start_date , $end_date , $sponsor1 
      , $sponsor2 , $sponsor3 , $artist1 , $artist2 ,
        $artist3 , $description , $image);

        $test= $ev->control_date($start_date , $end_date);
      echo"$test" ; 
      

      if($test == False && $ev->sponsor1!=$ev->sponsor2 && $ev->sponsor1!=$ev->sponsor3 && $ev->sponsor2!=$ev->sponsor3
      && $ev->artist1!=$ev->artist2 && $ev->artist1!=$ev->artist3 && $ev->artist3!=$ev->artist2  )
      {
        $sql = "insert into event2 (name,location,artist1,artist2,artist3,start_date,end_date,sponsor1,sponsor2,sponsor3,description,image) values 
        ('$name' ,'$location','$artist1','$artist2','$artist3','$start_date' , '$end_date' , '$sponsor1', '$sponsor2', '$sponsor3', '$description' ,'$image' )";
        $conn->query($sql);
        $conn->close();
        header("location: test2.php");

      }
      
      else 
      {
        $message = "la date de debut et fin ne sont pas correctes" ; 
        echo "<script>alert('$message');</script>";
        header("location: test2.php");
      }




      /*
    $sql = "insert into event2 (name,location,artist1,artist2,artist3,start_date,end_date,sponsor1,sponsor2,sponsor3,description,image) values 
    ('$name' ,'$location','$artist1','$artist2','$artist3','$x->start_date' , '$end_date' , '$sponsor1', '$sponsor2', '$sponsor3', '$description' ,'$image' )";
    $conn->query($sql);
    $conn->close();
    // header("location: test2.php");
    */
?>