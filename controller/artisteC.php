<?php
    require_once '../../../../config.php';
    require_once '../../../../Model/artiste.php';
    class artisteC 
        {
            public function afficherArtiste() {
                try {
                    $pdo = config::getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM artiste WHERE id > 0'
                    );
                    $query->execute();
                    $userinfo = $query->fetchall();
                    return $userinfo;
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
    
            public function getArtisteByid($id) {
                try 
                    {
                        $db = config::getConnexion();
                        $requser = $db->prepare("SELECT * FROM artiste WHERE id = ?");
                        $requser->execute(array($id));
                        $userinfo = $requser->fetch();
                        return $userinfo;
                    }
                catch (PDOException $e) {
                    $e->getMessage();
                }
            }
    
            public function getArtisteByType($type) {
                try {
                    $pdo = config::getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM artiste WHERE Type = :type'
                    );
                    $query->execute([
                        'type' => $type
                    ]);
                    return $query->fetch();
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
    
            public function addArtiste($artiste) {
                try {
                    $pdo = config::getConnexion();
                    $query = $pdo->prepare(
                        'INSERT INTO artiste (Nom, Prenom, Email, Code, Numero, Type, Postal, Adresse) 
                    VALUES (:Nom, :Prenom, :Email, :Code, :Numero, :Type, :Postal, :Adresse)'
                    );
                    $query->execute([
                        'Nom' => $artiste->getNom(),
                        'Prenom' => $artiste->getPrenom(),
                        'Email' => $artiste->getEmail(),
                        'Code' => $artiste->getCode(),
                        'Numero' => $artiste->getNumero(),
                        'Type' => $artiste->getType(),
                        'Postal' => $artiste->getPostal(),
                        'Adresse' => $artiste->getAdresse()
                    ]);
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
    
            public function updateArtiste($Nom, $Prenom, $Email, $Numero, $Type, $Adresse, $Postal, $Code, $id) 
            {
                try {
                    $pdo = config::getConnexion();
                    $query = $pdo->prepare
                    (
                        'UPDATE artiste SET Nom = ?, Prenom = ?, Email = ?, Numero = ?, Type = ?, Adresse = ?, Postal = ?, Code = ? WHERE id = ?'
                    );
                        $query->execute
                        ([$Nom, $Prenom, $Email, $Numero, $Type, $Adresse, $Postal, $Code, $id]);
                        return $query;
                    
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
    
            public function deleteArtiste($id) {
                try {
                    $pdo = config::getConnexion();
                    $query = $pdo->prepare(
                        'DELETE FROM artiste WHERE id = ?'
                    );
                    $query->execute([
                        $id
                    ]);
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
        }
    function connexionArtiste($Email, $Code) 
    {
        try 
            {
                $db = config::getConnexion();
                $requser = $db-> prepare("SELECT * FROM artiste WHERE Email = ? AND Code = ?");
                $requser->execute(array($Email, $Code));
                return $requser;
            }
        catch (PDOException $e) 
            {
                $e->getMessage();
            }
    }  

    function verifierMailArtiste($Email)
        {
            $sql = "SELECT * FROM artiste WHERE Email = ?";
            $db = config::getConnexion();
            try
                {
                    $reqmail = $db-> prepare($sql);
                    $reqmail->execute(array($Email));
                    $mailexist = $reqmail->rowCount();

                    return $mailexist;
                }
            catch (PDOException $e){$e->getMessage();}
        }

    function verifierCodeArtiste($Email, $Code)
        {
            $sql = "SELECT Code FROM artiste WHERE Email = ? AND Code = ?";
            $db = config::getConnexion();
            try
                {
                    $reqmail = $db-> prepare($sql);
                    $reqmail->execute(array($Email, $Code));
                    return $reqmail;
                }
            catch (PDOException $e){$e->getMessage();}
        }
    function test($id)
    {
        $sql = "SELECT * FROM artiste WHERE id = ?";
            $db = config::getConnexion();
            try
                {
                    $reqmail = $db-> prepare($sql);
                    $reqmail->execute(array($Email));
                    $mailexist = $reqmail->rowCount();
                    return $mailexist;
                }
            catch (PDOException $e){$e->getMessage();}
        }

?>