Exercicio - 20
Crie uma calculadora simples que permita aos usuários realizar operações básicas como (adição, subtração, multiplicação e divisão).
Utilize um formulário HTML(index.php) com campos de entrada para os númerose um menu suspenso para a seleção da operação. Os resultados
devem ser exibidos na página calculadora.php após o envio do formulário usando o método POST e processados em PHP.

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculadora de Pobre</h1>
    <form action="calculadora.php" method="POST">
        <input type="number" name="numberOne" required placeholder="Digite o primeiro Numero"><br>
        <input type="number" name="numberTwo" required placeholder="Digite o segundo Numero"><br>
        <select name="operation" id="" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>

        <button type="submit">Enviar</button>

    </form>
</body>
</html> 
