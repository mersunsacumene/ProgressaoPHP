Exercicios - 28
Utilizando sessões faça novas melhorias nas páginas dos exercicios de CRUD, por exemplo: ao criar um usuário novo, crie uma sessão temporária que quando
você retornar a página (usuarios.php) exiba "Usuário criado com sucesso." no topo, ao editar um usuário ele cria a sessão temporária com a mensagem
para ser exibida em (usuarios.php) "Usuário editado com sucesso.", e por fim a de deletar "Usuário deletado com sucesso."

<?php 
require "db.php";
session_start();
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
    $deleteQuery = "DELETE FROM USUARIOS WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $_SESSION['delete'] = time()+ 20;  
    header("location: ususario.php");
        exit();
?>