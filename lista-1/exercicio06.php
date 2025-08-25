<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 - Divisores</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> Exercício 06 - Divisores </h1>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_divisores">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_divisores'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            echo '<div class="resultado">';
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                for ($i = 1; $i >= $numero; $i++) {
                    if ($numero % $i == 0) {
                        echo "$i";
                    }
                }
            }
            echo '</div>';
        }
    }
    ?>

</body>

</html>