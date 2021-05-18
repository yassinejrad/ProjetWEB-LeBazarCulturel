<?php


    class Event {
        public int $id ;
        public string $name ;
        public string $location;
        public string $start_date; 
        public string $end_date;
        public string $sponsor1;
        public string $sponsor2;
        public string $sponsor3;
        public string $artist1;
        public string $artist2;
        public string $artist3;
        public string $description;
        public string $image;
        public int $price ; 

        
        

        public function __construct(int $id ,  string $name ,string $location ,
        string $start_date ,string $end_date ,string $sponsor1 
        ,string $sponsor2 ,string $sponsor3 ,string $artist1 ,string $artist2 ,
        string $artist3 ,string $description ,string $image , int $price)
        {
            $this->id = $id ; 
            $this->$name = $name ; 
            $this->location = $location;
            $this->start_date =$start_date ; 
            $this->$end_date =$end_date ;
            $this->sponsor1 =$sponsor1 ;
            $this->sponsor2 =$sponsor2 ;
            $this->sponsor3 =$sponsor3;
            $this->artist1 = $artist1;
            $this->artist2 =$artist2 ;
            $this->artist3 = $artist3;
            $this->description =$description ;
            $this->image =$image ;
            $this->price = $price ; 

        }


        
    }




?>