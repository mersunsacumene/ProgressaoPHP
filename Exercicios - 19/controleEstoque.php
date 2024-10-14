Exercicio - 19
Agora é a sua vez, vamos supor que estamos desenvolvendo um programa de controle de estoque para uma loja. Então temos os seguintes dados:
Agora utilizando do for, gere qual o valor que temos em estoque total(quantidadeTotal x precoTotal) e individual por cada item(quantidadeDoItem x precoDoItem),
peça para o usuário inserir o quanto ele tem de saldo! Faça um while no estilo menu com todas as opções que temos de itens e caso o usuário escolha 0, ele sai 
do programa ou caso o saldo dele não de para comprar o produto de menor valor, e é impresso na tela "volte sempre". Caso ele compre algum item, retire o valor 
do saldo dele e também a quantidade que temos do produto em estoque. Ao fim do programa faça o novo calculo do estoque novamente!

<?php
$estoque = 
[
    ["Nome"=>"Camiseta", "Quantidade"=>50, "Preco"=>25.99],
    ["Nome"=>"Calça Jeans", "Quantidade"=>30, "Preco"=>59.99],
    ["Nome"=>"Tênis", "Quantidade"=>20, "Preco"=>75.99],
    ["Nome"=>"Chapeuzinho", "Quantidade"=>39, "Preco"=>105.99],
    ["Nome"=>"Blusão", "Quantidade"=>100, "Preco"=>125.99],
    ["Nome"=>"Saia", "Quantidade"=>12, "Preco"=>19.99]
];  

function calcularTotal($estoque)
    {
        $valorTotal = 0;
        $qtdTotal = 0;
        foreach($estoque as $produto){       
            $valorTotal += $produto ["Preco"] * $produto["Quantidade"];
            $qtdTotal +=  $produto["Quantidade"];
        };
        echo("Temos uma quantidade de: $qtdTotal e uma valor total de: $valorTotal\n");
    }
function mostrarIndividual($estoque)
    {
        foreach($estoque as $i => $item){
            $valorTotalItem = $item["Preco"] * $item["Quantidade"];
            echo($i+1) ." {$item["Nome"]} - Quantidade: {$item["Quantidade"]} - Valor: {$item["Preco"]} - $valorTotalItem \n";
        }
    }
function menorValor($estoque)
    {
        $mnrItem = null;
        foreach($estoque as $item){
            if($item["Quantidade"] > 0 && ($mnrItem === null || $item["Preco"] < $mnrItem["Preco"])){
                $mnrItem = $item;
            };
        }
        return $mnrItem;
    }
    calcularTotal($estoque);
    echo"Itens disponiveis!!!\n";
    mostrarIndividual($estoque);    
    echo"Por favor, nos informe o quanto voce pode gastar hoje?\n";

$saldoCliente = (float)trim(fgets(STDIN));
while(true){
    $itemBarato = menorValor($estoque);
    if($saldoCliente < $itemBarato["Preco"]){
        echo"Volte Sempre, te Amamos Pobre\n";
        break;
    }
    mostrarIndividual($estoque);
    echo"Escolha o que lhe necessitas, ou Escolha (0) para Sair!!!\n";

    $escolha = (int)trim(fgets(STDIN));
    if($escolha === 0){
        echo"Volte Sempre, te Amamos Pobre\n";
        break;
    }
    if($estoque[$escolha-1]["Quantidade"]>0 && $saldoCliente >$estoque[$escolha-1]["Preco"]){
        $saldoCliente -= $estoque[$escolha-1]["Preco"];
        $estoque[$escolha-1]["Quantidade"] = $estoque[$escolha-1]["Quantidade"]-1;
        echo"Voce acaba de adiquirir: {$estoque[$escolha-1]["Nome"]} por: R$ {$estoque[$escolha-1]["Preco"]}\n";
    }else{
        echo"Seu saldo é insulficiente\n";
    }
    echo($saldoCliente) . " É o que lhe restou!!!\n";
    echo"Estoque atualizado" . calcularTotal($estoque);  
};
?>