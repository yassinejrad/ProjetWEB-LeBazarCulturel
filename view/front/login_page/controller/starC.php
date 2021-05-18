<?PHP
      include_once 'C:/xampp/htdocs/2A4/blog6/config.php';
      include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/star.php';
    
    
    

    class starC {
        

   
          

        function  ajouterstar($star)
        {
            $sql="INSERT INTO star (id_h,id_v,valeur) 
            VALUES (:id_h,:id_v,:valeur)" ;
            
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql) or die( $db->error); 
                
                $query->execute
                ([
                    'id_h' => $star->getid_h(),
                    'id_v' => $star->getid_v(),
                    'valeur' => $star->getvaleur(),
              
                    
                ]); 
             
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
        }

        function supprimerstar($id_h,$id_v){
            $sql="DELETE FROM star WHERE id_h= :id_h and  id_v= :id_v";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id_h',$id_h);
            $req->bindValue(':id_v',$id_v);

            try{
                $req->execute();
            
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
      
        
    }

?>

