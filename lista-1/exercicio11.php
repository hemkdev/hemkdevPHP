<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Palíndromo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 11 - Palíndromo </h1>
    <form method="POST" action="">
        <label for="texto">Digite seu texto</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit" name="verificar_palindromo">Verificar</button>
    </form>  

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $texto = isset($_POST['texto']) ? trim($_POST['texto']) : '';
        $textoInvertido = strrev($texto); //inverte a string
        echo '<div class="resultado">';

        function verificar_palindromo($texto, $textoInvertido) {
            if (strcasecmp($texto, $textoInvertido) === 0) { //verifica sem considerar maiúsculas e minúsculas
            return true;
        } else 
            return false;
        }

        $resultado = verificar_palindromo($texto, $textoInvertido);
        $resultado ? print("A string é um palíndromo.") : print("A string não é um palíndromo.");
        echo "<br>";
        echo "$texto / $textoInvertido";
        echo '</div>';
        
    }
    ?>
</body>
</html>