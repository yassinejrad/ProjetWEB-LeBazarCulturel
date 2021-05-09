<?PHP
    class msg
    {
        private ?int $ID = null;
        private ?int  $id_s = null;
        private ?int $id_r = null;
        private ?string $date = null;
        private ?string $msg = null;
     
        
        
            
        function __construct( int $id_s, int $id_r,string $date,string $msg )
        {
            $this->id_s=$id_s;
            $this->id_r=$id_r;
            $this->date=$date;
            $this->msg=$msg;
      
            
        }
        
        function getID(): int{
            return $this->ID;
        }
        function getid_s(): int{
            return $this->id_s;
        }
   
        function getid_r(): int{
            return $this->id_r;
        }
        function getdate() :string {
            return $this->date;
        }
        function getmsg() :string {
            return $this->msg;
        }
      

        function setid_s(int $id_s): void
        {
            $this->id_r=$id_s;
        }
        function setind_r(int $ind_r): void
        {
            $this->ind_r=$ind_r;
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

