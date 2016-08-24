<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cible php</title>
</head>
<body>
<p>vous habitez	<?php  echo htmlspecialchars($_POST['adresse']); ?></p>
<?php
	if(isset($_POST['teubé']))
	{
		echo "<p>VOus etes Teubé !!!</p>";
	}
	else
	{
		echo "<p>Vous avez de la chance!!</p>";

	}
	?>
	




</body>
</html>