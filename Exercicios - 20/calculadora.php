Exercicio - 20
Crie uma calculadora simples que permita aos usuários realizar operações básicas como (adição, subtração, multiplicação e divisão).
Utilize um formulário HTML(index.php) com campos de entrada para os númerose um menu suspenso para a seleção da operação. Os resultados
devem ser exibidos na página calculadora.php após o envio do formulário usando o método POST e processados em PHP.

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numberOne = $_POST["numberOne"];
        $numberTwo = $_POST["numberTwo"];
        $operation = $_POST["operation"];
        $result = 0;

    switch($operation){
        case "+": 
            $result = $numberOne + $numberTwo;
        break;
        case "-": 
            $result = $numberOne - $numberTwo;
        break;
        case "/": 
            if($numberTwo != 0){
            $result = $numberOne / $numberTwo;
            }else{
                $result = "infinito";
            }
        break;
        case "*": 
            $result = $numberOne * $numberTwo;
        break;

        default: 
        $result = "Operador invalido";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
     <h1>Calculadora</h1>
     <p>O Resultado é: <?php echo $result; ?></p>
    <a href="index.php">Voltar ao Inicio</a>
 </body>
 </html>