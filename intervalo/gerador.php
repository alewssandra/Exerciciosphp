<!DOCTYPE html>
<html>
<head>
	<title>Gerador de números</title>
	<meta charset="utf-8">

</head>
<body>
<?php 

  	echo " Valor inicial: ".$_POST["inicial"]." e valor final: ". $_POST["final"]."<br><br>";
  	echo "Intervalo Gerado <br><br>";
  	
  	for ($inicio = $_POST["inicial"]; $inicio<=$_POST["final"];$inicio++) {
  		echo "$inicio <br>";
  	}
  

?>
<form>
<br> 
<input type="button" value="Voltar" onClick="history.go(-1)"> 
</form>
</body>
</html>
