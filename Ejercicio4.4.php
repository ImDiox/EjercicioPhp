<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Ejercicio4.4.php" method="get">
    <p>Euros: <input type="text" name="euros" ></p>
    <input type="submit" value="Enviar">

<?php
 if (isset($_GET["euros"])){
    $IVA= $_GET["euros"] * 1.21;
    $IRPF= $_GET["euros"] * 1.15;
    $respuesta= $_GET["euros"] + $IVA - $IRPF;
    echo "<p>$respuesta</p>";
    
   
 }
?>
</body>
</html>