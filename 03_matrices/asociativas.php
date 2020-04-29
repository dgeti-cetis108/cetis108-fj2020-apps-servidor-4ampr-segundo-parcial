<?php
// $colores = array("verde" => "green", "rojo" => "red", "azul" => "blue");
// var_dump($colores);
// imprimir de la matriz colores los colores en español primero y en ingles despues
// verde
// green
// rojo
// red
// azul
// blue
// echo $colores["verde"]; intento fallido
// $colores_keys = array_keys($colores);
// echo $colores_keys[0]."\n";
// echo $colores[$colores_keys[0]]."\n";

// echo $colores_keys[1]."\n";
// echo $colores[$colores_keys[1]]."\n";

// echo $colores_keys[2]."\n";
// echo $colores[$colores_keys[2]]."\n";

// for ($i=0; $i < count($colores); $i++) {
//     echo key($colores)."\n";
//     echo $colores[key($colores)]."\n";
//     next($colores);
// }

$colores = array("verde" => "green", "rojo" => "red", "azul" => "blue");

foreach ($colores as $esp => $eng) {
    echo $esp."\n";
    echo $eng."\n";
}