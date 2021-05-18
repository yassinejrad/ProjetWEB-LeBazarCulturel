<?php
    class Service {
        private ?int $reference = null;
        private string $Type;
        private string $Description;
        private float $Prix;

        public function __construct($Type, $Prix, $Description){
            $this->Type = $Type;
            $this->Prix = $Prix;
            $this->Description = $Description;
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
    }