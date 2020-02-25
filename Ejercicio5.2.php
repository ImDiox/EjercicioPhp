<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Ejercicio5.2.php" method="get">
    <p>Escriba el precio: <input type="text" name="precio"></p>
    <input type="submit" value="Enviar">
</form>
<?php
if(isset($_GET["precio"])){
    $precio=$_GET["precio"];
    function desc($precio){
        if($precio<=100){
            $desc=0;
        }
        elseif($precio>100 and $precio<=499.99){
            $desc=$precio*0.10;
        }
        else{
            $desc=$precio*0.15;
        }
    return $precio-$desc;
        }
    echo desc($precio);
}

?>
</body>
</html>