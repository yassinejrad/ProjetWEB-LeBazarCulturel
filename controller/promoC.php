<?PHP
	require_once "../../config.php";
	include '../../Model/promo.php';

	class promotionC {
		
		function ajouterpromotion($promotion)
	{
		$sql="INSERT INTO promotion (titre,dateD,dateF,pourcentage,idProduit) 
			VALUES (:titre,:dateD,:dateF,:pourcentage, :idProduit)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute
                ([
					'titre' => $promotion->gettitre(),
					'dateD' => $promotion->getdateD(),
					'dateF' => $promotion->getdateF(),
					'pourcentage' => $promotion->getpourcentage(),
					'idProduit'=>$promotion->getidProduit(),
				]);
			}
			catch (Exception $e)
			{
				echo 'Erreur: '.$e->getMessage();
			}
	
	}


	function afficherElementPromo($idP)
    {
		$sql="SELECT * from promotion where idProduit = $idP ";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$promo=$query->fetch(PDO::FETCH_OBJ);
			return $promo;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
    }

	function afficherpromotion(){
		$sql="SELECT * from promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	 
	function modifierpromotion($promotion, $id)
		{
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE promotion SET 
					titre = :titre, 
					dateD = :dateD,
					dateF = :dateF, 
					pourcentage = :pourcentage,
					idProduit = :idProduit
					WHERE idPromo=:id'
                );
                $query->execute([
                    'titre' => $promotion->gettitre(),
					'dateD' => $promotion->getdateD(),
					'dateF' => $promotion->getdateF(),
					'pourcentage' => $promotion->getpourcentage(),
					'idProduit' => $promotion->getidProduit(),
					'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATE successfully";
            } catch (PDOException $e){
				$e->getMessage();
            }
		}
		function recupererpromotion($id)
        {
			$sql="SELECT * from promotion where idPromo=$id";
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
		function supprimerpromotion($id)
		{
			$sql="DELETE FROM promotion WHERE idPromo= :id";
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
		
		function tripromotion()
		{
			$sql="SELECT * from promotion ORDER by idPromo ASC";
			$db = config::getConnexion();
			try{
			$listepromotion=$db->query($sql);
			return $listepromotion;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		public function chercher($str) {
			$sql="SELECT * FROM promotion where idPromo ='$str' OR  titre='$str' "  ;
			$db=Config::getConnexion();
			try{
			$liste = $db->query($sql);
			return $liste;
			} 
			catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function get_produit_name(int $id)
		{
		  
			$conn = new mysqli("localhost", "root", "", "bazarculturelle"); 
			$sql = "select * from produits where REFERENCE='$id'  ";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
				$nom = $row['NOM'] ; 
			  
			return $nom ; 
		}
		
	}

?>