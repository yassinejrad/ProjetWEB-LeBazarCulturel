<?PHP
	include_once '../../controller/commentaireC.php';
	include_once '../../Model/articleC.php';
	$commentaireC=new commentaireC();
	
	if (isset($_GET['id']))
	{
		$commentaireC->supprimercommentaire($_GET['id']);
		
		header('Location:readmore.php?id='.$_GET['idA'] );
		
	}
?>