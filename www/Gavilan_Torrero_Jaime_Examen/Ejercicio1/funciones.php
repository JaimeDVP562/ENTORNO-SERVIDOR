<?php

// Funcion para categoria
function categoria($num): string
{
    $resultado = "";
    if ($num >= 0 && $num <= 39) {
        $resultado = 'Bajo';
    } elseif ($num >= 40 && $num <= 70) {
        $resultado = 'Medio';
    } elseif($num >= 71 && $num <= 100) {
        $resultado = 'Alto';
    }
    return $resultado;
}

// Funcion para el codigo

function codigo($num): string
{
    $resultado = "";
    if ($num >= 0 && $num <= 39) {
        $resultado = 'Ba-' . $num;
    } elseif ($num >= 40 && $num <= 70) {
        $resultado = 'Me-' . $num;
    } elseif($num >= 71 && $num <= 100) {
        $resultado = 'Al-' . $num;
    }
    return $resultado;
}
// Funcion para asignar el color segun la categoria
function cuentaRango($num):array{
    $resultado = [];
    if ($num >= 0 && $num <= 39) {
        $resultado[]= array_push($resultado,$num);
    }else{}
    return $resultado;


}