<?PHP
	include_once "../../config.php";
	include_once '../../model/produit.php';
	include_once  '../../controller/categorieC.php';
include_once '../../model/categorie.php';
	class produitC {
		
		function  ajouterProduits($produits)
        {
			$sql="INSERT INTO produits (NOM,PRIX,DATE,QTE,IMAGE,DESCP,CATEGORIE,USER,STATUE) 
			VALUES (:NOM,:PRIX,:DATE,:QTE,:IMAGE,:DESC,:CATEGORIE,:USER,:STATUE)" ;
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql) or die( $db->error); 
			    
				$query->execute
                ([
					'NOM' => $produits->getNOM(),
					'PRIX' => $produits->getPRIX(),
					'DATE' => $produits->getDATE(),
                    'QTE' => $produits->getQTE(),
					'IMAGE' => $produits->getIMAGE(),
					'DESC' => $produits->getDESC(),
					'CATEGORIE' => $produits->getCAT(),
					'USER' => $produits->getUSER(),
					'STATUE' => $produits->getSTATUE()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function  afficherProduits(){
			
			$sql="SELECT * FROM produits ORDER BY PRIX DESC ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerProduits($reference){
			$sql="DELETE FROM produits WHERE REFERENCE= :REFERENCE";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':REFERENCE',$reference);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierProduit($produits, $REFERENCE){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produits SET 
						NOM = :NOM, 
						PRIX = :PRIX,
						DATE = :DATE,
						QTE = :QTE,
						IMAGE = :IMAGE,
						DESCP = :DESC,
						CATEGORIE = :CATEGORIE,
						USER = :USER,
						STATUE=:STATUE
						

					WHERE REFERENCE = :REFERENCE'
				);
				$query->execute([
					'NOM' => $produits->getNOM(),
					'PRIX' => $produits->getPRIX(),
					'DATE' => $produits->getDATE(),
                    'QTE' => $produits->getQTE(),
					'IMAGE' => $produits->getIMAGE(),
					'DESC' => $produits->getDESC(),
					'CATEGORIE' => $produits->getCAT(),
					'USER' => $produits->getUSER(),
					'STATUE' => $produits->getSTATUE(),
					'REFERENCE' => $REFERENCE
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		public function chercherid2($CATEGORIE) {
			$sql="SELECT * FROM produits where CATEGORIE=:CATEGORIE";
			$db=Config::getConnexion();
			try{
				$query=$db->prepare($sql);
			$query->execute(['CATEGORIE' =>$CATEGORIE]);
			$liste=$query->fetch();
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererproduits($reference)
        {
			$sql="SELECT * from produits where REFERENCE=$reference";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$album=$query->fetch();
				return $album;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
	
		public function chercher($str) {
			$sql="SELECT * FROM produits where NOM ='$str' OR  REFERENCE='$str' "  ;
			$db=Config::getConnexion();
			try{
			$liste = $db->query($sql);
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function chercherid($reference) {
			$sql="SELECT * FROM produits where REFERENCE=:REFERENCE";
			$db=Config::getConnexion();
			try{
				$query=$db->prepare($sql);
			$query->execute(['REFERENCE' =>$reference]);
			$liste=$query->fetch();
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}
		public function chercher2($str,$id) {
			$sql="SELECT * FROM produits where NOM like '".$str."%' and CATEGORIE=:id " ;
			$db=Config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				
				$req->execute();
			$liste = $db->query($sql);
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}

		
	}

?>