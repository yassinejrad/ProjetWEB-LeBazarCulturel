<?php
    require_once '../../../../config.php';
    require_once '../../../../Model/service.php';
    class serviceC {
        public function afficherService() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM service'
                );
                $query->execute();
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getServiceByReference($reference) {
            try {
                $pdo = config::getConnexion();
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
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO service (Type, Prix, Description) 
                VALUES (:Type, :Prix, :Description)'
                );
                $query->execute([
                    'Type' => $service->getType(),
                    'Prix' => $service->getPrix(),
                    'Description' => $service->getDescription()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateService($service, $reference) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE service SET Type = :Type, Prix = :Prix, Description = :Description WHERE Reference = :reference'
                );
                $query->execute([
                    'Type' => $service->getType(),
                    'Prix' => $service->getPrix(),
                    'Description' => $service->getDescription(),
                    'reference' => $reference
                ]);
                
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteService($reference) {
            try {
                $pdo = config::getConnexion();
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
                $db = config::getConnexion();
                $articles = $db ->prepare('SELECT * FROM service WHERE Type LIKE "%'.$Type.'%" ORDER BY Prix '.$tri.'');
                $articles->execute([]);
                return $articles;
            }
     catch (PDOException $e) 
        {
            $e->getMessage();
        }
    }