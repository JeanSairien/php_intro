<!DOCTYPE html>
<html>
<head>
	<title>Compte bancaire</title>
</head>
<body>

<?php

$etat = '150euro';

?>

<form action="cb.php" method="POST">

<h1 type="text" name="etat">votre compte est a <?php ($_POST['etat']);  ?>   </h1>

</form>
</body>
</html>