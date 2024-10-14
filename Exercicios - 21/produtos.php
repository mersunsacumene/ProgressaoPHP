Exercicio - 21
Crie uma página index.php com um catálogo de produtos (3 produtos) onde os usuários possan visualizar em lista esses produtos.
Cada produto deve ter um link ou botão "Detalhes" que leva a uma página de detalhes específicos desse produto, a página de ddetalhes
dependendo do produto que ela receber, ela descreve aquele produto. Para fazer esse exercicio, envie por URL o parâmetro de qual o 
produto e na página produtos.php receba esse dado e com ajuda de if e else exiba as informações daquele produto. 

<?php
$produtos = [
    $produtos = [
        1 => [
            'nome' => 'Arroz',
            'descricao' => 'É utilizado em inúmeras receitas, como arroz branco, risotos, arroz doce, sushi, entre outros. Além disso, é um alimento versátil, acompanhando pratos de carnes, legumes e vegetais.',
            'preco' => 'R$ 20,00'
        ],
        2 => [
            'nome' => 'Feijao',
            'descricao' => 'O feijão é um alimento tradicional e altamente nutritivo, amplamente consumido em diversas culturas, especialmente na América Latina e em países como o Brasil. Rico em proteínas, fibras, ferro, e minerais essenciai.',
            'preco' => 'R$ 14,00'
        ],
        3 => [
            'nome' => 'Contra-File',
            'descricao' => 'O contra-filé pode ser preparado de diversas formas, como na churrasqueira, frigideira ou grelha, e costuma ser temperado de maneira simples, com sal grosso, para realçar seu sabor natural. Além de ser servido com acompanhamentos variados, como arroz, batatas, legumes ou saladas, o contra-filé é uma ótima escolha para quem aprecia carnes',
            'preco' => 'R$ 40,00'
        ],
    ]
    ];
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if(isset($produtos[$id])){
    $produto = $produtos[$id];
}else{
    $produto = null;
}
?> 