<?php session_start() ;

setcookie('nom',$_GET['nom'], time() + 60);
setcookie('surnom',$_GET['surnom'], time() + 60);

$_SESSION['nom'] = $_GET['nom'] ;
$_SESSION['surnom'] = $_GET['surnom'] ;

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bonjour php</title>
</head>
<body>
<p>

	<?php if(isset($_GET['nom']) AND (isset($_GET['surnom']))) /*AND (isset($_GET['repeter'])))*/
	//http://www.monsite.com/bonjour.php?nom=Dupont&prenom=Jean exemple de syntax pour methode get

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

<!--<h1><?php echo $_SESSION['nom'],$_SESSION['surnom'] ?></h1>-->
<h2><?php echo $_COOKIE['nom'],$_COOKIE['surnom'] ?></h2>


</body>
</html>