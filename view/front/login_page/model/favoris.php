<?PHP
    class favoris
    {
        private ?int $ID = null;
        private ?string $date = null;
        private ?int $ID_produit = null;
        private ?int $ID_user = null;
     
        
        
            
        function __construct( int $ID_produit, int $ID_user,string $date )
        {
            $this->ID_produit=$ID_produit;
            $this->ID_user=$ID_user;
            $this->date=$date;
      
            
        }
        
        function getID(): int{
            return $this->ID;
        }
        function getID_produit(): int{
            return $this->ID_produit;
        }
   
        function getID_user(): string{
            return $this->ID_user;
        }
        function getdate() :string {
            return $this->date;
        }
      

        function setID_produit(int $ID_produit): void
        {
            $this->ID_produit=$ID_produit;
        }
        function setID_user(int $ID_user): void
        {
            $this->ID_user=$ID_user;
        }
        function setdate(string $date): void
        {
            $this->date=$date;
        }
  
    }
?>

