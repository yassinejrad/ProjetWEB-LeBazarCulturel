<?php 
session_start();
  require_once '../config.php';
  require_once '../../../../controller/artisteC.php';

if (isset($_SESSION['id'])) 
        {
        	$artisteC = new artisteC();
        	$artisteC->deleteArtiste($_SESSION['id']);
        	header('Location:ConnexionArtiste.php');
        }
?>