<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Atividade 1.2</title>
</head>
<body>
    <h1>
        <?php
        $maiores = [];
        $menores = [];
        $usuarios = array(
            array("nome" => "Gui", "idade" => 17),
            array("nome" => "Joao", "idade" => 25),
            array("nome" => "Eduardo", "idade" => 15),
            array("nome" => "Benhur", "idade" => 7),
            array("nome" => "Pedro", "idade" => 1),
            array("nome" => "Gyro", "idade" => 98),
            array("nome" => "Caesar", "idade" => 18)
        );

        foreach ($usuarios as $usuario) {
            if ($usuario['idade'] < 18) {
                $menores[]=($usuario);
            } else $maiores[]=($usuario);
        }

        echo '<h2>Menores de idade:</h2>';
        echo '<ul>';
        foreach ($menores as $menor)
        {
            echo "<li><pre>Nome: {$menor['nome']} \t Idade: {$menor['idade']} </pre></li>";
        }
        echo '</ul>';

        echo '<h2>Maiores de idade:</h2>';
        echo '<ul>';
        foreach ($maiores as $maior)
        {
            echo "<li><pre>Nome: {$maior['nome']} \t Idade: {$maior['idade']} </pre></li>";
        }
        echo '</ul>';
        ?>
    </h1>
</body>
</html>


