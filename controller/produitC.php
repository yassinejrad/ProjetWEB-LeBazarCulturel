<?PHP
	include_once "../../config.php";
	include_once '../../model/produit.php';
<<<<<<< Updated upstream
	

=======
	include_once  '../../controller/categorieC.php';
include_once '../../model/categorie.php';
>>>>>>> Stashed changes
	class produitC {
		
		function  ajouterProduits($produits)
        {
<<<<<<< Updated upstream
			$sql="INSERT INTO produits (NOM,PRIX,DATE,QTE,IMAGE,DESCP) 
			VALUES (:NOM,:PRIX,:DATE,:QTE,:IMAGE,:DESC)" ;
=======
			$sql="INSERT INTO produits (NOM,PRIX,DATE,QTE,IMAGE,DESCP,CATEGORIE) 
			VALUES (:NOM,:PRIX,:DATE,:QTE,:IMAGE,:DESC,:CATEGORIE)" ;
>>>>>>> Stashed changes
			
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
<<<<<<< Updated upstream
=======
					'CATEGORIE' => $produits->getCAT()
>>>>>>> Stashed changes
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function  afficherProduits(){
			
<<<<<<< Updated upstream
			$sql="SELECT * FROM produits";
=======
			$sql="SELECT * FROM produits ORDER BY PRIX DESC";
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
						DESCP = :DESC
=======
						DESCP = :DESC,
						CATEGORIE = :CATEGORIE
>>>>>>> Stashed changes
						

					WHERE REFERENCE = :REFERENCE'
				);
				$query->execute([
					'NOM' => $produits->getNOM(),
					'PRIX' => $produits->getPRIX(),
					'DATE' => $produits->getDATE(),
                    'QTE' => $produits->getQTE(),
					'IMAGE' => $produits->getIMAGE(),
					'DESC' => $produits->getDESC(),
<<<<<<< Updated upstream
=======
					'CATEGORIE' => $produits->getCAT(),
>>>>>>> Stashed changes
					'REFERENCE' => $REFERENCE
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
<<<<<<< Updated upstream
		public function chercherid($reference) {
			$sql="SELECT * FROM produits where REFERENCE=:REFERENCE";
			$db=Config::getConnexion();
			try{
				$query=$db->prepare($sql);
			$query->execute(['REFERENCE' =>$reference]);
=======
		
		public function chercherid2($CATEGORIE) {
			$sql="SELECT * FROM produits where CATEGORIE=:CATEGORIE";
			$db=Config::getConnexion();
			try{
				$query=$db->prepare($sql);
			$query->execute(['CATEGORIE' =>$CATEGORIE]);
>>>>>>> Stashed changes
			$liste=$query->fetch();
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}
<<<<<<< Updated upstream
		/*function recupererAlbum($idAlbum)
        {
			$sql="SELECT * from album where idAlbum=$idAlbum";
=======
		function recupererproduits($reference)
        {
			$sql="SELECT * from produits where REFERENCE=$reference";
>>>>>>> Stashed changes
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

		
	
<<<<<<< Updated upstream
		public function chercher($titre) {
			$sql="SELECT * FROM album where titre='$titre'";
=======
		public function chercher($str) {
			$sql="SELECT * FROM produits where NOM ='$str'" ;
>>>>>>> Stashed changes
			$db=Config::getConnexion();
			try{
			$liste = $db->query($sql);
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
<<<<<<< Updated upstream
		}*/

=======
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
>>>>>>> Stashed changes

		
	}

?>