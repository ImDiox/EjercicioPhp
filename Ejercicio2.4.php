<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$dia=mt_rand(1,7);

switch($dia){
    case 1:
        $diasemana="Hoy es lunes y toca clase con Xavier de HTML";
    break;
    case 2:
        $diasemana="Hoy es martes y toca clase con Pau de Programacion";
    break;
    case 3:
        $diasemana="Hoy es miercoles y toca clase con Angel de PRL";
    break;
    case 4:
        $diasemana="Hoy es jueves y toca clase con Pau de Programacion";
    break;
    case 5:
        $diasemana="Hoy es viernes y toca clase con Pau de Publicacion de paginas web";
    break;
    case 6:
        $diasemana="Hoy es fin de semana y no hay clase!";
    break;
    case 7:
        $diasemana="Hoy es fin de semana y no hay clase!";
    break;
}

echo "$diasemana"
?>
</body>
</html>