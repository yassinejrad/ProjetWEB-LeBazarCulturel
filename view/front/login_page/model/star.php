<?PHP
    class star
    {
        private ?int $ID = null;
        private ?int  $id_h = null;
        private ?int $id_v = null;
        private ?int $valeur = null;
     
     
        
        
            
        function __construct( int $id_h, int $id_v,int $valeur )
        {
            $this->id_h=$id_h;
            $this->id_v=$id_v;
            $this->valeur=$valeur;
       
      
            
        }
        
        function getID(): int{
            return $this->ID;
        }
        function getid_h(): int{
            return $this->id_h;
        }
   
        function getid_v(): int{
            return $this->id_v;
        }
        function getvaleur(): int{
            return $this->valeur;
        }


      

        function setid_h(int $id_h): void
        {
            $this->id_h=$id_h;
        }
        function setind_v(int $ind_v): void
        {
            $this->ind_v=$ind_v;
        }
        function setvaleur(int $valeur): void
        {
            $this->valeur=$valeur;
        }
      
  
    }
?>

