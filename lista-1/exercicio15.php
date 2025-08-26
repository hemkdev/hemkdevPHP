<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 - Cálculo de IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 15 - Calculo de IMC </h1>
    <form method="POST" action="">
        <label for="altura">Digite sua altura:</label>
        <input type="number" id="altura" name="altura" required>
        <label for="peso">Digite seu peso:</label>
        <input type="number" id="peso" name="peso" required>
        <button type="submit" name="calcular_imc">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $altura = isset($_POST['altura']) ? (int)$_POST['altura'] : 0;
        $peso = isset($_POST['peso']) ? (int)$_POST['peso'] : 0;
        echo '<div class="resultado">';

            function calcular_imc($altura, $peso) {
                if ($altura <= 0) {
                    return "Altura inválida.";
                }
                $imc = $peso / (($altura / 100) ** 2); // Converte altura para metros
                return round($imc, 2); // Arredonda para duas casas decimais
            }

            $imc = calcular_imc($altura, $peso); 
            echo "Seu IMC é: $imc.";
            echo '</div>';

        }
    ?>

</body>
</html>