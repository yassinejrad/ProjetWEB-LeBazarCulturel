<?PHP
    class user
    {
        private ?int $ID = null;
        private ?string $NOM = null;
        private ?int $TEL = null;
        private ?string $ADRESSE = null;
        private ?string $EMAIL = null;
        private ?string $PASSE = null;
        private ?string $SEX = null;
        private ?string $IMG = null;
        private ?int $BLOQUER = null;
        
        
            
        function __construct( string $NOM, int $TEL,string $ADRESSE ,string $EMAIL ,string $PASSE ,string $SEX  ,string $TYPE,string $DESCRIPTION ,string $IMG ,int $BLOQUER )
        {
            $this->NOM=$NOM;
            $this->TEL=$TEL;
            $this->ADRESSE=$ADRESSE;
            $this->EMAIL=$EMAIL;
            $this->PASSE=$PASSE;
            $this->SEX=$SEX;
            $this->TYPE=$TYPE;
            $this->DESCRIPTION=$DESCRIPTION; 
            $this->IMG=$IMG; 
            $this->BLOQUER=$BLOQUER; 
            
        }
        
        function getID(): int{
            return $this->ID;
        }
        function getNOM(): string{
            return $this->NOM;
        }
        function getTEL(): int{
            return $this->TEL;
        }
        function getADRESSE(): string{
            return $this->ADRESSE;
        }
        function getEMAIL() :string {
            return $this->EMAIL;
        }
        function getPASSE(): string{
            return $this->PASSE;
        }
        function getSEX(): string{
            return $this->SEX;
        }
        function getTYPE(): string{
            return $this->TYPE;
        }
        function getDESCRIPTION(): string{
            return $this->DESCRIPTION;
        }
        function getIMG(): string{
            return $this->IMG;
        }
        function getBLOQUER(): int{
            return $this->BLOQUER;
        }

        function setNOM(string $NOM): void
        {
            $this->NOM=$NOM;
        }
        function setTEL(int $TEL): void
        {
            $this->TEL=$TEL;
        }
        function setADRESSE(string $ADRESSE): void
        {
            $this->ADRESSE=$ADRESSE;
        }
        function setEMAIL( string $EMAIL): void
        {
            $this->EMAIL=$EMAIL;
        }
        function setPASSE(string $PASSE ): void
        {
             $this->PASSE=$PASSE;
        }
        function setSEX(string $SEX ): void
        {
             $this->SEX=$SEX;
        }
        function setTYPE(string $TYPE ): void
        {
             $this->TYPE=$TYPE;
        }
        function setDESCRIPTION(string $DESCRIPTION ): void
        {
             $this->DESCRIPTION=$DESCRIPTION;
        }
        function setIMG(string $IMG ): void
        {
             $this->IMG=$IMG;
        }
        function setBLOQUER(string $BLOQUER ): void
        {
             $this->BLOQUER=$BLOQUER;
        }
       
       
        
    }
?>

