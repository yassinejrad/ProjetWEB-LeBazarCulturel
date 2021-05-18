<?PHP

    
    include_once 'C:/xampp/htdocs/2A4/blog6/config.php';
    include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page/model/notif.php';
  

    class notifC {
        

   
          

        function  ajoutermsg($notif)
        {
            $sql="INSERT INTO notif (id_h,id_v,date,msg) 
            VALUES (:id_h,:id_v,:date,:msg)" ;
            
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql) or die( $db->error); 
                
                $query->execute
                ([
                    'id_h' => $notif->getid_h(),
                    'id_v' => $notif->getid_v(),
                    'date' => $notif->getdate(),
                    'msg' => $notif->getmsg(),
              
                    
                ]); 
             
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
        }

        function supprimernotif($id_h,$id_v){
            $sql="DELETE FROM notif WHERE id_h= :id_h and  id_v= :id_v";
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

