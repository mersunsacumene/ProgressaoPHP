Exercicios - 28
Utilizando sessões faça novas melhorias nas páginas dos exercicios de CRUD, por exemplo: ao criar um usuário novo, crie uma sessão temporária que quando
você retornar a página (usuarios.php) exiba "Usuário criado com sucesso." no topo, ao editar um usuário ele cria a sessão temporária com a mensagem
para ser exibida em (usuarios.php) "Usuário editado com sucesso.", e por fim a de deletar "Usuário deletado com sucesso."

<?php
session_start();
require "db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $idade = $_POST['age'];
        $endereco = $_POST['address'];

        $sql = "INSERT INTO USUARIOS(nome, email, idade, endereco) VALUES (:nome, :email, :idade, :endereco)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':endereco', $endereco);

        $stmt->execute();
        $_SESSION['create']=time() + 20;

        header("Location: usuario.php");
        exit();
 }

?>