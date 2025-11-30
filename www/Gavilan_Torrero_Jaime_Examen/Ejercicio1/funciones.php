<?php
function categoria($num): string
{
    $resultado = "";
    if ($num >= 0 && $num <= 39) {
        $resultado = "Bajo";
    } elseif ($num >= 40 && $num <= 69) {
        $resultado = "Medio";
    } elseif ($num >= 70 && $num <= 100) {
        $resultado = "Alto";
    }
    return $resultado;
}
function generaCodigo($num): string
{
    $resultado = "";
    if ($num >= 0 && $num <= 39) {
        $resultado = "Ba-" . $num;
    } elseif ($num >= 40 && $num <= 69) {
        $resultado = "Me-" . $num;
    } elseif ($num >= 70 && $num <= 100) {
        $resultado = "Al-" . $num;
    }
    return $resultado;
}
function cuentaRangoBajo($num): int
{
    $resultado =0;
    if ($num >= 0 && $num <= 39) {
        $resultado ++;
    } 
    return $resultado;
}
