Exercicios - 22
Crie um sistema de login (index.php com formulário) básico, use uma função de criptografia do php para criptografar a senha, pode ser o md5(função propria do php).
Tenha um formulário de login que solicite um nome de usuário e uma senha. Verifique as credenciais do usuário na página login.php, o nome do usuário deve ser 
"administrador" e a senha "1234", usando o método POST em PHP. Se as credenciais estiverem corretas, exiba uma mensagem de boas vindas; caso contrário, exiba uma 
mensagem de erro e na hora de comparar não esqueça que a senha "1234" também deve ser criptografada para que o usuário consiga uma resposta positiva!

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sejam Bem vindo!!!</h1>
   <form action="login.php" method = "POST">
    <label for="name">Nome do  Usuário</label>
    <input type="text" id="name" name="user" requeired><br>
    <label for="senha">Senha do Usuário</label>
    <input type="text" id="senha" name="password" requeired><br>
    <button type="submit">Enviar</button>
   </form>
</body>
</html>