<?PHP
	require_once "../../config.php";
	include_once '../../Model/attentea.php';
	
	class attenteaC {
		
		function  ajouterattentea($attentea)
        {
			$sql="INSERT INTO attentea (titre, nomAuteur, description, dateA, image) 
			VALUES (:titre,:nomAuteur,:description,:dateA,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql) or die( $db->error);
			
				$query->execute
                ([
					'titre' => $attentea->gettitre(),
					'nomAuteur' => $attentea->getnomAuteur(),
					'description' => $attentea->getdescription(),
					'dateA' => $attentea->getdateA(),
					'image' => $attentea->getimage()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		

		function  afficherattentea()
		{
			
			$sql="SELECT * FROM attentea";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerattentea($id)
		{
			$sql="DELETE FROM attentea WHERE idA= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierattentea($attentea, $id)
		{
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE attentea SET 
					titre = :titre, 
					nomAuteur = :nomAuteur,
					description = :description,
					dateA = :dateA, 
					image = :image 
					WHERE idA=:id'
                );
                $query->execute([
                    'titre' => $attentea->gettitre(),
					'nomAuteur' => $attentea->getnomAuteur(),
					'description' => $attentea->getdescription(),
					'dateA' => $attentea->getdateA(),
					'image' => $attentea->getimage(),
					'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATE successfully";
            } catch (PDOException $e){
				$e->getMessage();
            }
		}
		Public function recupererattentea($id)
        {
			$sql="SELECT * from attentea where idA=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}

		}

		function chercher($titre) {
			$sql="SELECT * FROM attentea where titre='$titre' ";
			$db=Config::getConnexion();
			try{
			$listeattentea = $db->query($sql);
			return $listeattentea;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}


		function triattentea()
		{
			$sql="SELECT * from attentea ORDER by idA ASC";
			$db = config::getConnexion();
			try{
			$listeattentea=$db->query($sql);
			return $listeattentea;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function triattenteaD()
		{
			$sql="SELECT * from attentea ORDER by dateA DESC";
			$db = config::getConnexion();
			try{
			$listeattentea=$db->query($sql);
			return $listeattentea;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		public function chercher2($str) {
			$sql="SELECT * FROM attentea where idA ='$str' OR  titre='$str' "  ;
			$db=Config::getConnexion();
			try{
			$liste = $db->query($sql);
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}


		
	}

?>