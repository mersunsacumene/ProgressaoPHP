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
    $usuario = $usuarios[0];
    
    if($_REQUEST["METHOD"] == "POST"){
     $editQuery = "UPDADE USUARIOS SET nome = :nome, email = :email, idade = :idade, endereco = :endereco WHERE id = :id";
     $stmtEdit = $pdo->prepare($editQuery);
     $stmtEdit->bindParam(":id", $id, PDO::PARAM_INT);  
     $stmtEdit->bindParam(":nome", $_POST['name']);   
     $stmtEdit->bindParam(":email", $_POST['email']);
     $stmtEdit->bindParam(":idade", $_POST['age'], PDO::PARAM_INT);
     $stmtEdit->bindParam(":endereco", $_POST['address']);
     $stmtEdit->execute();
     $_SESSION ['edit'] = time() + 20;
        header("location: usuario.php");
        exit();
    }

} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($usuario);
    ?>
        <h1>Cadastro no Banco do Mersun</h>
    <form action="usuarioEdit.php" method="POST">
        <label for="name">Nome</label>
        <input type="text" id="nome" name="name" value="<?php echo($usuario['nome']) ;?>" required><br><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo($usuario['email']) ;?>" required><br><br>

        <label for="age">Idade</label>
        <input type="text" id="idade" name="age" value="<?php echo($usuario['idade']) ;?>" required><br><br>

        <label for="address">Endereço</label>
        <input type="text" id="endereço" name="address" value="<?php echo($usuario['endereco']) ;?>" required><br><br>

        <button type="submit">Editar</button>
    </form>
    
    
</body>
</html>