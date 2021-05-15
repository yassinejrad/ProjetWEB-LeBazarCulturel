<?PHP
<<<<<<< HEAD
	require_once "../../config.php";
	include_once '../../Model/article.php';
	
=======
	include "../../config.php";
	include_once '../../Model/article.php';

>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
	class articleC {
		
		function  ajouterarticle($article)
        {
			$sql="INSERT INTO article (titre, nomAuteur, description, dateA, image) 
			VALUES (:titre,:nomAuteur,:description,:dateA,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute
                ([
					'titre' => $article->gettitre(),
					'nomAuteur' => $article->getnomAuteur(),
					'description' => $article->getdescription(),
					'dateA' => $article->getdateA(),
					'image' => $article->getimage(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
<<<<<<< HEAD

=======
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
		function  afficherarticles()
		{
			
			$sql="SELECT * FROM article";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerarticle($id)
		{
			$sql="DELETE FROM article WHERE idA= :id";
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
		function modifierarticle($article, $id)
		{
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE article SET 
					titre = :titre, 
					nomAuteur = :nomAuteur,
					description = :description,
					dateA = :dateA, 
					image = :image 
					WHERE idA=:id'
                );
                $query->execute([
                    'titre' => $article->gettitre(),
					'nomAuteur' => $article->getnomAuteur(),
					'description' => $article->getdescription(),
					'dateA' => $article->getdateA(),
					'image' => $article->getimage(),
					'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATE successfully";
            } catch (PDOException $e){
				$e->getMessage();
            }
		}
		Public function recupererarticle($id)
        {
			$sql="SELECT * from article where idA=$id";
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
<<<<<<< HEAD
	/*	function chercher($titre,$nomAuteur) {
			$sql="select * from article where nom like '%:search%' or auteur like '%:search%';";
=======
		
		function chercher($titre) {
			$sql="SELECT * FROM article where titre='$titre'";
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
			$db=Config::getConnexion();
			try{
			$listearticle = $db->query($sql);
			return $listearticle;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
<<<<<<< HEAD
		}*/
		function chercher($titre) {
			$sql="SELECT * FROM article where titre='$titre' ";
=======
		}
		function chercherA($nomAuteur) {
			$sql="SELECT * FROM article where nomAuteur='$nomAuteur'";
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
			$db=Config::getConnexion();
			try{
			$listearticle = $db->query($sql);
			return $listearticle;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}
<<<<<<< HEAD


		function triarticle()
		{
			$sql="SELECT * from article ORDER by idA ASC";
			$db = config::getConnexion();
			try{
			$listearticle=$db->query($sql);
			return $listearticle;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function triarticleD()
		{
			$sql="SELECT * from article ORDER by dateA DESC";
			$db = config::getConnexion();
			try{
			$listearticle=$db->query($sql);
			return $listearticle;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
=======
	
>>>>>>> aead4f1e992e4ba39a91b8c87258e07118925adf
		


		
	}

?>