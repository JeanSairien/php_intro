<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bonjour php</title>
</head>
<body>
<p>
	<?php if(isset($_GET['nom']) AND (isset($_GET['surnom']))) /*AND (isset($_GET['repeter'])))*/

 	{
 		/*for($repetition = 1; $repetition <= $_GET['repeter'] ; $repetition++)*/ //ici on incremente pour la repetition !! 
 		{
		echo 'Bonjour ' . $_GET['nom'] .''. $_GET['surnom']; // on affiche le nom et le surnom envoyer par l'url  
 		}
	}
	else
	{

		echo 'error name!' ; // par mesure de securitée si les variable n'existe pas ou ne sont pas definit on affiche une erreur!
	} 
	
	 ?>

</p>


</body>
</html>