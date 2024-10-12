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