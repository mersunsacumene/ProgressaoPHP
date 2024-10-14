Exercicio - 17
Utilizando while e rand:
    O código Utilizando rand sorteará e salvará um número aleatório na variável que pode ser de 1 a 10, solicite ao usuário um palpite!!!
    Armazene este palpite em uma variável e enquanto o usuário não acertar, mande uma mensagem para ele avisando que ele errou o palpite 
    e peça outro palpite, quando ele acertar o game acaba.

<?php
echo"Ola, adivinhe o numero sorteado de 0 a 10!!!\n";
$tentativa = null;
$numbers = rand(0,10);

    while($tentativa != $numbers){;
        $tentativa = fgets(STDIN);
        if($tentativa == $numbers){
        echo"Parabens!!!\n";
    }else{
        echo "Palpite errado, mais uma chance!!!\n";
    }
};
?>
