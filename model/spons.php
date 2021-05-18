<?php


    class spons {

        public string $name ;
        public string $description;
        public string $image;
        
        public function __construct(string $name ,string  $description ,  
        string $image   )
        {
            $this->$name = $name ; 
            $this->description =$description ;
            $this->image =$image ;

        }



        
    }




?>