Exercicio - 21
Crie uma página index.php com um catálogo de produtos (3 produtos) onde os usuários possan visualizar em lista esses produtos.
Cada produto deve ter um link ou botão "Detalhes" que leva a uma página de detalhes específicos desse produto, a página de ddetalhes
dependendo do produto que ela receber, ela descreve aquele produto. Para fazer esse exercicio, envie por URL o parâmetro de qual o 
produto e na página produtos.php receba esse dado e com ajuda de if e else exiba as informações daquele produto. 

<?php
$produtos = [
    1 => [
        'nome' => 'Arroz',
        'descricao' => 'É utilizado em inúmeras receitas, como arroz branco, risotos, arroz doce, sushi, entre outros.',
        'preco' => 'R$ 20,00'
    ],
    2 => [
        'nome' => 'Feijao',
        'descricao' => 'O feijão é um alimento tradicional e altamente nutritivo, amplamente 
        consumido em diversas culturas, especialmente na América Latina e em países como o Brasil.',
        'preco' => 'R$ 14,00'
    ],
    3 => [
        'nome' => 'Contra-File',
        'descricao' => 'O contra-filé pode ser preparado de diversas formas, como na churrasqueira, 
        frigideira ou grelha, e costuma ser temperado de maneira simples, com sal grosso, para realçar seu sabor natural.',
        'preco' => 'R$ 40,00'
    ],
]
?> 

<!DOCTYPE html>
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
</html>
