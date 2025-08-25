<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Números amigos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> Exercício 05 - Números amigos </h1>
    <form method="POST" action="">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required>
        <button type="submit" name="numero_amigo">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
        echo '<div class="resultado">';

        function soma_divisor($n)
        {
            $soma = 0;
            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        echo '<div class="resultado">';
        if ($num1 === false || $num2 === false){
            echo 'Número inválido!';
        } else {
            $soma1 = soma_divisor($num1) - $num1; // Subtrai o próprio número para obter a soma dos divisores próprios
            $soma2 = soma_divisor($num2) - $num2; // Subtrai o próprio número para obter a soma dos divisores próprios

            if ($soma1 === $num2 && $soma2 === $num1) {
                echo "Os números $num1 e $num2 são números amigos.";
            } else {
                echo "Os números $num1 e $num2 não são números amigos.";
            }
            echo '</div>';
        }
    }
    ?>
</body>

</html>