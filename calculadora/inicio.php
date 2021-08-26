<!DOCTYPE html>
<html>
<head>
	<title>Exer 2 Prova</title>
	<meta charset="utf-8">

</head>
<body>
	<B><H1>Operações Matemáticas</H1></B><br><br>

<form action="calcular.php" method="post">

<B> Digite o primeiro número</B> <input type="text" name="n1" required=""> <br><br>
<B> Digite o segundo número </B> <input type="text" name="n2" required=""> <br><br>

<B>Marque as operações que você deseja fazer com os números</B><br><br>
<input type="checkbox" name="oper[]" value="soma"> soma
<input type="checkbox" name="oper[]" value="subtração"> subtração
<input type="checkbox" name="oper[]" value="multiplicação"> multiplicação
<input type="checkbox" name="oper[]" value="divisão"> divisão
<br><br><br>
<input type="submit" name="Enviar ">
<input type="reset" value="Apagar Dados">
<br><br>
</form>
</body>
</html>
