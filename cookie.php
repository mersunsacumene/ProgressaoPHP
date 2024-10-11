<?php
$name = "mensagem Temporaria";
$valor = "Essa é uma mensagem temporaria."; 
setcookie($name, $valor, time()+ 2000, "/");

?>
