<?php session_start() ;


$_SESSION['adresse'] = $_POST['adresse'] ;


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cible php</title>
</head>
<body>
<p>vous habitez	<?php  echo htmlspecialchars($_POST['adresse']); ?></p> <!-- form.php est le formulaire corresspondant-->
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
	

<h1><?php echo $_SESSION['adresse'] ?> </h1>


</body>
</html>