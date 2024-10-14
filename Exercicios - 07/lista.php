Exercicio - 7
Faça um programa que peça ao usuário 3 nomes e insira nas listas!!!
Após, exclua o ultimo.

<?php
$nomes = [];

for ($i = 1; $i <= 3; $i++) {
    echo "Digite o nome $i: ";
    $nome = trim(fgets(STDIN));
    $nomes[] = $nome;
}
echo "Nomes inseridos: ";
print_r($nomes);
array_pop($nomes);

echo "Lista após remover o último nome: ";
print_r($nomes);
?>