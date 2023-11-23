<?php

function Factorial($n1) {
    $factorial = 1;

    for ($i = 1; $i <= $n1; $i++) {
        $factorial = $factorial * $i;
    }

    return $factorial;
}

//Llamar a la función
$n1 = 4;
$res = Factorial($n1);

echo "El factorial de $n1 es: $res";
?>