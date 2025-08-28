<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 - Vogais na String</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1> Exercício 12 - Vogais na String </h1>
    <form method="POST" action="">
        <label for="texto">Digite seu texto</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit" name="contar_vogais">Verificar</button>
    </form> 

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $texto = isset($_POST['texto']) ? trim($_POST['texto']) : '';
        
        echo '<div class="resultado">';

            function contar_vogais($texto) {
                return preg_match_all('/[aeiouAEIOU]/', $texto);
            }

            $total_vogais = contar_vogais($texto);
            if ($total_vogais === 1) {
                echo "A string possui $total_vogais vogal.";
            } else
            echo "A string possui $total_vogais vogais.";  

        echo '</div>';
    }
    ?>
</body>
</html>