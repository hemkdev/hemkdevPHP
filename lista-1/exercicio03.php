<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Números positivos, negativos e zero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>
</body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_numero'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            echo '<div class="resultado">';
            if ($numero === false) {
                echo "Número inválido!";
            } else {
                if ($numero > 0) {
                    echo "O número é positivo";
                } else {
                    if ($numero < 0) {
                        echo "O número é negativo";
                    } else {
                        echo "O número é zero";
                    }
                }
            }
            echo '</div>';
        }
    }
    ?> 
</html>