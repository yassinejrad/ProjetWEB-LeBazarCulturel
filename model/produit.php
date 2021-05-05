<?PHP
	class produit
    {
		private ?int $REFERENCE = null;
		private ?string $NOM = null;
		private ?float $PRIX = null;
		private ?string $IMAGE = null;
        private  $DATE = null;
		private ?int $QTE = null;
		private ?string $DESC = null;
<<<<<<< Updated upstream
		
			
		function __construct( string $NOM, float $PRIX, $DATE ,int $QTE ,string $IMAGE ,string $DESC )
=======
		private ?string $CATEGORIE = null;
		
			
		function __construct( string $NOM, float $PRIX, $DATE ,int $QTE ,string $IMAGE ,string $DESC, string $CATEGORIE )
>>>>>>> Stashed changes
        {
			$this->NOM=$NOM;
			$this->PRIX=$PRIX;
			$this->IMAGE=$IMAGE;
			$this->DATE=$DATE;
			$this->QTE=$QTE;
			$this->DESC=$DESC;
<<<<<<< Updated upstream
=======
			$this->CATEGORIE=$CATEGORIE;
>>>>>>> Stashed changes
		}
		
		function getref(): int{
			return $this->REFERENCE;
		}
		function getNOM(): string{
			return $this->NOM;
		}
		function getPRIX(): float{
			return $this->PRIX;
		}
		function getIMAGE(): string{
			return $this->IMAGE;
		}
		function getDATE() {
			return $this->DATE;
		}
		function getQTE(): string{
			return $this->QTE;
		}
		function getDESC(): string{
			return $this->DESC;
		}
<<<<<<< Updated upstream
=======
		function getCAT(): string{
			return $this->CATEGORIE;
		}
>>>>>>> Stashed changes


		function setNOM(string $NOM): void
        {
			$this->NOM=$NOM;
		}
		function setPRIX(float $PRIX): void
        {
			$this->PRIX=$PRIX;
		}
		function setIMAGE(string $IMAGE): void
        {
			$this->IMAGE=$IMAGE;
		}
		function setDATE( $DATE): void
		{
			$this->DATE=$DATE;
		}
		function setQTE(int $QTE ): void
		{
			 $this->QTE=$QTE;
		}
		function setDESC(string $DESC): void
		{
			 $this->DESC=$DESC;
		}
<<<<<<< Updated upstream
=======
		function setCAT(string $CATEGORIE): void
		{
			 $this->CATEGORIE=$CATEGORIE;
		}
>>>>>>> Stashed changes
		
    }
?>