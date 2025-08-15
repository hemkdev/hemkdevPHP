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
?>