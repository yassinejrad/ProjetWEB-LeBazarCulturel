<?PHP
	include_once "../../config.php";
	include_once '../../model/attente.php';
	include_once  '../../controller/attenteC.php';
include_once '../../model/categorie.php';
	class attenteC {
		
		function  ajouterattente($attente)
        {
			$sql="INSERT INTO attente (NOM,PRIX,DATE,QTE,IMAGE,DESCP,CATEGORIE,USER,STATUE) 
			VALUES (:NOM,:PRIX,:DATE,:QTE,:IMAGE,:DESC,:CATEGORIE,:USER,:STATUE)" ;
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql) or die( $db->error); 
			    
				$query->execute
                ([
					'NOM' => $attente->getNOM(),
					'PRIX' => $attente->getPRIX(),
					'DATE' => $attente->getDATE(),
                    'QTE' => $attente->getQTE(),
					'IMAGE' => $attente->getIMAGE(),
					'DESC' => $attente->getDESC(),
					'CATEGORIE' => $attente->getCAT(),
					'USER' => $attente->getUSER(),
					'STATUE' => $attente->getSTATUE()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function  afficherattente(){
			
			$sql="SELECT * FROM attente ORDER BY PRIX DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerattente($reference){
			$sql="DELETE FROM attente WHERE REFERENCE= :REFERENCE";
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
		function modifierProduit($attente, $REFERENCE){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE attente SET 
						NOM = :NOM, 
						PRIX = :PRIX,
						DATE = :DATE,
						QTE = :QTE,
						IMAGE = :IMAGE,
						DESCP = :DESC,
						CATEGORIE = :CATEGORIE,
						USER = :USER
						

					WHERE REFERENCE = :REFERENCE'
				);
				$query->execute([
					'NOM' => $attente->getNOM(),
					'PRIX' => $attente->getPRIX(),
					'DATE' => $attente->getDATE(),
                    'QTE' => $attente->getQTE(),
					'IMAGE' => $attente->getIMAGE(),
					'DESC' => $attente->getDESC(),
					'CATEGORIE' => $attente->getCAT(),
					'USER' => $attente->getUSER(),
					'REFERENCE' => $REFERENCE
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		public function chercherid2($CATEGORIE) {
			$sql="SELECT * FROM attente where CATEGORIE=:CATEGORIE";
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
		function recupererattente($reference)
        {
			$sql="SELECT * from attente where REFERENCE=$reference";
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
			$sql="SELECT * FROM attente where NOM ='$str'"  ;
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
			$sql="SELECT * FROM attente where REFERENCE=:REFERENCE";
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
			$sql="SELECT * FROM attente where NOM like '".$str."%' and CATEGORIE=:id " ;
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