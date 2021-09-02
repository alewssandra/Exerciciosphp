<!DOCTYPE html>
<html>
<head>
	<title>Exer 1 Prova</title>
	<meta charset="utf-8">

</head>
<body>
<?php 
	echo "<B> Sr(a) ".$_POST["nome"]." <B> <br><br>";
    echo "<B> Seu Salário e ".$_POST["salario"]." <B> <br>";

    if ($_POST["salario"]<1500) 
    {
    echo "você não tem direito a aumento <br><br>";
    }
    else if ($_POST["salario"]>=1500 && $_POST["salario"] <=1750)
    {
     echo "Seu novo salario com 30% de aumento é: ".($_POST["salario"]*1.3)."<br><br>";
    }
    else if ($_POST["salario"]>1750 && $_POST["salario"] <2000) 
    {
        echo "Seu novo salario com 20% de aumento é: ".($_POST["salario"]*1.2)."<br><br>";
    }
    else if ($_POST["salario"]>=2000 && $_POST["salario"] <=3000) 
    {
        echo "Seu novo salario com 10% de aumento é: ".($_POST["salario"]*1.1)."<br><br>";
    }

    else 
    {
        echo "Seu novo salario com 5% de aumento é: ".($_POST["salario"]*1.05)."<br><br>";
    }

?>
<form>
<br><br>
<input type="button" value="Imprimir página" onClick="window.print()">
<input type="button" value="Voltar a tela inicial" onClick="history.go(-1)">

</form>
</body>
</html>
