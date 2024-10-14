Exercicio - 8
Crie uma lista com 5 frutas aleatórias, insira uma fruta "mamão" na posição 2 da lista!

<?php
$listaFrutas = ["Abacate", "Jabolao", "Uva", "Ameixa", "Abacaxi"];
array_splice($listaFrutas, 1 , 0, "Mamao");

print_r($listaFrutas);
?>