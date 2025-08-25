<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 - Números perfeitos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 07 - Numero perfeitos </h1>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_perfeicao">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
            echo '<div class="resultado">';
            
            function soma_divisores($n) 
            {
                $soma = 0;
                for ($i = 1; $i < $n; $i++) {
                    if ($n % $i == 0) {
                        $soma += $i;
                    }
                }
                return $soma;
            }

            if ($numero === false) {0
                echo 'Número inválido!';
            } else {
                $soma = soma_divisores($numero);
                if ($soma === $numero) {
                    echo "O número $numero é um número perfeito.";
                } else {
                    echo "O número $numero não é um número perfeito.";
                }
            }  

            echo '</div>';
         }
    ?>

</body>
</html>