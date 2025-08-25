<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Sequência de Fibonacci</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 10 - Sequência de Fibonacci </h1>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="contar_fibonacci">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
        echo '<div class="resultado">';

        function contar_fibonacci($numero) {
            $a = 0;
            $b = 1;
            $contador = 0;

            while ($b <= $numero) {
                $contador++;
                $proximo = $a + $b;
                $a = $b;
                $b = $proximo;
            }

            return $contador;
        }
        $quantidade_fibonacci = contar_fibonacci($numero);
        echo "Existem $quantidade_fibonacci números na sequência de Fibonacci até $numero.";
    }
    ?>

</body>
</html>