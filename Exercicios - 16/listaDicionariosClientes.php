Exercicio - 16 (Lembrando que no inuciado da questão é Calor, nao tem esse nome na lista. Mas associei como Carlos!!!)
Temos uma lista de dicionarios de clientes, use o for para mostrar apenas o cliente que tenha o nome Calor, a lista esta na foto abaixo.

<?php
$listaClientes = 
[
    ["nome"=>"Ana", "idade"=>25,"Endereço"=>"Rua A, 123"],
    ["nome"=>"Carlos", "idade"=>30,"Endereço"=>"Avenida B, 456"],
    ["nome"=>"Mariana", "idade"=>22,"Endereço"=>"Travessa C, 789"]
];
    for($i=0; $i<count($listaClientes); $i++){
        if($listaClientes [$i]["nome"]=== "Carlos"){
        print_r($listaClientes [$i]);
    };
};
?>