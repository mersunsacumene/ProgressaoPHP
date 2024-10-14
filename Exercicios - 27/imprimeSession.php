Exercicios - 27
Crie uma sessão que seja temporária e uma outra página que imprima se a sessão ainda existe.

<?php 
    session_start();
    if (isset($_SESSION['temporario']) && time() < $_SESSION['temporario']){
        echo 'Sessão ativa pain';
    }else{
        session_destroy();
        echo 'Sessão não ativa filhin';
    }
?>