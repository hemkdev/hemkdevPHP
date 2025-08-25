<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Par ou Ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> Exercício 01 - Par ou Ímpar </h1>
    <form method="POST" action=""> // Formulário para entrada do número
        <label for="numero">Digite um número:</label> // Rótulo para o campo de entrada
        <input type="number" id="numero" name="numero" required> // Campo de entrada para o número
        <button type="submit" name="verificar_par_impar">Verificar</button> // Botão para enviar o formulário
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica se o formulário foi enviado
        if (isset($_POST['verificar_par_impar'])) { // Verifica se o botão específico foi clicado
            $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT); // Valida o número como inteiro
            echo '<div class="resultado">'; 
            if ($numero === false) { // Verifica se a validação falhou
                echo "Número inválido!"; // Mensagem de erro para número inválido
            } else { // Se o número for válido, verifica se é par ou ímpar
                if ($numero % 2 == 0) { // Verifica se o número é par
                    echo "O número $numero é <strong>par</strong>."; // Mensagem para número par
                } else {
                    echo "O número $numero é <strong>ímpar</strong>."; // Mensagem para número ímpar
                }
            }
            echo '</div>';
        }
    }
    ?>
</body>

</html> 