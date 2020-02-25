<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function doble($valor){
        return 2*$valor;
    }
    function negrita($texto){
        echo "<strong>$texto</strong>";
    }
    function potencia($x,$exponente){
        $valor=1;
        for($i=1;$i<=$exponente;$i++){
            $valor=$valor*$x;
        }
        return $valor;
    }
    
    echo potencia(3,3);
?>
</body>
</html>