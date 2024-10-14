Exercicio - 9
Utilizando da função slice e da lista de frutas do exercicio "8", divida a lista em 2 (ou seja uma variável contendo a metade
da lista e a outra variável contendo o restante), sendo a primeira da posição 0 a 2 e a segunda do 3 ao 5.

<?php
require "listaFrutas.php";

$priMetade = array_slice($listaFrutas, 0, 3);
$segMetade = array_slice($listaFrutas, 3, 5);
print_r($priMetade);
print_r($segMetade);
?>