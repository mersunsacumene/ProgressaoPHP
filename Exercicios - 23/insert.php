Exercicios - 23
Crie um formulário (cadastro.php) que tenha nome, idade e endereço, que envie os dados via POST para a página (insert.php), os dados são recebidos e
mandados via PDO para o banco, caso tudo der certo utilizando header redirecione o usuário novamente para a página do formulário, caso aconteça algum
erro mostre o, não esqueça da estrutura TRY/CATCH.

<?php
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

        session_start();
        $_SESSION['create'] = time() + 20;
        header("Location: cadastro.php");
        exit();
 } 
?>