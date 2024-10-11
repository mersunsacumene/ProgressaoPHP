<?php 
session_start();
if (isset($_SESSION['temporario']) && time() < $_SESSION['temporario']){
    echo 'Sessão ativa pain';
}else{
    session_destroy();
    echo 'Sessão não ativa filhin';
  
}

?>