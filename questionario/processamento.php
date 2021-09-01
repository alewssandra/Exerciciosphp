<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">

</head>
<body>
<B><H1> Olá <?php echo $_POST["nome"] ?> </H1></B><br>

<?php

    $contc=0;
    $conte=0;  
    echo "Suas Respostas: <br><br>";  
    if ($_POST["p1"]==10) {
    	$contc++;
        echo "Questão 1: Correta <br>";
    }else {
    	echo "Questão 1: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p2"]==9) {
        $contc++;
        echo "Questão 2: Correta <br>";
    }else {
        echo "Questão 2: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p3"]=="segundo") {
        $contc++;
        echo "Questão 3: Correta <br>";
    }else {
        echo "Questão 3: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p4"]=="Maria") {
        $contc++;
        echo "Questão 4: Correta <br>";
    }else {
        echo "Questão 4: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p5"]==20) {
        $contc++;
        echo "Questão 5: Correta <br>";
    }else {
        echo "Questão 5: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p6"]==4) {
        $contc++;
        echo "Questão 6: Correta <br>";
    }else {
        echo "Questão 6: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p7"]==3) {
        $contc++;
        echo "Questão 7: Correta <br>";
    }else {
        echo "Questão 7: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p8"]==12) {
        $contc++;
        echo "Questão 8: Correta <br>";
    }else {
        echo "Questão 8: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p9"]==13) {
        $contc++;
        echo "Questão 9: Correta <br>";
    }else {
        echo "Questão 9: Incorreta <br>";
        $conte++;
    }

    if ($_POST["p10"]==9) {
        $contc++;
        echo "Questão 10: Correta <br>";
    }else {
        echo "Questão 10: Incorreta <br>";
        $conte++;
    }
    






    $r=$contc*10;
    echo "<br><br>Sua Pontuação Final foi de $r pontos <br><br>";
     
    if ($r == 100) 
    {
    echo "Parabéns você acertou todas as questões <br><br><br>";
    } 
    else 
    {
    echo "Você não acertou todas as questões, por favor tente outra vez <br><br><br>";
}


    
?>
<form>
<br><br>
O que você deseja fazer?
<br><br>
<input type="button" value="Jogar Novamente" onClick="history.go(-1)"><input type="button" value="Preencher os dados pessoais?" onClick="history.go(-2)"> 
<input type="button" value="Voltar para a tela de confirmar? termo de aceite" onClick="history.go(-3)"> 
</form>
</body>
</html>