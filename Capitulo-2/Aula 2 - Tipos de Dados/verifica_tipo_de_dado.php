<?php
//Tipo de dados

//INT(INTEGERS) ou seja inteiros
//Exemlo (1,23,42,21,55,666)

$int = 5;
//Uma condição para verificar se a variavel e integer
var_dump($int);
if (is_int($int)) {
    echo "O numero " . $int . " e um numero inteiro";
} else {
    echo "O numero " . $int . "nao e um numero inteiro";
}
echo "<br />";

//FLOAT não são inteiros e sim numero com casas decimais
//Exemplo: (1.45; 2.5; 6.66; 42.42)

$decimais = 42.42;
var_dump($decimais);
if (is_float($decimais)) {
    echo "O numero " . $decimais . " e um numero decimal";
} else {
    echo "O numero " . $decimais . " nao e um numero decimal";
}

echo "<br />";
//STRING conjunto de caractereis
//Exemplo: "frase qualquer"

$string = "lorem ipsu";
var_dump($string);

if (is_string($string)) {
    echo "A variavel " . $string . " e uma string";
} else {
    echo "A variavel " . $string . " nao e uma string";
}

echo "<br />";
//Booleanos (Verdadeiro ou falso)
//Exemplo: true/false
//p.s : O valor "true" retorna 1 e o valor "false" retorna 0 ou nada
$bolean = true;
var_dump($bolean);

if (is_bool($bolean)) {
    echo "A variavel " . $bolean . " e um bolean";
} else {
    echo "A variavel " . $bolean . " nao e um bolean";
}
