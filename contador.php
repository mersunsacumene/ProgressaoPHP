<?php
    session_start();
    if (isset($_SESSION["visitas"])){
        $_SESSION["visitas"] ++;
    }else{
        $_SESSION["visitas"] = 0;
    }
    echo($_SESSION["visitas"] . "de Visitas.");

?>

