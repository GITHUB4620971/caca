<?php

operacion_aritmetica_simple();


function operacion_aritmetica_simple() {

//Operación aritmética simple
    echo "Introduce el número A";
    $A = leer_linea();
    echo "Introduce el número B";
    $B = leer_linea();

    $resultado = $A + $B;

    echo "El resultado es $resultado";
}

function leer_y_escribir_una_linea() {
//Leer
    $linea = leer_linea();

    //Escribir
    echo $linea;
}

function leer_linea() {
    return trim(fgets(STDIN));              // return the text entered
}
