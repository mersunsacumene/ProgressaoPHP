Exercicios - 30
Agora é sua vez e ultima questão, crie um sistema de login!
Para isso você terá que ter uma nova tabela no banco chamada usuários, que tenham e-mail, senha e tipo(padrão 0), você deve possuir uma página de criação 
do usuário feita junto da conexão PDO, e a de login, lembre-se agora o login deve bater com algum e-mail e senha do banco. Dependendo do tipo do usuário
envie ele para uma página dizendo "ola ADM!" se for 1, agora se for 0 ele irá para a página de "olá usuário!", lembre-se de colocar criptografia na senha(tanto 
na criação como no login), lembre-se de usar sessions para bloquear as telas de adms e users para eles não conseguirem entrar se não estiverem logados.

<?php
session_start();
require "db.php";
    if(!isset($_SESSION["id"])){
        header("Location: loginFin.php");
    }
    $id = intval($_SESSION["id"]);
    $queryConsult = "SELECT nome, email FROM Cadastro WHERE id = :id";
    $stmt = $pdo->prepare($queryConsult);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$user){
        header("Location: loginFin.php");
        exit();
    }
    if($user["tipo"] == 0){
        $tipo = "usuario";
    }else{
        $tipo = "admin";
    }
    echo "Ola, ". $user['nome']."você é um ". $tipo;
?>

<form method="POST">
    <label for="">Email</label>
    <input type="email" name="email" required placeholder="Digite seu email:">
    <label for="">Senha</label>
    <input type="password" name="senha" required placeholder="Digite sua senha:">
    <button type="submit">Enviar</button>
</form>