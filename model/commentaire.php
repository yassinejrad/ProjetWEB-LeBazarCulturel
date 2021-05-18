<?PHP
	class commentaire
    {
		private ?int $idCom = null;
		private ?string $message = null;
		private ?int $idA = null;
		private ?int $ID = null;

		function __construct( string $message,int $idA,int $ID)
        {
		$this->message=$message;
		$this->idA=$idA;
		$this->ID=$ID;
		}
		
		function getidCom(): int
		{
			return $this->idCom;
		}

		function getmessage(): string
		{
			return $this->message;
		}
		function getidA(): int
		{
			return $this->idA;
		}
		function getID(): int
		{
			return $this->ID;
		}

		function setmessage(string $message): void
        {
			$this->message=$message;
		}
		function setidA(int $idA): void
        {
			$this->idA=$idA;
		}
		function setID(int $ID): void
        {
			$this->ID=$ID;
		}
    }
?>