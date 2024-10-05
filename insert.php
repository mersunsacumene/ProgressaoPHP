<?php
// Configurações do banco de dados
$host = 'localhost';
$db = 'ESTUDANDO'; // Nome do banco de dados
$user = 'mersun'; // Nome do usuário do banco de dados
$pass = '123qweqwe2';   // Senha do usuário

try {
    // Criação da conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se os dados foram enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $idade = $_POST['age'];
        $endereco = $_POST['address'];

        // Prepara a instrução SQL
        $sql = "INSERT INTO USUARIOS(nome, email, idade, endereco) VALUES (:nome, :email, :idade, :endereco)";
        $stmt = $pdo->prepare($sql);
        
        // Vincula os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':endereco', $endereco);
        
        // Executa a consulta
        $stmt->execute();

        // Redireciona de volta para o formulário
        header("Location: cadastro.php");
        exit();
    }
} catch (PDOException $e) {
    // Exibe o erro se ocorrer
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>
