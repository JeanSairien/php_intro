<?php session_start() ;



$_SESSION['adresse'] = $_POST['adresse'] ;


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bonjour php</title>
</head>
<body>
<form action="cible.php" method="POST">
<p><label> Quel est votre Adresse:<input type="text" name="adresse"></input></label></p>
<p><label>Etes vous abrutis?:<input type="checkbox" name="teubé"></input></label></p>
<p><input type="submit" /></p>
	


</form>

</body>
</html>