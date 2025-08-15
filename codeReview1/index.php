<?php

$mensagem = 'Olá, Mundo!';
echo "<p> $mensagem </p>";

// Variaveis Padrão  $ -> declaração de variáveis
$primero_nome = 'Ícaro';    // string 
$idade = 23;                // interger
$gosta_de_bolo = true;      // boolean
$altura = 1.96;             // float

$frutas = array('banana', 'maca', 'tomare'); // array -> vetor(lista de valores)
$numeros = array(3,6,8,10);
$numeros_frutados = array(3,'morango',true,1.93);

//Definindo Consantes
define('PI', 3.14159); 
const SITE_NOME = 'Meu Site';

$variavel_nula = null;

$resultado = ($idade + 123 * 18)/13;

$numerozinho = 13.4;

$numero_convertido = (int) $numerozinho;

echo $numerozinho;
echo "<br>";
echo $numero_convertido;
echo "<br>";

$nota = 6;
if ($nota >= 7){
    echo"passou";
    echo "<br>";

}else if($nota<6){
    echo "deu ruim";
    echo "<br>";

}else{

}
for($i=1;$i <= 5; $i++){
    echo "<p> Contagem: $i </p>";
}

function saudacao($nome){ // declaração de função
    return "Olá $nome";
}

echo "<p>" . saudacao('Julio') . "</p>";


?>