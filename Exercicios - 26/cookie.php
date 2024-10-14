Exercicios - 26
Crie um cookie a partir da página inicial que tenha uma mensagem temporária e que após 20seg deixe de existir, imprima somente em outra página a 
mensagem temporária e caso ela deixe de existir escreva que não tem mensagem temporária.

<?php
    $name = "mensagem Temporaria";
    $valor = "Essa é uma mensagem temporaria."; 
    setcookie($name, $valor, time() + 20, "/");

?>
