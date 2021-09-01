<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
	<meta charset="utf-8">

</head>
<body>



<B><H1>Inicialmente digite as informações abaixo!</H1></B><br>

<form action="dados.php" method="post">

<B> Digite o seu nome</B> <input type="text" name="nome" required=""> <br><br>
<B> Digite sua idade </B> <input type="text" name="idade" required=""> <br><br>


<input type="submit" name="Próximo ">
<input type="reset" value="Apagar Dados">
<input type="button" value="Voltar" onclick="history.go(-1)">

<br><br>
</form>


</body>
</html>
