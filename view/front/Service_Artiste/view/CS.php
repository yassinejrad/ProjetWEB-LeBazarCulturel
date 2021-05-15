<?php 
require_once '../../../../Controller/artisteC.php';
require_once '../../../../Model/artiste.php';
function Cs($Nom, $Prenom, $Email, $Numero, $Type, $Adresse, $Postal, $Code, $CodeConfirmation, $Mode)
{
	
	if 
        (
            !empty($_POST['Nom']) && 
            !empty($_POST['Prenom']) && 
            !empty($_POST['Email']) && 
            !empty($_POST['Numero']) && 
            !empty($_POST['Type']) && 
            !empty($_POST['Postal']) && 
            !empty($_POST['Adresse']) && 
            !empty($_POST['Code'])&&
            !empty($_POST['CodeConfirmation'])
        )
        {
			if ($Prenom !== "Admin")
                {
                    $NomLenght = strlen($Nom);
                    $PrenomLenght = strlen($Prenom);
                    $EmailLenght = strlen($Email);
                    $NumeroLenght = strlen($Numero);
                    $PostalLenght = strlen($Postal); 
                    $AdresseLenght = strlen($Adresse);
                    $CodeLenght =  strlen($Code);
                    if 
                        (
                            $NomLenght <= 50 &&
                            $PrenomLenght <= 50 &&
                            $EmailLenght <= 50 &&
                            $NumeroLenght <= 50 &&
                            $PostalLenght <= 50 &&
                            $AdresseLenght <= 50 &&
                            $CodeLenght <= 50
                        )
                        {
                            if ($Type == "Photographie" || $Type == "Sculture" || $Type =="Peinture"  || $Type == " Instrument" || $Type ==  "Livre") 
                                {
                                    if ($Mode == "Modifier")
                                        {
                                            return 1;                                 
                                        }
                                    else 
                                        {                                    
                                            if (filter_var($Email,FILTER_VALIDATE_EMAIL)) 
                                                {
                                                    if (verifierMailArtiste($Email) == 0) 
                                                        {
                                                            if ($Code == $CodeConfirmation) 
                                                                {
                                                                    return 1;
                                                                        
                                                                }
                                                            else {$erreur = "Vos mots de passes sont différents!!";return $erreur;}
                                                        }
                                                    else{$erreur = "Cet email existe déjà!!";return $erreur;}
                                                }
                                            else {$erreur = "Veuillez entrer une adresse mail valide!!";return $erreur;}
                                        }
                                }
                            else{$erreur = "Votre choix de Spécialité n'est pas disponibles";return $erreur;}
                        }
                    else {$erreur = "Vos information doivent comporter moins de 50 caractères";return $erreur;}
                }
            else{$erreur = "Vous ne pouvez pas avoir ce nom!!!";return $erreur;}
        }
    else {$erreur = "Vous devez remplir tous les champs";return $erreur;}
}



?>