<?
require "db.php";

try{
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
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>
