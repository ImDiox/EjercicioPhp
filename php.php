<?php
function crear_piramide ($filas) {
    $cadena = null;
    for ($i = 1; $i <= $filas; $i++) {
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}
 
// Forma de uso
crear_piramide (10);
?>