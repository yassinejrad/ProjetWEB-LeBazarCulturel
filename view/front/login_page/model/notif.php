<?PHP
    class notif
    {
        private ?int $ID = null;
        private ?int  $id_h = null;
        private ?int $id_v = null;
        private ?string $date = null;
        private ?string $msg = null;
     
        
        
            
        function __construct( int $id_h, int $id_v,string $date,string $msg )
        {
            $this->id_h=$id_h;
            $this->id_v=$id_v;
            $this->date=$date;
            $this->msg=$msg;
      
            
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
        function getdate() :string {
            return $this->date;
        }
        function getmsg() :string {
            return $this->msg;
        }
      

        function setid_h(int $id_h): void
        {
            $this->id_h=$id_h;
        }
        function setind_v(int $ind_v): void
        {
            $this->ind_v=$ind_v;
        }
        function setdate(string $date): void
        {
            $this->date=$date;
        }
        function setmsg(string $msg): void
        {
            $this->msg=$msg;
        }
  
    }
?>

