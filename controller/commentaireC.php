<?PHP
	require_once "../../config.php";
	include_once '../../Model/commentaire.php';

	class commentaireC {
		
		function  ajoutercommentaire($commentaire)
        {
			$sql="INSERT INTO commentaire ( message,idA,ID) 
			VALUES (:message,:idA,:ID)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute
                ([
					'message' => $commentaire->getmessage(),
					'idA' => $commentaire->getidA(),
					'ID' => $commentaire->getID(),
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

					message = :message
					
					WHERE idCom=:id'
                );
                $query->execute([

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

		function tricommentaire()
		{
			$sql="SELECT * from commentaire ORDER by idCom ASC";
			$db = config::getConnexion();
			try{
			$listecommentaire=$db->query($sql);
			return $listecommentaire;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		public function chercher($str) {
			$sql="SELECT * FROM commentaire where idCom ='$str' OR  idA='$str' "  ;
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