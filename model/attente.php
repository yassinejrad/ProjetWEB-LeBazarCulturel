<?PHP
	class attente
    {
		private ?int $REFERENCE = null;
		private ?string $NOM = null;
		private ?float $PRIX = null;
		private ?string $IMAGE = null;
        private  $DATE = null;
		private ?int $QTE = null;
		private ?string $DESC = null;
		private ?string $CATEGORIE = null;
		private ?string $user = null;
		private ?int $STATUE = null;
			
		function __construct( string $NOM, float $PRIX, $DATE ,int $QTE ,string $IMAGE ,string $DESC, string $CATEGORIE ,string $USER,int $STATUE )
        {
			$this->NOM=$NOM;
			$this->PRIX=$PRIX;
			$this->IMAGE=$IMAGE;
			$this->DATE=$DATE;
			$this->QTE=$QTE;
			$this->DESC=$DESC;
			$this->CATEGORIE=$CATEGORIE;
			$this->USER=$USER;
			$this->STATUE=$STATUE;
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
		function getQTE(): int{
			return $this->QTE;
		}
		function getDESC(): string{
			return $this->DESC;
		}
		function getCAT(): string{
			return $this->CATEGORIE;
		}
		function getUSER(): string{
			return $this->USER;
		}
		function getSTATUE(): int{
			return $this->STATUE;
		}

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
		function setCAT(string $CATEGORIE): void
		{
			 $this->CATEGORIE=$CATEGORIE;
		}
		function setUSER(string $USER): void
		{
			 $this->USER=$USER;
		}
		function setSTATUE(string $STATUE): void
		{
			 $this->STATUE=$STATUE;
		}
    }
?>