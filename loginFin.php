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