<?php 

header(header: 'content-type: text/html; charset=utf-8');

$temp = 15;

if($temp > 25){
    $clima = "Está calor";
} else {
    $clima = "Está frio";
}
 echo "<P>Temperatura: $temp °C. -> $clima </p>";
 echo "<br>";

 //(condição) ? valor_se_verdadeiro valor_se_falso

    $clima = ($temp > 25) ? "Está calor" : "Está frio";

$contador = 5;
while ($contador > 0) {
    echo "<p> Contagem regressiva: $contador ...</p>";
    $contador--;
}
echo "<br>";

$valor = 10;
do {
    echo "<p> esse texto sempre aparecerá, mesmo que a condição seja falsa </p>";
    $valor++;
} while ($valor < 5);

$tarefas = [ //array de arrays, cada tarefa é um array associativo
    ['descricao' => 'Estudar PHP', 'concluida' => true],
    ['descricao' => 'Cagar na roupa', 'concluida' => true],
    ['descricao' => 'Fazer almoço', 'concluida' => false],
];

echo $tarefas[1]['descricao'];

echo "<ul>";
foreach ($tarefas as $tarefa) { // para cada tarefa dentro do array tarefas
    $classeCSS = $tarefa['concluida'] ? 'color: green; text-decoration: line-through;' : 'color: red;'; //alteração CSS do texto dependendo se a tarefa foi concluída ou não 
    $statusTexto = $tarefa['concluida'] ? '[concluida]' : '[pendente]';

    echo "<li style='$classeCSS'>" . $tarefa['descricao'] .  "" . $statusTexto . "</li>";
}

echo "</ul>";


?>