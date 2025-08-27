<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 - Ano bissexto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 14 - Verificar ano bissexto </h1>
    <form method="POST" action="">
        <label for="ano">Digite o ano</label>
        <input type="number" id="ano" name="ano" required>
        <button type="submit" name="verificar_bissexto"> Verificar </button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ano = isset($_POST['ano']) ? (int)$_POST['ano'] : 0;
        echo '<div class="resultado">';

            function verificar_bissexto($ano) {
                if ($ano % 4 === 0 && $ano % 100 != 0 || $ano % 400 === 0) {
                    return $resultado = "O ano é bissexto";
                } else {
                    return $resultado = "O ano não é bissexto";
                }
            }
            $resultado = verificar_bissexto($ano);
            echo "$resultado";
            echo "</div>";
        }
    ?>
</body>
</html>