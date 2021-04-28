<?PHP
	include_once '../../controller/articleC.php';
	
	$articleC=new articleC();
	
	if (isset($_GET['id']))
	{
		$articleC->supprimerarticle($_GET['id']);
		
		header('Location:blog.php');
		
	}
?>