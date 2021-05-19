<?php
    class Artiste 
    {
        private ?int $id = 0;
        private ?string $Nom=null;
        private ?string $Prenom=null;
        private ?string $Email=null;
        private ?string $Numero=null;
        private ?string $Type=null;
        private ?string $Adresse=null;
        private ?string $Postal=null;
        private ?string $Code=null;

        public function __construct(string $Nom, string $Prenom, string $Email, string $Numero , string $Type, string $Adresse, string $Postal, string $Code)
        {
            $this->Nom = $Nom;
            $this->Prenom = $Prenom;
            $this->Email= $Email;
            $this->Numero = $Numero;
            $this->Type = $Type;
            $this->Adresse = $Adresse;
            $this->Postal = $Postal;
            $this->Code = $Code;

        }

        public function getArtisteByid () {
            return $this->id;
        }

        public function getNom (){
            return $this->Nom;
        }

        public function getPrenom (){
            return $this->Prenom;
        }

        public function getEmail (){
            return $this->Email;
        }

        public function getCode (){
            return $this->Code;
        }

        public function getNumero (){
            return $this->Numero;
        }

        public function getType (){
            return $this->Type;
        }
        
        public function getPostal (){
            return $this->Postal;
        }

        public function getAdresse (){
            return $this->Adresse;
        }

        public function setNom (){
            $this->Nom;
        }

        public function setPrenom (){
            $this->Prenom;
        }

        public function setEmail (){
            $this->Email;
        }

        public function setCode (){
            $this->Code;
        }

        public function setNumero (){
            $this->Numero;
        }

        public function setType (){
            $this->Type;
        }
        
        public function setPostal (){
            $this->Postal;
        }

        public function setAdresse (){
            $this->Adresse;
        }
    }
?>