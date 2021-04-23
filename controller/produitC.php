<?PHP
	include_once "../../config.php";
	include_once '../../model/produit.php';
	

	class produitC {
		
		function  ajouterProduits($produits)
        {
			$sql="INSERT INTO produits (NOM,PRIX,DATE,QTE,IMAGE,DESCP) 
			VALUES (:NOM,:PRIX,:DATE,:QTE,:IMAGE,:DESC)" ;
			
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
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function  afficherProduits(){
			
			$sql="SELECT * FROM produits";
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
						DESCP = :DESC
						

					WHERE REFERENCE = :REFERENCE'
				);
				$query->execute([
					'NOM' => $produits->getNOM(),
					'PRIX' => $produits->getPRIX(),
					'DATE' => $produits->getDATE(),
                    'QTE' => $produits->getQTE(),
					'IMAGE' => $produits->getIMAGE(),
					'DESC' => $produits->getDESC(),
					'REFERENCE' => $REFERENCE
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
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
		/*function recupererAlbum($idAlbum)
        {
			$sql="SELECT * from album where idAlbum=$idAlbum";
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

		
	
		public function chercher($titre) {
			$sql="SELECT * FROM album where titre='$titre'";
			$db=Config::getConnexion();
			try{
			$liste = $db->query($sql);
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}*/


		
	}

?>