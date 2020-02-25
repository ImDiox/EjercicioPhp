<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$dia=mt_rand(1,7);
    echo "<p>$dia</p>";
if($dia==1){
    echo"Hoy es lunes y toca clase con Xavier de HTML";
}
elseif($dia==2){
    echo"Hoy es martes y toca clase con Pau de Programacion";
}
elseif($dia==3){
    echo"Hoy es miercoles y toca clase con Angel de PRL";
}
elseif($dia==4){
    echo"Hoy es jueves y toca clase con Pau de Programacion";
}
elseif($dia==5){
    echo"Hoy es viernes y toca clase con Pau de Publicacion de paginas web";
}
else{
    echo"Hoy es fin de semana y no hay clase!";
}
?>
</body>
</html>