<?PHP
	class promotion
    {
		private ?int $idPromo = null;
		private ?string $titre = null;
        private  $dateD = null;
		private  $dateF = null;
        private ?int $pourcentage = null;
		private ?int $idProduit = null;
		
			
		function __construct( string $titre ,$dateD ,$dateF ,int $pourcentage,int $idProduit)
        {
			$this->titre=$titre;
			$this->dateD=$dateD;
			$this->dateF=$dateF;
			$this->pourcentage=$pourcentage;
			$this->idProduit=$idProduit;
		}
		
		function getidPromo(): int
		{
			return $this->idPromo;
		}
		function gettitre(): string
		{
			return $this->titre;
		}
        function getdateD()
		{
			return $this->dateD;
		}
		
		function getdateF()
		{
			return $this->dateF;
		}
		function getpourcentage(): int
		{
			return $this->pourcentage;
		}

		function getidProduit(): int
		{
			return $this->idProduit;
		}


		function settitre(string $titre): void
        {
			$this->titre=$titre;
		}
		function setdateD($dateD): void
        {
			$this->dateD=$dateD;
		}
		function setdateF($dateF): void
        {
			$this->dateF=$dateF;
		}
		function setpourcentage(int $pourcentage): void
        {
			$this->pourcentage=$pourcentage;
		}
		function setidProduit (int $idProduit) :void
		{
			$this->idProduit=$idProduit;
		}

    }
?>