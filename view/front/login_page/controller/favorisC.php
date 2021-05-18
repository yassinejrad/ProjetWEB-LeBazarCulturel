<?PHP
   include_once 'C:/xampp/htdocs/2A4/blog6/config.php';
    include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/favoris.php';
    
    

    class favorisC {
        

   
          

        function  ajouterfavoris($favoris)
        {
            $sql="INSERT INTO favoris (id_produit,date,id_user) 
            VALUES (:id_produit,:date,:id_user)" ;
            
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql) or die( $db->error); 
                
                $query->execute
                ([
                    'id_produit' => $favoris->getid_produit() ,
                    'date' => $favoris->getdate(),
                    'id_user' => $favoris->getid_user(),
              
                    
                ]); 
             
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
        }
        
        function  afficherfavoris($ID){
            
            $sql="SELECT * FROM favoris f USER u where f.id_user==u.'$ID' ";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
        

        function supprimerfavoris($reference){
            $sql="DELETE FROM favoris f   WHERE id_produit=:ID";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':ID',$reference);
            try{
                $req->execute();
                
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
     
      
        
    }

?>

