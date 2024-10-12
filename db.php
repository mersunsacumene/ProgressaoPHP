    <?php
    $host = 'localhost';
    $db = 'ESTUDANDO';
    $name = 'mersun';
    $pass = '123qweqwe2';

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $name, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }

    ?>

