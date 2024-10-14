Exercicios - 26
Crie um cookie a partir da página inicial que tenha uma mensagem temporária e que após 20seg deixe de existir, imprima somente em outra página a 
mensagem temporária e caso ela deixe de existir escreva que não tem mensagem temporária.

<?php
    if(isset($_COOKIE['mensagem Temporaria'])){
        echo'valor:'.$_COOKIE['mensagem Temporaria'];
    }else{
        echo 'Sem mensagem Temporaria';
    }

?>