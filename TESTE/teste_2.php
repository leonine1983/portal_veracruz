<?php
//Criar um array de frutas
$frutas = array ('maça', 'abacaxi', 'pera', 'limão');

//exibir um item do array
echo $frutas[3];

//exibir todos os iteins de um array

for ($i=0; $i < 4 ; $i++) { 
	echo "</br>".$frutas[$i];
}

var_dump ($frutas);

//exemplo de um objeto Time exibido por var_dump

$nascimento = new DateTime();

var_dump ($nascimento);

for ($i = 0; $i <3; $i++)
echo "</br>";

$arquivo = fopen ("teste.php", "r");

var_dump ($arquivo);
?>