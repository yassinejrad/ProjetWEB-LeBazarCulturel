<?php

$name = $_GET['name'];

echo "$name" ; 
$conn = new mysqli("localhost", "root", "", "bazarculturelle"); 

$sql = "delete from event2 where name='$name'";
$result = $conn->query($sql);
$conn->close();
header("location: event.php");


?>