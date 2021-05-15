<?php
class config {
private static $pdo = NULL;
public static function getConnexion() {
if (!isset(self::$pdo)) {
try{
<<<<<<< HEAD
self::$pdo =new PDO('mysql:host=localhost;dbname=bazarculturelle', 'root', ''
=======
self::$pdo =new PDO('mysql:host=localhost;dbname=bazarculturelle', 'dhia72', '191JMT1252',
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

]);

}catch(Exception $e){
die('Erreur: '.$e->getMessage());
print($e->getMessage) ; 
}
}
return self::$pdo;
}
}
?>