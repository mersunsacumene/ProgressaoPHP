<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = "administrador";
    $senha = md5("1234");
if($_POST["user"] == $login && md5($_POST["password"]) == $senha){
    echo "Seja bem bindo!!!";
}else{
    echo "Usuário ou Senha invalidos!!!";
}
}
