<?php
    class Service {
        private ?int $reference = null;
        private string $Type;
        private string $Description;
        private float $Prix;
        private int $Id_A;

        public function __construct($Type, $Prix, $Description, $Id_A){
            $this->Type = $Type;
            $this->Prix = $Prix;
            $this->Description = $Description;
            $this->Id_A = $Id_A;
        }

        public function getReferenceService () {
            return $this->reference;
        }

        public function getType (){
            return $this->Type ;
        }

        public function getDescription (){
            return $this->Description ;
        }

        public function getPrix (){
            return $this->Prix ;
        }

        public function setType ($Type){
            $this->Type = $Type;
        }

        public function setDescription ($Description){
            $this->Description = $Description;
        }

        public function setPrix ($Prix){
            $this->Prix = $Prix;
        }
        public function getId_A(){
            return $this->Id_A;
        }
        public function setId_A ($Id_A){
            $this->Id_A = $Id_A;
        }
    }