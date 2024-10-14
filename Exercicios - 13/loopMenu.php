Exercicio - 13
Crie um loop no estilo menu: o usuário recebe a pergunta de qual opção do cardápio ele deseja! Essa opção é armazenada em uma variável. As opções são:
0-> para sair; 1-> Hamburguer; 2-> Batata Frita, 3-> Suco Diet;
Ao escolher umas das opções o cliente é novamente perguntado se ele quer mais alguma coisa e novamente aparece as opções, caso o cliente escolha 0
imprima a frase volte sempre!, sempre que ele escolher qualquer uma das outras opções, coloque uma frase referente a ação que vai ocorrer com a compra
do item escolhido, use whilepara esse codigo!


<?php
do {echo " 0->Sair \n 1->Hamburguer \n 2->Batata Frita \n 3->Suco Diet \n";
    echo "De qual opção do cardápio você deseja? ";
    $opcao = fgets(STDIN);
        switch($opcao){
            case 0 : 
                $item = null;
                echo "Obrigado, Volte Sempre!!!";
                break; 

            case 1 : 
            $item = "Hamburguer";
            break;

            case 2 :
            $item = "Batata Frita";    
            break;
            
            case 3 : 
            $item = "Suco Diet";
            break;
                
            default :
            $item = null;
            echo "Você escolheu opção errada!!!\n";    
            break;
    }
    
    if($item !== null){
        echo "Adquirindo $item \n Algo a mais? \n";
    }
} while($opcao != 0);
?>