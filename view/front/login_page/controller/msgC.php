<?PHP
      include_once '../../../../config.php';
      include_once 'C:/xampp/htdocs/2A4/blog6/view/front/login_page\model\msg.php';
    
    

    class msgC {
        

   
          

        function  ajoutermsg($msg)
        {
            $sql="INSERT INTO msg (id_s,id_r,date,message) 
            VALUES (:id_s,:id_r,:date,:msg)" ;
            
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql) or die( $db->error); 
                
                $query->execute
                ([
                    'id_s' => $msg->getid_s(),
                    'id_r' => $msg->getid_r(),
                    'date' => $msg->getdate(),
                    'msg' => $msg->getmsg(),
              
                    
                ]); 
             
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
        }
        
      
        
    }

?>

