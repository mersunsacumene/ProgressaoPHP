<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro no Banco do Mersun</h1>
    <form action="insert.php" method="POST">
        <label for="name">Nome</label>
        <input type="text" id="nome" name="name" required><br><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="age">Idade</label>
        <input type="text" id="idade" name="age" required><br><br>

        <label for="address">Endereço</label>
        <input type="text" id="endereço" name="address" required><br><br>

        <button type="submit">CADASTRAR</button>
    </form>
    
</body>
</html>