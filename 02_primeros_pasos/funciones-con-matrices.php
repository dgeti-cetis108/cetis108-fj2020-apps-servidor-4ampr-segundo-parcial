<?php
/**
 * Funciones con matrices
 * 
 * array() utilizada para crear matrices
 * En PHP, hay tres tipos de matrices
 * Indexadas - matrices con índice numérico
 * Asociativas - matrices con claves con nombres
 * Multidimensionales - matrices que contienen una o mas matrices
 * 
 * Sintaxis de matrices indexadas
 * array(value1,value2,value3, etc.)
 * 
 * Sintaxis de matrices asociativas
 * array(key=>value,key=>value,key=>value,etc.)
 * 
 */

// Crear una matriz indexada y recorrerla
$nombres = array("Bidkar", "Alvaro", "Cesar"); // 3
// imprimir el valor de Alvaro
echo $nombres[1];

// obtener el tamaño de la matriz
$nombres_length = count($nombres); // 3

// imprimir todos los valores de la matriz en cada linea
for ($i=0; $i < $nombres_length; $i++) { 
    echo $nombres[$i]."\n";
}

// Crear una matriz asociativa y recorrerla
$usuarios = array(
    "nombres" => "Bidkar",
    "apellidos" => "Aragon C.",
    "correo_electronico" => "bidkar@cetis108.edu.mx"
);
echo $usuarios["correo_electronico"];
// imprimir los valores de $usuarios en una sola linea separados por coma
$linea = "";
for ($i=0; $i < sizeof($nombres); $i++) {
    $linea .= $nombres[$i].", ";
}
echo $linea;

// Crear una matriz multidimensional
$multidimensional = array($nombres, $usuarios, array(1,2,3));
// var_dump($multidimensional);
echo $multidimensional[1]["apellidos"];

// count() sizeof()
// funciones que son utilizadas para conocer el tamaño de una matriz u objeto

// sort()
var_dump($nombres);
sort($nombres);
var_dump($nombres);

// array_sum()
$numeros = array(1,4,7,8);
echo array_sum($numeros);

// array_count_values()
$valores = array_count_values($nombres);

// array_search()

// array_key_exists()

// array_splice()

// array_push()

// array_fill()

// array_unshift()

// compact()

// extract()

