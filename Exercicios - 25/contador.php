Exercicios - 25
Em uma página inicial vamos criar um contador de visitas, inicie uma session, depois se jã existir uma session chamada visitas,
ele somará +1 ao valor. Caso nao exista ele irá criar a sessão. Faça isso para 2 páginas e fique alternando entre elas.

<?php
    session_start();
    if (isset($_SESSION["visitas"])){
        $_SESSION["visitas"] ++;
    }else{
        $_SESSION["visitas"] = 0;
    }
    echo($_SESSION["visitas"] . "de Visitas.");

?>