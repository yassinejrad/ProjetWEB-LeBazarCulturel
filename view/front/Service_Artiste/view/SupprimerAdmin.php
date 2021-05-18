<?php 
  require_once '../config.php';
  require_once '../../../../controller/artisteC.php';

if (isset($_GET['id'])) 
        {
        	$artisteC = new artisteC();
        	$artisteC->deleteArtiste($_GET['id']);
        	header('Location:ConnexionArtiste.php');
        }
?>