Exercicio - 11
Utilizando FOR imprima números primeiro de 0 a 10 e depois 10 a 0, depois faça o mesmo utilizando while.

<?php
for($n=0; $n <= 10; $n++){echo($n);}
for($n=10; $n >= 0; $n--){echo($n);}

$n=0;
while ($n<=10){
    echo($n);
    $n++;
}

$n=10;
while ($n>=0){
    echo($n);
    $n--;
}
?>