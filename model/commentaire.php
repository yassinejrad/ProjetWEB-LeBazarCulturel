<?PHP
	class commentaire
    {
		private ?int $idCom = null;
		private ?string $nom = null;
		private ?string $prenom = null;
		private ?string $message = null;
		
			
		function __construct( string $nom,string $prenom,string $message)
        {
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->message=$message;
		
		}
		
		function getidCom(): int
		{
			return $this->idCom;
		}
		function getnom(): string
		{
			return $this->nom;
		}
		function getprenom(): string
		{
			return $this->prenom;
		}
		function getmessage(): string
		{
			return $this->message;
		}
		


		function setnom(string $nom): void
        {
			$this->nom=$nom;
		}
		function setprenom(string $prenom): void
        {
			$this->prenom=$prenom;
		}
		function setmessage(string $message): void
        {
			$this->message=$message;
		}
		
    }
?>