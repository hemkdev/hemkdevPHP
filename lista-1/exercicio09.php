<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 - Soma de números entre Variáveis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 09 - Soma de números entre variáveis </h1>
    <form method="POST" action="">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required>
        <button type="submit" name="somar_diferenca">Verificar</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
        echo '<div class="resultado">';

          function somar_diferenca($num1, $num2) 
          {
              $soma = 0;
              if ($num1 > $num2) {
                  for ($i = $num2 + 1; $i < $num1; $i++) {
                      $soma += $i;
                  }
              } else {
                  for ($i = $num1 + 1; $i < $num2; $i++) {
                      $soma += $i;
                  }
              }
              return $soma;
          }

          $soma = somar_diferenca($num1, $num2);
          echo "A soma dos números entre $num1 e $num2 é: $soma";

        echo '</div>';
     }
    ?> 
</body>
</html>