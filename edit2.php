<?php

include 'connect.php';
include 'event.php' ; 
$id = $_POST['id'];

echo "$id" ; 

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

$ev = new Event( $name , $location ,
     $start_date , $end_date , $sponsor1 
    , $sponsor2 , $sponsor3 , $artist1 , $artist2 ,
     $artist3 , $description , $image);



echo"$name";

$sql = "update event2 set name='$name',location='$location',
artist1='$artist1',artist2='$artist2',artist3='$artist3',start_date='$start_date',end_date='$end_date',
sponsor1='$sponsor1',sponsor2='$sponsor2',sponsor3='$sponsor3',
description='$description',image='$image' where id=$id" ;

  $conn->query($sql);
  $conn->close();
 // header("location: test2.php");

?>