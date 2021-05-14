<?php
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/favoris.php';
include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/controller/favorisC.php';
session_start();
$favorisC= new favorisC();
$favoris=new favoris($_GET["REFERENCE"],$_SESSION['auth'],date("Y-m-d"));
$favorisC->ajouterfavoris($favoris);
header('location:http://localhost/2A4/blog6/view/front/login_page/view/favoris.php') ;
?>