<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">

</head>
<body>
	<B><H1>SEJA BEM VINDO</H1></B><br><br>
<form action="atividades.php" method="post">

<B> Digite o seu nome</B> <input type="text" name="nome" required=""> <br><br>
<B> Digite o primeiro número inteiro</B> <input type="text" name="numero1" required=""> <br><br>
<B> Digite o segundo número inteiro</B> <input type="text" name="numero2" required=""> <br><br><br>
<B>Qual a operação matemática você deseja fazer com os números digitados?</B><br> 
<input type="radio" name="calculadora" value="soma" required=""> Soma  
<input type="radio" name="calculadora" value="subtracao"> Subtração  
<input type="radio" name="calculadora" value="divisao"> Divisão  
<input type="radio" name="calculadora" value="multiplicacao"> Multiplicação <br><br>
<input type="submit" name="Enviar ">
<input type="reset" value="Apagar Dados">
<br><br>
</form>
</body>
</html>
