Exercicios - 22
Crie um sistema de login (index.php com formulário) básico, use uma função de criptografia do php para criptografar a senha, pode ser o md5(função propria do php).
Tenha um formulário de login que solicite um nome de usuário e uma senha. Verifique as credenciais do usuário na página login.php, o nome do usuário deve ser 
"administrador" e a senha "1234", usando o método POST em PHP. Se as credenciais estiverem corretas, exiba uma mensagem de boas vindas; caso contrário, exiba uma 
mensagem de erro e na hora de comparar não esqueça que a senha "1234" também deve ser criptografada para que o usuário consiga uma resposta positiva!

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
?>