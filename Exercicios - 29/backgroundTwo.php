Exercicios - 29
Crie uma página que você possa escolher a cor de fundo da página 2, deixe um link para que você possa acessar a página 2, a cor fica salva em um cookie
que irá expirar.

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {background-color: <?php echo isset($_COOKIE['cor']) ? $_COOKIE['cor'] : "#fff"; ?>;}
        </style>
    </head>
    <body>
        <a href="background.php">Escolher outra Cor</a>
    </body>
</html>