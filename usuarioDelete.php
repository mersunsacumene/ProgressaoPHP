<?php 
session_start();
$id = null;
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
}else{
    header("location: usuario.php");
}

$host = 'localhost';
$db = 'ESTUDANDO'; 
$user = 'mersun'; 
$pass = '123qweqwe2';   
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM USUARIOS WHERE id = :id";
    $stmt = $pdo->prepare($query);  
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();  
    $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);
    if(count($usuarios) == 0){ 
        header("location:  usuario.php");
        exit();
    }
    $deleteQuery = "DELETE FROM USUARIOS WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $_SESSION['delete'] = time()+ 20;  
    header("location: ususario.php");
        exit();
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();

}


?>