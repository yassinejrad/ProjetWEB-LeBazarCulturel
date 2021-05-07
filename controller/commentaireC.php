<?PHP
	require_once "../../config.php";
	include_once '../../Model/commentaire.php';

	class commentaireC {
		
		function  ajoutercommentaire($commentaire)
        {
			$sql="INSERT INTO commentaire (nom, prenom, message) 
			VALUES (:nom,:prenom,:message)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute
                ([
					'nom' => $commentaire->getnom(),
					'prenom' => $commentaire->getprenom(),
					'message' => $commentaire->getmessage(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function  affichercommentaires()
		{
			
			$sql="SELECT * FROM commentaire";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercommentaire($id)
		{
			$sql="DELETE FROM commentaire WHERE idCom= :id";
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
		function modifiercommentaire($commentaire, $id)
		{
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE commentaire SET 
					nom = :nom, 
					prenom = :prenom,
					message = :message,
					
					WHERE idCom=:id'
                );
                $query->execute([
                    'nom' => $commentaire->getnom(),
					'prenom' => $commentaire->getprenom(),
					'message' => $commentaire->getmessage(),
				
					'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATE successfully";
            } catch (PDOException $e){
				$e->getMessage();
            }
		}
		Public function recuperercommentaire($id)
        {
			$sql="SELECT * from commentaire where idCom=$id";
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

		/*function chercher($nom) {
			$sql="SELECT * FROM commentaire where nom='$nom' ";
			$db=Config::getConnexion();
			try{
			$listecommentaire = $db->query($sql);
			return $listecommentaire;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}*/




		
	}

?>