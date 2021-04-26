<?PHP
    include_once 'C:\xampp\htdocs\login_page\config.php';
    include_once 'C:\xampp\htdocs\login_page\model\user.php';
    
    

    class userC {
        

        function  AUTH($EMAIL ,$PASSE) {
         $host="localhost" ; 
         $user="root" ; 
         $pass=""  ; 
         $db="databasephp" ; 
         $conn=mysqli_connect($host,$user,$pass,$db) ; 
         $query="SELECT * FROM USER WHERE EMAIL='$EMAIL ' AND PASSE='$PASSE' " ; 
         $result=mysqli_query($conn,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($conn), E_USER_ERROR); 
        if(mysqli_num_rows($result)==1)     {
            while ( $row= mysqli_fetch_assoc($result))
            {
               if ($row['TYPE']=='Buyer' )
               { 
                   session_start() ; 
                   $_SESSION['auth']=$row['ID'] ;
                   
                   $_SESSION['TYPE']=$row['TYPE'] ;   
                   header('location:loding.php') ;

               echo ("Buyer") ; 
              
               }
                else  
               echo ("Seller") ; 
   
     
            }
       
        
        }
        else  {
          echo ( "not found ") ; 

        }

   
        }
          

        function  ajouterUser($user)
        {
            $sql="INSERT INTO USER (NOM,TEL,ADRESSE,EMAIL,PASSE,SEX,TYPE) 
            VALUES (:NOM,:TEL,:ADRESSE,:EMAIL,:PASSE,:SEX,:TYPE)" ;
            
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
                    'SEX' => $user->getSEX() ,
                    'TYPE' => $user->getTYPE()
                    
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
        function  afficherUser_specifique($ID){
            
            $sql="SELECT * FROM USER WHERE ID='$ID' ";
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
        function modifierUSER($user, $ID){
         
            $sql=" UPDATE USER SET 
            
            NOM =:NOM, 
            TEL =:TEL,
            ADRESSE =:ADRESSE,
            EMAIL =:EMAIL,
            PASSE =:PASSE,
            SEX=:SEX,
            TYPE =:TYPE,
            DESCRIPTION=:DESCRIPTION 
            WHERE ID = :ID" ;
            
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql) or die( $db->error); 
                
               
                $query->execute([
                    'NOM' => $user->getNOM(),
                    'TEL' => $user->getTEL(),
                    'ADRESSE' => $user->getADRESSE(),
                    'EMAIL' => $user->getEMAIL(),
                    'PASSE' => $user->getPASSE(),
                    'SEX'=> $user->getSEX(),
                    'TYPE'=> $user->getType(),
                    'DESCRIPTION'=> $user->getDESCRIPTION() ,
                    'ID'=>$ID
 
                    
                ]); 
              
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
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

