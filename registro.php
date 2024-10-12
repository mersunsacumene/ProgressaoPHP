<?php
session_start();
require "db.php";
if($_SERVER ['REQUEST_METHOD'] == "POST"){
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $tipo = intval($_POST["tipo"]);

    $query = "INSERT INTO Cadastro (email, senham, tipo) VALUES (:email, :senha, :tipo)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $password);
    $stmt->bindParam(":tipo", $tipo);
    if($stmt->execute()){
        echo"Usuario criado com sucesso.";
    }else{
        echo "Erro ao criar o Usuario.";
    }
}

    
?>
<form method="POST">
    <label for="">Email</label>
    <input type="email" name="email" required placeholder="Digite seu email:">
    <label for="">Senha</label>
    <input type="password" name="senha" required placeholder="Digite sua senha:">
    <select name="tipo">
        <option value= 0 >Usuario</option>
        <option value= 1 >Administrador</option>
    </select>
    <button type="submit">Enviar</button>
</form>