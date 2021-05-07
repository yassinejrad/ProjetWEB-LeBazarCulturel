<?PHP
	include_once '../../controller/commentaireC.php';
	
	$commentaireC=new commentaireC();
	
	if (isset($_GET['id']))
	{
		$commentaireC->supprimercommentaire($_GET['id']);
		
		header('Location:readmore.php');
		
	}
?>