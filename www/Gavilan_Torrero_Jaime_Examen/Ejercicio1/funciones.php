<?php
function categoria(int $num): string{
    $resultado ="";
    
    if ($num > 0 && $num < 39) {
        $resultado = "Bajo";
    }elseif ($num >40 && $num < 69){
        $resultado = "Medio";
    }else{
        $resultado = "Alto";
    }
    return $resultado;
}

function escribir(array $num): void{
    //fopen('');
    //fclose();
}
?>