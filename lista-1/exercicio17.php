<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Data válida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 17 - Verificar data válida </h1>
    <form method="POST" action="">
        <label for="data"> Digite a data DD/MM/AA </label>
        <input type="number" id="dia" name="dia" required>
        <input type="number" id="mes" name="mes" required>
        <input type="number" id="ano" name="ano" required>
        <button type="submit" name="verificar_data"> Verificar </button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ano = isset($_POST['ano']) ? (int)$_POST['ano'] : 0;
        $mes = isset($_POST['mes']) ? (int)$_POST['mes'] : 0;
        $dia = isset($_POST['dia']) ? (int)$_POST['dia'] : 0;
        echo '<div class="resultado">';

        function verificar_data($dia, $mes, $ano) {
            if (checkdate($mes, $dia, $ano)) { // verifica a data baseada na função nativa do php
                return $resultado = "A data $dia/$mes/$ano é válida";
            } else {
                return $resultado = "A data $dia/$mes/$ano não é válida";
            }
        }
        $resultado = verificar_data($dia, $mes, $ano);
        echo "$resultado";
        echo "</div>";
    }
    ?>
</body>
</html>