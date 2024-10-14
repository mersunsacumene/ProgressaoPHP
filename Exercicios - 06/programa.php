Exercicio - 6
Agora é a sua vez, monte um programa que pegue o nome, idade e a altura do usuáriuo e depois imprima de 2 formas diferentes,
uma concatenando e outra no formato template string(dentro de aspas dupla usando variaveis).

<?php
echo "Digite seu nome: ";
$nome = fgets(STDIN);
echo "Digite sua idade: ";
$idade = fgets(STDIN);
echo "Digite sua altura: ";
$altura = fgets(STDIN);

echo "Sua Altura é: " . $altura ." Sua idade é: " . $idade . " Prazer: " . $nome;
echo "Sua Altura é:  $altura  Sua idade é:  $idade  Prazer:  $nome";
?>