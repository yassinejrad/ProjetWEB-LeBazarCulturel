<?PHP
	class article
    {
		private ?int $idA = null;
		private ?string $titre = null;
		private ?string $nomAuteur = null;
		private ?string $description = null;
		private  $dateA = null;
		private ?string $image = null;
			
		function __construct( string $titre,string $nomAuteur,string $description, $dateA,  string $image)
        {
			$this->titre=$titre;
			$this->nomAuteur=$nomAuteur;
			$this->description=$description;
			$this->dateA=$dateA;
			$this->image=$image;
		}
		
		function getidA(): int
		{
			return $this->idA;
		}
		function gettitre(): string
		{
			return $this->titre;
		}
		function getnomAuteur(): string
		{
			return $this->nomAuteur;
		}
		function getdescription(): string
		{
			return $this->description;
		}
		function getdateA()
		{
			return $this->dateA;
		}
		function getimage(): string{
			return $this->image;
		}


		function settitre(string $titre): void
        {
			$this->titre=$titre;
		}
		function setnomAuteur(string $nomAuteur): void
        {
			$this->nomAuteur=$nomAuteur;
		}
		function setdescription(string $description): void
        {
			$this->description=$description;
		}
		function setdateA($dateA): void
        {
			$this->dateA=$dateA;
		}
		function setimage(string $image): void
        {
			$this->image=$image;
		}
    }
?>