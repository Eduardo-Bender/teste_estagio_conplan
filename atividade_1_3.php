<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Atividade 1.3</title>

    <style>
        .aprovado {
            color: green;
            font-weight: bold;
        }
        .reprovado {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Cálculo de média escolar</h1>

    <form method="post">
        <div>
            <label for="nota1">Nota 1 (0-10)</label>
            <input type="number" name="nota1" min="0" max="10" step="0.1" required>
        </div>
        <div>
            <label for="nota1">Nota 2 (0-10)</label>
            <input type="number" name="nota2" min="0" max="10" step="0.1" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if(isset($_REQUEST['nota1'])) // so e necessario checar 1 pois ambos sao required
        {
            extract($_REQUEST);

            $soma = $nota1 + $nota2;
            $media = $soma / 2;

            $situacao = $media >= 7 ? 'Aprovado' : 'Reprovado';
            $classe = $media >= 7 ? 'aprovado' : 'reprovado';

            echo "<div>";
            echo "<h3>Resultado:</h3>";
            echo "<p>Nota 1: {$nota1}</p>";
            echo "<p>Nota 2: {$nota2}</p>";
            echo "<p>Media: {$media}</p>";
            echo "<p class= {$classe}>Situacao: {$situacao}</p>";
            echo "</div>";
        }
    ?>
</body>
</html>


