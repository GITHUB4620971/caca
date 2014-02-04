<?php


//Leer
$linea = leer_linea();








//Escribir
echo $linea;

function leer_linea() {
    return trim(fgets(STDIN));              // return the text entered
}
