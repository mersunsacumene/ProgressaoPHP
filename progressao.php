
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