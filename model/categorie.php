<?PHP
	class categorie
    {
		private ?int $CODE = null;
		private ?string $NOM = null;
		
			
		function __construct( string $NOM )
        {
			$this->NOM=$NOM;
		
		}
		
		function getcode(): int{
			return $this->CODE;
		}
		function getNOM(): string{
			return $this->NOM;
		}
		


		function setNOM(string $NOM): void
        {
			$this->NOM=$NOM;
		}
		
		
    }
?>