Exercicio - 10
Agora é sua vez, crie uma aplicação que peça o nome do usuário e salve em uma variável o valor,
depois peça o nome da disciplina e salve em outra variável, depois peça 4 notas e salve em uma lista!
Faça média desse usuário e faça as seguintes coisas após isso: um MAP que exiba a frase a 
(primeira, segunda, terceira e a quarta nota do usuário "X" foi "Y")(a primeira nota do Ygor foi 5,7),
depois usando a função filter, crie um filtro que só exiba as notas menores que 5 e imprima um texto, 
" essas foram as notas que estavam a baixo de 5: "valores" ".

<?php
$notas = [];
echo "Digite seu nome: ";
$nome = fgets(STDIN);
echo "Digite sua diciplina: ";
$diciplina = fgets(STDIN);

for($i = 1; $i <= 4; $i++) {
       echo "Digite a sua nota $i: ";
        $nota = trim(fgets(STDIN));
        $notas[] = $nota;
}
$frases = array_map(function($n, $i) use ($nome){
    return"A " . ($i+1) . " nota do " . $nome ."foi $n";
}, $notas, array_keys($notas));
print_r($frases);


$notasMenor5 = array_filter($notas, function($n){
    return $n < 5;
});
echo"Essas foram as notas menores que 5: ";
print_r($notasMenor5);
?>