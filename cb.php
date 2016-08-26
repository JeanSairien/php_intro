<!DOCTYPE html>
<html>
<head>
	<title>Compte bancaire</title>
</head>
<body>

<?php

$etat = $_POST['etat'] ;

?>

<form action="cb.php" method="POST">
<input type="text" name="etat" />
<h1>votre compte est a <?php echo $_POST['etat'] ?>  euro   </h1>


			<?php if (empty($_POST["etat"])) {
    				 echo 'Votre compte est vide veuillez effectuer une transaction!'; 

						}



				if ($etat > 1) {

				     echo 'votre compte est okay' ;

  						} else if($etat != 0 ) {

  							echo 'votre compte est a sec ' ;
  							} 
  							
  							
					

					

					
/*$var1 = 0;
$var2 = null;
$var3 = '';
$var4 = NULL;
$var5 = '0';
$var6 = array();
$var7 = false;
$var8 = TRUE;
$var9 = true;
$var10 = FALSE;



var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var5);
var_dump($var6);
var_dump($var7);
var_dump($var8);
var_dump($var9);
var_dump($var10);*/
?>

</form>
</body>
</html>;