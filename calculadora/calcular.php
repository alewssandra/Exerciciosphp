<!DOCTYPE html>
<html>
<head>
	<title>Exer 1 Prova</title>
	<meta charset="utf-8">

</head>
<body>
<?php
    if ((isset($_POST["oper"]))) 
    {
        echo "Números digitados: ".$_POST["n1"]." e ".$_POST["n2"]."<br><br>";
    
    echo "Operações escolhidas pelo usuário<br><br>";
    foreach ($_POST["oper"] as $oper)
    {
        echo "- $oper <br>"; 
    }

    foreach ($_POST["oper"] as $oper) 
    {
    
    if ($oper == "soma") 
    {
        echo " A soma dos número é: ".($_POST["n1"]+$_POST["n2"])."<br><br>";
    }

    if ($oper == "subtração") 
    {
        echo " A subtração dos número é: ".($_POST["n1"]-$_POST["n2"])."<br><br>";
    }

    if ($oper == "multiplicação")
    {
        echo " A multiplicação dos número é: ".($_POST["n1"]*$_POST["n2"])."<br><br>";
    }

    if ($oper == "divisão") 
    {
        echo " A divisão dos número é: ".($_POST["n1"]/$_POST["n2"])."<br><br>";
    }







        # code...
    }



    }
    else 
    {
        echo "Você não selecionou nenhuma das operações a serem feitas<br><br>";
    }
	

    



    


?>
<form>
<br><br>
<input type="button" value="Imprimir página" onClick="window.print()">
<input type="button" value="Voltar a tela inicial" onClick="history.go(-1)">

</form>
</body>
</html>
