Exercicios - 30
Agora é sua vez e ultima questão, crie um sistema de login!
Para isso você terá que ter uma nova tabela no banco chamada usuários, que tenham e-mail, senha e tipo(padrão 0), você deve possuir uma página de criação 
do usuário feita junto da conexão PDO, e a de login, lembre-se agora o login deve bater com algum e-mail e senha do banco. Dependendo do tipo do usuário
envie ele para uma página dizendo "ola ADM!" se for 1, agora se for 0 ele irá para a página de "olá usuário!", lembre-se de colocar criptografia na senha(tanto 
na criação como no login), lembre-se de usar sessions para bloquear as telas de adms e users para eles não conseguirem entrar se não estiverem logados.

<?php
session_start();
require "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $query = "SELECT * FROM Cadastro WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result && password_verify($password, $result["senha"])){
        $_SESSION["id"] = $result["id"];
        header("Location: home.php");
        exit();
    }else{
        echo"Email ou Senha incorreta.";
}
}
?>

<form method="POST">
    <label for="">Email</label>
    <input type="email" name="email" required placeholder="Digite seu email:">
    <label for="">Senha</label>
    <input type="password" name="senha" required placeholder="Digite sua senha:">
    <button type="submit">Enviar</button>
</form>