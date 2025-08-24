<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Cálculo de tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_tabuada">Verificar</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_tabuada'])) {
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
            echo '<div class="resultado">';
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado<br>";
            }
            echo '</div>';
        }
    }
    ?>
</body>
</html>