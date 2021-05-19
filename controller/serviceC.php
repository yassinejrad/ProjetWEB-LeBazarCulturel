<?php
    require_once '../config.php';
    require_once '../Model/artiste.php';
    class serviceC {
        public function afficherService() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM service'
                );
                $query->execute();
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherServicePerso($Id_A) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM service WHERE Id_A = ?'
                );
                $query->execute(array($Id_A));
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getServiceByReference($reference) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM service WHERE Reference = :reference'
                );
                $query->execute([
                    'reference' => $reference
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addService($service) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO service (Type, Prix, Description, Id_A) 
                VALUES (:Type, :Prix, :Description, :Id_A)'
                );
                $query->execute([
                    'Type' => $service->getType(),
                    'Prix' => $service->getPrix(),
                    'Description' => $service->getDescription(),
                    'Id_A' => $service->getId_A()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateService($service, $reference) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE service SET Type = :Type, Prix = :Prix, Description = :Description, Id_A = :Id_A WHERE Reference = :reference'
                );
                $query->execute([
                    'Type' => $service->getType(),
                    'Prix' => $service->getPrix(),
                    'Description' => $service->getDescription(),
                    'Id_A' => $service->getId_A(),
                    'reference' => $reference
                ]);
                
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteService($reference) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM service WHERE Reference = :reference'
                );
                $query->execute([
                    'reference' => $reference
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }
    function rechercherServiceByType($tri, $Type)
    {
        try
            {
                $db = getConnexion();
                $articles = $db ->prepare('SELECT * FROM service WHERE Type LIKE "%'.$Type.'%" ORDER BY Prix '.$tri.'');
                $articles->execute([]);
                return $articles;
            }
     catch (PDOException $e) 
        {
            $e->getMessage();
        }
    }
    function trouverIdA($reference){
     try
            {
                $db = getConnexion();
                $nbIdA = $db ->prepare('SELECT IdA FROM service WHERE Reference = ?');
                $nbIdA->execute(array($reference));
                return $nbIdA;
            }
     catch (PDOException $e) 
        {
            $e->getMessage();
        }        
    }