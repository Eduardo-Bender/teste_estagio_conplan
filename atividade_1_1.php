<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Atividade 1.1</title>
</head>
<body>
    <h1>
        <?php
        $produtos = array(
            array("nome" => "Caneta", "preco" => 2.50),
            array("nome" => "Caderno", "preco" => 25.90),
            array("nome" => "Livro", "preco" => 59.90),
            array("nome" => "Borracha", "preco" => 1.20),
            array("nome" => "Mochila", "preco" => 120.00),
            array("nome" => "Lápis", "preco" => 1.50)
        );

        foreach ($produtos as $produto) {
            if ($produto['preco'] < 50) {
                echo '<div>';
                echo '<span>' . $produto['nome'] . '</span>';
                echo ' - <span>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</span>';
                echo '</div>';
            }
        }
        ?>
    </h1>
</body>
</html>


