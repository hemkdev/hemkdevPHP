<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 - Permissão para votar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Exercício 16 - Permissão para votar </h1>
    <form method="POST" action="">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit" name="permissao_votar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
        $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;
        echo '<div class="resultado">';

        function permissao_votar($nome, $idade) {
            if ($idade >= 16) {
                return "$nome, você tem permissão para votar.";
            } else {
                return "$nome, você não tem permissão para votar.";
            }
        }
        $mensagem = permissao_votar($nome, $idade);
        echo $mensagem;
        echo '</div>';
    }
    ?>
</body>
</html>