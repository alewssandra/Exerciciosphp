<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">

</head>
<body>
	<B><H1>Olá <?php echo $_POST["nome"] ?></H1></B><br><br>
<?php 
if ((isset($_POST["nome"]) and ($_POST["numero1"]) and ($_POST["numero2"]) and ($_POST["calculadora"]))) {
  	echo " Os números escolhidos foram: ".$_POST["numero1"]." e ". $_POST["numero2"]."<br><br>";
  	echo "A operação escolhida foi :".$_POST["calculadora"]."<br><br>";
  	if ($_POST["calculadora"]=="soma") {
  		$resultado = $_POST["numero1"]+$_POST["numero2"];
  	}
  	else if ($_POST["calculadora"]=="subtracao") {
  		$resultado = $_POST["numero1"]-$_POST["numero2"];
  	}
  	else if ($_POST["calculadora"]=="divisao") {
  		$resultado = $_POST["numero1"]/$_POST["numero2"];
  	}
  	else {
  		$resultado = $_POST["numero1"]*$_POST["numero2"];
  	}
  	echo "O resultado final é : $resultado <br><br>";
  }

?>
<form> 
<input type="button" value="Voltar" onClick="history.go(-1)"> 
</form>
</body>
</html>
