Exercicios - 29
Crie uma página que você possa escolher a cor de fundo da página 2, deixe um link para que você possa acessar a página 2, a cor fica salva em um cookie
que irá expirar.

<?php
    if ( isset($_POST['cor'])){
        setcookie('cor', $_POST['cor'], time() + 20,'/');
        header('Location: backgroundTwo.php');
        exit();
    };

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>        
        <form method="POST">
        <input type="color" name="cor" required>
        <button type="submit">Mude</button>
        </form>    
</body>
</html>