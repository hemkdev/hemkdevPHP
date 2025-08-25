<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 - Maior número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 18 - Maior número </h1>
    <form method="POST" action="">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required>
        <label for="num3">Digite o terceiro número:</label>
        <input type="number" id="num3" name="num3" required>
        <button type="submit" name="verificar_maior">Verificar</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
        $num3 = isset($_POST['num3']) ? (int)$_POST['num3'] : 0;
        echo '<div class="resultado">';

        function verificar_maior($num1, $num2, $num3) {
            if ($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }
        $maior_numero = verificar_maior($num1, $num2, $num3);
        echo "O maior número entre $num1, $num2 e $num3 é: $maior_numero.";
        echo '</div>';
    }
    ?>
</body>
</html>