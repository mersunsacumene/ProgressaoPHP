Exercicio - 3
Um usuário esta precisando concatenar alguns resultados, como ele deve fazer essa operação?
Segue as variaveis, o que ele deve fazer para criar a variável $nomeCompleto?

<?php
echo "Digite seu nome: ";
$nome = fgets(STDIN);
echo "Digite seu sobrenome: ";
$sobrenome = fgets(STDIN);
$nomeCompleto = $nome." ".$sobrenome;

echo ($nomeCompleto);
?>