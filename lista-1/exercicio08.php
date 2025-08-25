<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 - Números pares existentes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> Exercício 08 - Números pares existentes </h1>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="contar_pares">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
        echo '<div class="resultado">';

        function contar_pares($numero)
        {
            $contador = 0;
            for ($i = 1; $i <= $numero; $i++) {
                if ($i % 2 == 0) {
                    $contador++;
                }
            }
            return $contador;
        }

        $quantidade_pares = contar_pares($numero);
        echo "Existem $quantidade_pares números pares entre 1 e $numero.";
        echo '</div>';
    }
    ?>
</body>

</html>