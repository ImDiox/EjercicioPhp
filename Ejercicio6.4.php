<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $palabra=$_GET["palabra"];
    
$diccionario= array ( 
"Puerta"=>"Door", 
"Gato"=>"Cat",
"Perro"=>"Dog",
"Agua"=>"Water",
"Teclado"=>"Keyboard",
"Coche"=>"Car",
"Llaves"=>"Keys",
"Libro"=>"Book",
"Saltar"=>"Jump",
"Comida"=>"Food");

if(isset($diccionario[$palabra])){
    echo "$palabra en ingles es ".$diccionario[$palabra]."";
}
else{
    echo "No se que palabra es esa";
}
?>
<form action="Ejercicio6.4.php" method="get">
        <input type="hidden" name="ejercicio" value="11">
        <p>Palabra en español<input type="text" name="palabra"></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>