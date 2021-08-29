<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa de Satisfação</title>
	<meta charset="utf-8">

</head>
<body>
<?php 
	echo "<B> Sr(a) ".$_POST["nome"]." <B> <br><br>";
    
    if (isset($_POST["musicas"])) {
    	echo "Preferências Musicais <br><br>";
    	foreach ($_POST["musicas"] as $musica) {
    		echo " - $musica <br>";
    	}

    
    if (isset($_POST["respostas"])){
		echo "<br>Obrigado por compartilhar suas musicas <br><br>";
    } else {
    	echo "<br>Você não terá suas preferências musicais  compartilhadas<br><br>";
    }
    } else {
    	echo "<br>Você não marcou nenhum gênero musical! <br><br>";
    }

    if (isset($_POST["filmes"])) {
    	    	echo "Filmes Preferidos <br><br>";

    	foreach ($_POST["filmes"] as $filmes) {
    		echo " - $filmes <br>";
    	}
    if (isset($_POST["respostas"])){
		echo "<br>Obrigado por compartilhar seus filmes <br><br>";
    } else {
    	echo "<br>Você não terá suas preferências de filmes  compartilhadas<br><br>";
    }
    } else {
    	echo "<br>Você não marcou nenhum gênero de filmes! <br><br>";
    }
?>
<form>
<br> 
<input type="button" value="Voltar" onClick="history.go(-1)"> 
</form>
</body>
</html>
