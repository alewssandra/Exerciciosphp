<!DOCTYPE html>
<html>
<head>
	<title>Projeto 3</title>
	<meta charset="utf-8">

</head>
<body>
	<B><H1>Pesquisa de Satisfação</H1></B><br><br>
<form action="pesquisa.php" method="post">

<B> Digite o seu nome</B> <input type="text" name="nome" required=""> <br><br>
<B> Digite sua idade </B> <input type="text" name="idade" required=""> <br><br>
<B>Escolha o(s) gênero(s) musical(is) de sua preferência:</B><br> <br>
<input type="checkbox" name="musicas[]" value="Sertanja"> Sertaneja
<input type="checkbox" name="musicas[]" value="Rock"> Rock 
<input type="checkbox" name="musicas[]" value="Pagode"> Pagode 
<input type="checkbox" name="musicas[]" 
value="Classica"> Classica
<input type="checkbox" name="musicas[]" value="Funk"> Funk
<input type="checkbox" name="musicas[]" value="Tecno"> Tecno <br><br>  <br>

<B>Escolha o(s) gênero(s) de filme(s) de sua preferência:</B><br> <br>
<input type="checkbox" name="filmes[]" value="Terror"> Terror
<input type="checkbox" name="filmes[]" value="Romance"> Romance 
<input type="checkbox" name="filmes[]" value="Aventura"> Aventura 
<input type="checkbox" name="filmes[]" 
value="Comédia"> Comédia
<input type="checkbox" name="musica[]" value="Drama"> Drama
<input type="checkbox" name="musica[]" value="Infantil"> Infantil <br><br> <br>

<input type="checkbox" name="respostas" checked=""> <B> Você permite que suas respostas sejam compartilhadas com outros usuários? </B><br><br>
<input type="submit" name="Enviar ">
<input type="reset" value="Apagar Dados">
<br><br>
</form>
</body>
</html>
