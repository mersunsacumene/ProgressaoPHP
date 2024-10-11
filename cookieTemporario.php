<?php
if(isset($_COOKIE['mensagem Temporaria'])){
    echo'valor:'.$_COOKIE['mensagem Temporaria'];
}else{
    echo 'Sem mensagem Temporaria';
}

?>