<?PHP
	include_once "../../config.php";
	include_once '../../model/categorie.php';
	

	class categorieC {
		
		function  ajouterCategories($categorie)
        {
			$sql="INSERT INTO categories (NOM) 
			VALUES (:NOM)" ;
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql) or die( $db->error); 
			    
				$query->execute
                ([
					'NOM' => $categorie->getNOM(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function  afficherCategories(){
			
			$sql="SELECT * FROM categories ORDER BY NOM";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerCategories($code){
			$sql="DELETE FROM categories WHERE CODE= :CODE";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':CODE',$code);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierCategories($categories, $CODE){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categories SET 
						NOM = :NOM
						
						

					WHERE CODE = :CODE'
				);
				$query->execute([
					'NOM' => $categories->getNOM(),
					
					'CODE' => $CODE
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		public function chercherid($code) {
			$sql="SELECT * FROM categories where CODE=:CODE";
			$db=Config::getConnexion();
			try{
				$query=$db->prepare($sql);
			$query->execute(['CODE' =>$code]);
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
		}*/

		
	
		/*public function chercher($nom) {
			$sql="SELECT * FROM produits where NOM='$nom'";
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