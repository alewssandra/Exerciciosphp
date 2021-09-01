<!DOCTYPE html>
<html>
<head>
	<title>Jogo</title>
	<meta charset="utf-8">

</head>
<body>



<B><H1> Olá <?php echo $_POST["nome"] ?> </H1></B><br>

<form action="processamento.php" method="post">
<input type="hidden" name="nome" value="<?php echo $_POST['nome']?>">
<B> Reponda as perguntas abaixo:</B><br><br>
<B> 1 - No caminho de casa até o mercado, uma senhora conta 10 árvores a sua direita. Após as compras, ela volta para casa e conta 10 árvores a sua esquerda. Quantas árvores ela viu no total nesse dia?</B><br>
<input type="radio" name="p1" value="10" required="" > 10
<input type="radio" name="p1" value="20"> 20
<input type="radio" name="p1" value="15"> 15
<input type="radio" name="p1" value="5"> 5
<input type="radio" name="p1" value="30"> 30 <br><br>

<B> 2 - Uma aranha está subindo um muro de 10 metros. Durante o dia, ela consegue subir dois metros, porém todas as noites, ela desce um metro. Em quanto tempo ela conseguirá chegar ao topo?</B><br>
<input type="radio" name="p2" value="6" required="" > 6
<input type="radio" name="p2" value="7"> 7
<input type="radio" name="p2" value="8"> 8
<input type="radio" name="p2" value="9"> 9
<input type="radio" name="p2" value="10"> 10 <br><br>

<B> 3 - Se, durante uma corrida de carros, você deixa o segundo colocado pra trás, qual é a sua colocação após a ultrapassagem??</B><br>
<input type="radio" name="p3" value="primeiro" required="" > primeiro
<input type="radio" name="p3" value="segundo"> segundo
<input type="radio" name="p3" value="terceiro"> terceiro
<input type="radio" name="p3" value="quarto"> quarto
<input type="radio" name="p3" value="quinto"> quinto <br><br>

<B> 4 - A mãe de Maria tem cinco filhas: Fafá, Fefê, Fifi, Fofó e? Qual é o nome da quinta filha??</B><br>
<input type="radio" name="p4" value="Fufú" required="" > Fufú
<input type="radio" name="p4" value="Marta"> Marta
<input type="radio" name="p4" value="Marcia"> Marcia
<input type="radio" name="p4" value="Maria"> Maria
<input type="radio" name="p4" value="Melaine"> Melaine <br><br>

<B> 5 - Se uma borboleta vive cinco dias e a cada dia ela voa quatro metros, quantos metros ela terá percorrido em uma semana?</B><br>
<input type="radio" name="p5" value="10" required="" > 10
<input type="radio" name="p5" value="12"> 12
<input type="radio" name="p5" value="14"> 14
<input type="radio" name="p5" value="18"> 18
<input type="radio" name="p5" value="20"> 20 <br><br>

<B> 6 - Em uma sala quadrada, temos um gato em cada canto. Cada gato vê outros três gatos. Quantos gatos há no total dentro da sala?</B><br>
<input type="radio" name="p6" value="2" required="" > 2
<input type="radio" name="p6" value="4"> 4
<input type="radio" name="p6" value="6"> 6
<input type="radio" name="p6" value="8"> 8
<input type="radio" name="p6" value="12"> 12 <br><br>

<B> 7 - Uma família resolveu passear de carro. Nele entraram 1 avô, 2 pais, 2 filhos e 1 neto. Qual o número mínimo de pessoas dentro do veículo, afinal?</B><br>
<input type="radio" name="p7" value="6" required="" > 6
<input type="radio" name="p7" value="4"> 4
<input type="radio" name="p7" value="2"> 2
<input type="radio" name="p7" value="5"> 5
<input type="radio" name="p7" value="3"> 3 <br><br>

<B> 8 - Quanto é a metade do dobro de uma dúzia?</B><br>
<input type="radio" name="p8" value="3" required="" > 3
<input type="radio" name="p8" value="6"> 6
<input type="radio" name="p8" value="9"> 9
<input type="radio" name="p8" value="12"> 12
<input type="radio" name="p8" value="14"> 14 <br><br>

<B> 9 - Qual é o sucessor do dobro do antecessor do sucessor do triplo de 2?</B><br>
<input type="radio" name="p9" value="12" required="" > 12
<input type="radio" name="p9" value="7"> 7
<input type="radio" name="p9" value="16"> 16
<input type="radio" name="p9" value="15"> 15
<input type="radio" name="p9" value="13"> 13 <br><br>

<B> 10 - Um casal tem seis filhos homens, cada filho tem uma irmã. Quantas pessoas há nessa família no total?</B><br>
<input type="radio" name="p10" value="9" required="" > 9
<input type="radio" name="p10" value="15"> 15
<input type="radio" name="p10" value="17"> 17
<input type="radio" name="p10" value="14"> 14
<input type="radio" name="p10" value="19"> 19

<br><br>



<input type="submit" name="Enviar">
<input type="reset" value="Apagar Dados">
<input type="button" value="Voltar" onclick="history.go(-1)">

<br><br>
</form>


</body>
</html>
