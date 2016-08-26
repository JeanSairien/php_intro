<?php session_start() ;

<<<<<<< HEAD
$fp = fopen("panel.html","a"); // ouverture du fichier en écriture
fputs($fp, "\n"); // on va a la ligne
fputs($fp, 'win'); // on écrit le nom et email dans le fichier
fclose($fp);


setcookie('nom',$_GET['nom'], time() * 60);
setcookie('surnom',$_GET['surnom'], time() * 60);
=======
/*$monfichier = fopen('panel.html', 'a+');	


fclose($monfichier);

setcookie('nom',$_GET['nom'], time() + 60);
setcookie('surnom',$_GET['surnom'], time() + 60);*/

$monfichier = fopen('panel.html', 'r+');

 

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)

$pages_vues += 1; // On augmente de 1 ce nombre de pages vues

fseek($monfichier, 0); // On remet le curseur au début du fichier

fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fputs($monfichier, ' ici ce trouve '.$_GET['nom']);


fputs($monfichier, $_GET['surnom']);


 

fclose($monfichier);

 

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
>>>>>>> f6ec7eaf4021965a4bff5fda2a2d876231820967

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
	//http://www.monsite.com/bonjour.php?nom=red&prenom=fish exemple de syntax pour methode get

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

<h1><?php echo $_SESSION['nom'],$_SESSION['surnom'] ?></h1>
<h2><?php echo $_COOKIE['nom'],$_COOKIE['surnom'] ?></h2>


</body>
</html>