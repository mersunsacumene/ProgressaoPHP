<?php
    $host = 'localhost';
    $db   = 'ESTUDANDO';
    $user = 'mersun';
    $pass = '123qweqwe2';

    session_start();
    $create = null;
    $edit = null;
    $delete = null;

    if (isset($_SESSION['create']) && time() < $_SESSION['create']){
        $create = true;
    }else{
        unset($_SESSION['create']);
        $create = false;
    }  if (isset($_SESSION['edit']) && time() < $_SESSION['edit']){
        $edit = true;
    }else{
        unset($_SESSION['edit']);
        $edit = false;
    }  if (isset($_SESSION['delete']) && time() < $_SESSION['delete']){
        $delete = true;
    }else{
        unset($_SESSION['delete']);
        $delete = false;
    }
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
            $sql = "SELECT * FROM USUARIOS";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            
    $resultQuery = $stmt->fetchAll(PDO::FETCH_ASSOC);

        }
    } catch (PDOException $e) {
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
    <?php
    if($create) echo "Cadastrado com sucesso.";
    if($edit) echo "Edição feita com sucesso.";
    if($delete) echo "Usuario deletado com sucesso.";
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Endereço</th>
                <th>Ações</th>
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
                <td> 
                <a href="/usuarioEdit.php?id=<?php echo $item['id'];?>">Editar</a>                    
                <a href="/usuarioDelete.php?id=<?php echo $item['id'];?>">Deletar</a>
            </td>
            </tr>
            <?php endforeach;?>
        </tbody>

    </table>
    
</body>
</html>
