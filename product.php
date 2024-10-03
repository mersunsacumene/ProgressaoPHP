<?php 
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
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if(isset($produtos['id'])){
    $produto = $produtos['id'];
}else{
    $produto = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($produto): ?>
        <h1><?php echo $produto['nome']; ?></h1>
        <p><?php echo $produto['descricao']; ?></p>
        <p><?php echo $produto['preco'] ?></p>
        <a href="index.php">Volte ao inicio</a>
        <?php else:?>
            <h1>Produto não encontrado</h1>
            <a href="index.php">Volte ao inicio</a>
    <?php endif;?>
</body>
</html>