Exercicios - 27
Crie uma sessão que seja temporária e uma outra página que imprima se a sessão ainda existe.

<?php
    session_start();
    $_SESSION['temporario'] = time() + 20;  
?>