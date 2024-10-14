Exercicios - 28
Utilizando sessões faça novas melhorias nas páginas dos exercicios de CRUD, por exemplo: ao criar um usuário novo, crie uma sessão temporária que quando
você retornar a página (usuarios.php) exiba "Usuário criado com sucesso." no topo, ao editar um usuário ele cria a sessão temporária com a mensagem
para ser exibida em (usuarios.php) "Usuário editado com sucesso.", e por fim a de deletar "Usuário deletado com sucesso."

<?php 
session_start();
require "db.php";

$id = null;
    if (isset($_GET["id"])) {
        $id = intval($_GET["id"]);
    }else{
        header("location: usuario.php");
    }

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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
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