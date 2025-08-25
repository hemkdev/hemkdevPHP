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
        if (isset($_POST['numero_amigo'])) {
            $num1 = filter_var($_POST['num1'], FILTER_VALIDATE_INT);
            $num2 = filter_var($_POST['num2'], FILTER_VALIDATE_INT);

            function soma_dos_divisores($n)
            {
                $soma = 0;
                for ($i = 1; $i <= $n / 2; $i++) {
                    if ($n % $i == 0) {
                        $soma += $i;
                    }
                }
                return $soma;
            }

            echo '<div class="resultado">';
            if ($num1 === false || $num2 === false) {
                echo "Número inválido!";
            } else {
                $soma1 = soma_dos_divisores($num1);
                $soma2 = soma_dos_divisores($num2);

                if ($soma1 == $num2 && $soma2 == $num1) {
                    echo "$num1 e $num2 são números amigos.";
                } else {
                    echo "$num1 e $num2 não são números amigos.";
                }
            }
            echo '</div>';
        }
    }
    ?>
</body>

</html>