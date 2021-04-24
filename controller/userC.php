<?PHP
    include_once 'C:\xampp\htdocs\login_page\config.php';
    include_once 'C:\xampp\htdocs\login_page\model\user.php';
    
    

    class userC {
        
        function  ajouterUser($user)
        {
            $sql="INSERT INTO USER (NOM,TEL,ADRESSE,EMAIL,PASSE) 
            VALUES (:NOM,:TEL,:ADRESSE,:EMAIL,:PASSE)" ;
            
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql) or die( $db->error); 
                
                $query->execute
                ([
                    'NOM' => $user->getNOM(),
                    'TEL' => $user->getTEL(),
                    'ADRESSE' => $user->getADRESSE(),
                    'EMAIL' => $user->getEMAIL(),
                    'PASSE' => $user->getPASSE(),
                    
                ]);         
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
        }
        
        function  afficherUser(){
            
            $sql="SELECT * FROM USER";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }

        function supprimerUser($reference){
            $sql="DELETE FROM USER WHERE ID= :ID";
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
        function modifierUSER($produits, $ID){
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE produits SET 
                        NOM = :NOM, 
                        TEL = :TEL,
                        ADRESSE = :ADRESSE,
                        EMAIL = :EMAIL,
                        PASSE = :PASSE,
                     
                        

                    WHERE ID = :ID'
                );
                $query->execute([
                    'NOM' => $produits->getNOM(),
                    'TEL' => $produits->getTEL(),
                    'ADRESSE' => $produits->getADRESSE(),
                    'EMAIL' => $produits->getEMAIL(),
                    'PASSE' => $produits->getPASSE(),
                    'id' => $ID
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function chercherid($reference) {
            $sql="SELECT * FROM USER where ID=:ID";
            $db=Config::getConnexion();
            try{
                $query=$db->prepare($sql);
            $query->execute(['ID' =>$reference]);
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

