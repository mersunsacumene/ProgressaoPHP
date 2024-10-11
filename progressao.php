
<?php
//Exercicio - 1
// intval("10");
// strval(10);
// floatval(10);
// doubleval(10);
// boolval(1);

// echo (strval(2));


//Exercicio - 2
// $texto = "testando";
// $Texto = "mudei";
// $TexTo = "alterei novamente";
// $teXto = "ultima alteração";

// echo ($texto);
//testando


////Exercicio - 3
// echo "Digite seu nome: ";
// $nome = fgets(STDIN);
// echo "Digite seu sobrenome: ";
// $sobrenome = fgets(STDIN);
// $nomeCompleto = $nome." ".$sobrenome;
// echo ($nomeCompleto);


//Exercicio - 4
// $testinho = 0;
// $teste = $testinho + "teste";
// echo ($teste);
//Valor = error, Pois nao soma numero com String


//Exercicio - 5
// $exemplo="testando";
// $exemplo2="trabalho";
// $exemplo3=$exemplo[0].$exemplo2[1];
// echo($exemplo3);
// tr, pois a variavel concatenou o primeiro 
//elemento da lista testando [0] com o segundo 
//elemento da lista trabalho [1];


//Exercicio - 6
// echo "Digite seu nome: ";
// $nome = fgets(STDIN);
// echo "Digite sua idade: ";
// $idade = fgets(STDIN);
// echo "Digite sua altura: ";
// $altura = fgets(STDIN);

// echo "Sua Altura é: " . $altura ." Sua idade é: " . $idade . " Prazer: " . $nome;
// echo "Sua Altura é:  $altura  Sua idade é:  $idade  Prazer:  $nome";


//Exercicio - 7
// $nomes = [];

// for ($i = 1; $i <= 3; $i++) {
//     echo "Digite o nome $i: ";
//     $nome = trim(fgets(STDIN));
//     $nomes[] = $nome;
// }
// echo "Nomes inseridos: ";
// print_r($nomes);
// array_pop($nomes);

// echo "Lista após remover o último nome: ";
// print_r($nomes);


//Exercicio - 8
// $listaFrutas = ["Abacate", "Jabolao", "Uva", "Ameixa", "Abacaxi"];
// array_splice($listaFrutas, 1 , 0, "Mamao");
// print_r($listaFrutas);


//Exercicio - 9
// $priMetade = array_slice($listaFrutas, 0, 3);
// $segMetade = array_slice($listaFrutas, 3, 5);
// print_r($priMetade);
// print_r($segMetade);


//Exercicio - 10
// $notas = [];
// echo "Digite seu nome: ";
// $nome = fgets(STDIN);
// echo "Digite sua diciplina: ";
// $diciplina = fgets(STDIN);

// for($i = 1; $i <= 4; $i++) {
//        echo "Digite a sua nota $i: ";
//         $nota = trim(fgets(STDIN));
//         $notas[] = $nota;
// }
// $frases = array_map(function($n, $i) use ($nome){
//     return"A " . ($i+1) . " nota do " . $nome ."foi $n";
// }, $notas, array_keys($notas));
// print_r($frases);


// $notasMenor5 = array_filter($notas, function($n){
//     return $n < 5;
// });
// echo"Essas foram as notas menores que 5: ";
// print_r($notasMenor5);


//Exercicio - 11
// for($n=0; $n <= 10; $n++){
//    echo($n);
// }
// for($n=10; $n >= 0; $n--){
//     echo($n);
// }
// $n=0;
// while ($n<=10){
//     echo($n);
//  $n++;
// }
// $n=10;
// while ($n>=0){
//     echo($n);
//  $n--;
// }


//Exercicio - 12
// $clientes = ["Emerson", "Joao", "Pedro", "Nicolas", "Thayna"];
// foreach($clientes as $cliente){
//     echo "Bem vindo $cliente\n";
// };


//Exercicio - 13
// do{
//     echo " 0->Sair \n 1->Hamburguer \n 2->Batata Frita \n 3->Suco Diet \n";
//     echo "De qual opção do cardápio você deseja? ";
// $opcao = fgets(STDIN);
//     switch($opcao){
//         case 0 : 
//             $item = null;
//             echo "Obrigado, Volte Sempre!!!";
//             break; 

//         case 1 : 
//         $item = "Hamburguer";
//         break;

//         case 2 :
//         $item = "Batata Frita";    
//         break;
        
//         case 3 : 
//         $item = "Suco Diet";
//         break;
            
//             default :
//             $item = null;
//             echo "Você escolheu opção errada!!!\n";    
//             break;
//     }
    
//     if($item !== null){
//         echo "Adquirindo $item \n Algo a mais? \n";
//     }
// } while($opcao != 0);


//Exercicio - 14
// $dicionario = [
//     "12312354123"=>"Banana","12312354122"=>"Arroz","12312354121"=>"Mexirica","12312354124"=>"Feijão","12312354125"=>"Suco","12312354126"=>"Refrigerante"
// ];


//Exercicio - 15
// $listaDicionario = [
// ["nome"=>"Banana", "Preco"=>32.99,"Quantidade"=>15],["nome"=>"Banana", "Preco"=>32.99,"Quantidade"=>15],["nome"=>"Banana", "Preco"=>32.99,"Quantidade"=>15],
// ["nome"=>"Banana", "Preco"=>32.99,"Quantidade"=>15],["nome"=>"Banana", "Preco"=>32.99,"Quantidade"=>15],["nome"=>"Banana", "Preco"=>32.99,"Quantidade"=>15]
// ];
// print_r($listaDicionario);


//Exercicio - 16 (Lembrando que no inuciado da questão é Calor, nao tem esse nome na lista. Mas associei!!!)
// $listaClientes = [
// ["nome"=>"Ana", "idade"=>25,"Endereço"=>"Rua A, 123"],
// ["nome"=>"Carlos", "idade"=>30,"Endereço"=>"Avenida B, 456"],
// ["nome"=>"Mariana", "idade"=>22,"Endereço"=>"Travessa C, 789"]
// ];
// for($i=0; $i<count($listaClientes); $i++){
//     if($listaClientes [$i]["nome"]=== "Carlos"){
//         print_r($listaClientes [$i]);
//     };
// };

//Exercicio - 17
// echo"Ola, adivinhe o numero sorteado de 0 a 10!!!\n";
// $tentativa = null;
// $numbers = rand(0,10);

//     while($tentativa != $numbers){;
//         $tentativa = fgets(STDIN);
//         if($tentativa == $numbers){
//         echo"Parabens!!!\n";
//     }else{
//         echo "Palpite errado, mais uma chance!!!\n";
//     }
// };


//Exercicio - 18
// for($n=0; $n<=200; $n++){
//     if($n %2 == 0){
//         echo("$n \n");
//     }
// }


//Exercicio - 19
// $estoque = [
//     ["Nome"=>"Camiseta", "Quantidade"=>50, "Preco"=>25.99],
//     ["Nome"=>"Calça Jeans", "Quantidade"=>30, "Preco"=>59.99],
//     ["Nome"=>"Tênis", "Quantidade"=>20, "Preco"=>75.99],
//     ["Nome"=>"Chapeuzinho", "Quantidade"=>39, "Preco"=>105.99],
//     ["Nome"=>"Blusão", "Quantidade"=>100, "Preco"=>125.99],
//     ["Nome"=>"Saia", "Quantidade"=>12, "Preco"=>19.99]
// ];  

// function calcularTotal($estoque){
//     $valorTotal = 0;
//     $qtdTotal = 0;
//     foreach($estoque as $produto){       
//         $valorTotal += $produto ["Preco"] * $produto["Quantidade"];
//         $qtdTotal +=  $produto["Quantidade"];
//     };
//     echo("Temos uma quantidade de: $qtdTotal e uma valor total de: $valorTotal\n");
// }
// function mostrarIndividual($estoque){
//     foreach($estoque as $i => $item){
//         $valorTotalItem = $item["Preco"] * $item["Quantidade"];
//         echo($i+1) ." {$item["Nome"]} - Quantidade: {$item["Quantidade"]} - Valor: {$item["Preco"]} - $valorTotalItem \n";
//     }
// }
// function menorValor($estoque){
//     $mnrItem = null;
//     foreach($estoque as $item){
//         if($item["Quantidade"] > 0 && ($mnrItem === null || $item["Preco"] < $mnrItem["Preco"])){
//             $mnrItem = $item;
//         };
//     }
//     return $mnrItem;
// }
//     calcularTotal($estoque);
//     echo"Itens disponiveis!!!\n";
//     mostrarIndividual($estoque);
    
// echo"Por favor, nos informe o quanto voce pode gastar hoje?\n";
// $saldoCliente = (float)trim(fgets(STDIN));
// while(true){
//     $itemBarato = menorValor($estoque);
//     if($saldoCliente < $itemBarato["Preco"]){
//         echo"Volte Sempre, te Amamos Pobre\n";
//         break;
//     }
//     mostrarIndividual($estoque);
// echo"Escolha o que lhe necessitas, ou Escolha (0) para Sair!!!\n";
//     $escolha = (int)trim(fgets(STDIN));
//     if($escolha === 0){
//         echo"Volte Sempre, te Amamos Pobre\n";
//         break;
//     }
//     if($estoque[$escolha-1]["Quantidade"]>0 && $saldoCliente >$estoque[$escolha-1]["Preco"]){
//         $saldoCliente -= $estoque[$escolha-1]["Preco"];
//         $estoque[$escolha-1]["Quantidade"] = $estoque[$escolha-1]["Quantidade"]-1;
//         echo"Voce acaba de adiquirir: {$estoque[$escolha-1]["Nome"]} por: R$ {$estoque[$escolha-1]["Preco"]}\n";
//     }else{
//         echo"Seu saldo é insulficiente\n";
//     }
//     echo($saldoCliente) . " É o que lhe restou!!!\n";
//     echo"Estoque atualizado" . calcularTotal($estoque);  
// };

//Exercicio - 20
// Calcaludora.php
// <?php
//     if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $numberOne = $_POST["numberOne"];
//         $numberTwo = $_POST["numberTwo"];
//         $operation = $_POST["operation"];
//         $result = 0;

//     switch($operation){
//         case "+": 
//             $result = $numberOne + $numberTwo;
//         break;
//         case "-": 
//             $result = $numberOne - $numberTwo;
//         break;
//         case "/": 
//             if($numberTwo != 0){
//             $result = $numberOne / $numberTwo;
//             }else{
//                 $result = "infinito";
//             }
//         break;
//         case "*": 
//             $result = $numberOne * $numberTwo;
//         break;

//         default: 
//         $result = "Operador invalido";
//     }
//     }


// ?>

<!-- // <!DOCTYPE html>
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
 </html> -->

<!-- index.php -->
<!-- <!DOCTYPE html>
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
</html> -->

<!-- Exercicio - 21
product.php -->
 <?php
// $produtos = [
//     $produtos = [
//         1 => [
//             'nome' => 'Arroz',
//             'descricao' => 'É utilizado em inúmeras receitas, como arroz branco, risotos, arroz doce, sushi, entre outros. Além disso, é um alimento versátil, acompanhando pratos de carnes, legumes e vegetais.',
//             'preco' => 'R$ 20,00'
//         ],
//         2 => [
//             'nome' => 'Feijao',
//             'descricao' => 'O feijão é um alimento tradicional e altamente nutritivo, amplamente consumido em diversas culturas, especialmente na América Latina e em países como o Brasil. Rico em proteínas, fibras, ferro, e minerais essenciai.',
//             'preco' => 'R$ 14,00'
//         ],
//         3 => [
//             'nome' => 'Contra-File',
//             'descricao' => 'O contra-filé pode ser preparado de diversas formas, como na churrasqueira, frigideira ou grelha, e costuma ser temperado de maneira simples, com sal grosso, para realçar seu sabor natural. Além de ser servido com acompanhamentos variados, como arroz, batatas, legumes ou saladas, o contra-filé é uma ótima escolha para quem aprecia carnes',
//             'preco' => 'R$ 40,00'
//         ],
//     ]
//     ];
// $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
// if(isset($produtos[$id])){
//     $produto = $produtos[$id];
// }else{
//     $produto = null;
// }
?> 
<!-- index.php -->
<?php
// $produtos = [
//     1 => [
//         'nome' => 'Arroz',
//         'descricao' => 'É utilizado em inúmeras receitas, como arroz branco, risotos, arroz doce, sushi, entre outros.',
//         'preco' => 'R$ 20,00'
//     ],
//     2 => [
//         'nome' => 'Feijao',
//         'descricao' => 'O feijão é um alimento tradicional e altamente nutritivo, amplamente 
//         consumido em diversas culturas, especialmente na América Latina e em países como o Brasil.',
//         'preco' => 'R$ 14,00'
//     ],
//     3 => [
//         'nome' => 'Contra-File',
//         'descricao' => 'O contra-filé pode ser preparado de diversas formas, como na churrasqueira, 
//         frigideira ou grelha, e costuma ser temperado de maneira simples, com sal grosso, para realçar seu sabor natural.',
//         'preco' => 'R$ 40,00'
//     ],
// ]
?> 
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catalogo</h1>
    <ul>
     <?php foreach ($produtos as $id => $produto ): ?> 
        <li>
            <h2><?php echo $produto['nome'];?></h2>
            <p><?php echo $produto['descricao'];?></p>
            <p><?php echo $produto['preco'];?></p>
            <a href="product.php?id=<?php echo $id;?>">Ver Detalhes</a>
        </li>
        <?php endforeach;?>
    </ul>
</body>
</html>  -->

<!-- Exercicios - 22
index.php -->
<!-- <!DOCTYPE html>
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
</html> -->
<!-- login.php -->
<?php

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $login = "administrador";
//     $senha = md5("1234");
// if($_POST["user"] == $login && md5($_POST["password"]) == $senha){
//     echo "Seja bem bindo!!!";
// }else{
//     echo "Usuário ou Senha invalidos!!!";
// }
// }

// Exercicios - 23
// cadastro.php

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Cadastro</title>
// </head>
// <body>
//     <h1>Cadastro no Banco do Mersun</h1>
//     <form action="insert.php" method="POST">
//         <label for="name">Nome</label>
//         <input type="text" id="nome" name="name" required><br><br>

//         <label for="email">Email</label>
//         <input type="text" id="email" name="email" required><br><br>

//         <label for="age">Idade</label>
//         <input type="text" id="idade" name="age" required><br><br>

//         <label for="address">Endereço</label>
//         <input type="text" id="endereço" name="address" required><br><br>

//         <button type="submit">CADASTRAR</button>
//     </form>
    
// </body>
// </html>

// inser.php
// <?php
// // Configurações do banco de dados
// $host = 'localhost';
// $db = 'ESTUDANDO'; // Nome do banco de dados
// $user = 'mersun'; // Nome do usuário do banco de dados
// $pass = '123qweqwe2';   // Senha do usuário

// try {
//     // Criação da conexão PDO
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Verifica se os dados foram enviados via POST
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         // Obtém os dados do formulário
//         $nome = $_POST['name'];
//         $email = $_POST['email'];
//         $idade = $_POST['age'];
//         $endereco = $_POST['address'];

//         // Prepara a instrução SQL
//         $sql = "INSERT INTO USUARIOS(nome, email, idade, endereco) VALUES (:nome, :email, :idade, :endereco)";
//         $stmt = $pdo->prepare($sql);
        
//         // Vincula os parâmetros
//         $stmt->bindParam(':nome', $nome);
//         $stmt->bindParam(':email', $email);
//         $stmt->bindParam(':idade', $idade);
//         $stmt->bindParam(':endereco', $endereco);
        
//         // Executa a consulta
//         $stmt->execute();

//         // Redireciona de volta para o formulário
//         header("Location: cadastro.php");
//         exit();
//     }
// } catch (PDOException $e) {
//     // Exibe o erro se ocorrer
//     echo "Erro ao inserir dados: " . $e->getMessage();
// }
// ?>

<!-- Exercicios - 24
<?php
    // $host = 'localhost';
    // $db   = 'ESTUDANDO';
    // $user = 'mersun';
    // $pass = '123qweqwe2';

    // try {
    //     // Criação da conexão PDO
    //     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //     // Verifica se os dados foram enviados via GET
    //     if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    //         $sql = "SELECT * FROM USUARIOS";
    //         $stmt = $pdo->prepare($sql);
    //         $stmt->execute();
            
    // $resultQuery = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //     }
    // } catch (PDOException $e) {
    //     // Exibe o erro se ocorrer
    //     echo "Erro ao inserir dados: " . $e->getMessage();
    // }
    // $pdo = null;


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

// Exercicios - 25
contador.php
<?php
    // session_start();
    // if (isset($_SESSION["visitas"])){
    //     $_SESSION["visitas"] ++;
    // }else{
    //     $_SESSION["visitas"] = 0;
    // }
    // echo($_SESSION["visitas"] . " de Visitas.");

?>

contador2.php
<?php
    // session_start();
    // if (isset($_SESSION["visitas"])){
    //     $_SESSION["visitas"] ++;
    // }else{
    //     $_SESSION["visitas"] = 0;
    // }
    // echo($_SESSION["visitas"] . " de Visitas.");

?>

// Exercicios - 26
cookie.php
<?php
// $name = "mensagem Temporaria";
// $valor = "Essa é uma mensagem temporaria."; 
// setcookie($name, $valor, time()+ 2000, "/");

?>

cookieTemporario.php
<?php
// if(isset($_COOKIE['mensagem Temporaria'])){
//     echo'valor:'.$_COOKIE['mensagem Temporaria'];
// }else{
//     echo 'Sem mensagem Temporaria';
// }

?>

// Exercicios - 27
session.php
<?php
// session_start();
// $_SESSION['temporario'] = time() + 20;  
?>
imprimeSession.php
<?php 
// session_start();
// if (isset($_SESSION['temporario']) && time() < $_SESSION['temporario']){
//     echo 'Sessão ativa pain';
// }else{
//     session_destroy();
//     echo 'Sessão não ativa filhin';
  
// }

?>