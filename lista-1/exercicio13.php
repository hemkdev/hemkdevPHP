<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Conversão graus Celsius -> Fahrenheit </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 13 - Conversão Celsius -> Fahrenheit </h1>
    <form method="POST" action="">
        <label for="temperatura">Digite a temperatura</label>
        <input type="number" id="temperatura" name="temperatura" required>
        <button type="submit" name="conversao_celsius">Celsius -> Fahrenheit</button>
        <button type="submit" name="conversao_fahrenheit">Fahrenheit -> Celsius</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $temperatura = isset($_POST['temperatura']) ? floatval($_POST['temperatura']) : 0;
        echo '<div class="resultado">';

            function conversao_celsius($temperatura) {
                $resultado = ($temperatura * (9 / 5)) + 32;
                return round($resultado, 1);
            }
            function conversao_fahrenheit($temperatura) {
                $resultado = ($temperatura - 32) * (5 / 9);
                return round($resultado, 1);
            }

            if (isset($_POST['conversao_celsius'])) {
                $conversao = conversao_celsius($temperatura);
                echo "$temperatura &deg;C convertidos são $conversao &deg;F";
            } elseif (isset($_POST['conversao_fahrenheit'])) {
                $conversao = conversao_fahrenheit($temperatura);
                echo "$temperatura &deg;F convertidos são $conversao &deg;C";
            }
            echo '</div>';

        }
    ?>
</body>

</html>