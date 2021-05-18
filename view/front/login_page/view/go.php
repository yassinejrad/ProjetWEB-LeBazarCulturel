<?php 
session_start();
$id=$_SESSION['help'] ;
 if (isset($_GET['001']))
    header('location:profil_v.php?ID='.$id.'& 001='.$_GET['001'].'') ;
    
    if (isset($_GET['002']))
    header('location:profil_v.php?ID='.$id.'& 002='.$_GET['002'].'') ;
    if (isset($_GET['003']))
    header('location:profil_v.php?ID='.$id.'& 003='.$_GET['003'].'') ;
    if (isset($_GET['004']))
    header('location:profil_v.php?ID='.$id.'& 004='.$_GET['004'].'') ;
    if (isset($_GET['005']))
    header('location:profil_v.php?ID='.$id.'& 005='.$_GET['005'].'') ;
  
  
?>
