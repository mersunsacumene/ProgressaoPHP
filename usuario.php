<?php
    $host = 'localhost';
    $db   = 'ESTUDANDO';
    $user = 'mersun';
    $pass = '123qweqwe2';

    try {
        // Criação da conexão PDO
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Verifica se os dados foram enviados via GET
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
            $sql = "SELECT * FROM USUARIOS";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            
    $resultQuery = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }
    } catch (PDOException $e) {
        // Exibe o erro se ocorrer
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
    $pdo = null;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($resultQuery as $item):?>
            <tr>
                <td><?php echo($item['id']);?></td>
                <td><?php echo($item['nome']);?></td>
                <td><?php echo($item['email']);?></td>
                <td><?php echo($item['idade']);?></td>
                <td><?php echo($item['endereco']);?></td>
            </tr>
            <?php endforeach;?>
        </tbody>

    </table>
    
</body>
</html>
