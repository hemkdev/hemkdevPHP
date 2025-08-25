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

        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
        echo '<div class="resultado">';

        function verificar_divisores($numero)
        {
            $divisores = [];
            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    $divisores[] = $i;
                }
            }
            return $divisores;
        }
        
        $divisores = verificar_divisores($numero);
        echo "Os divisores de $numero são: " . implode(', ', $divisores);
        echo '</div>';

    }
    ?>

</body>

</html>