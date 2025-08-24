<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Cálculo de fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_fatorial">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_fatorial'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            echo '<div class="resultado">';
            if ($numero === false) {
                echo 'Número inválido!';
            } else {
                $n = $numero;
                $resultado = 1;
                while ($numero > 1) {
                    $resultado *= $numero;
                    $numero--;
                }
                echo "A fatorial de $n é: $resultado<br>";
                echo '</div>';
            }
        }
    }
    ?>
</body>

</html>