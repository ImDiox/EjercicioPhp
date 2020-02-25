<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio4.6.php" method="get">
        <p>De cuantas filas quieres que sea? <input type="text" name="filas">
        <select name="elemento">
            <option value="*">Bolitas</option>
            <option value="[]">Ladrillos</option>
            <option value="()">Pelotas</option>
            <option value="$">Dolares</option>
            <option value="+">Suma</option>
        </select>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
    $filas=$_GET["filas"];
    $elemento=$_GET["elemento"];
    
    for ($i=0; $i<=$filas;$i++){

        for($i2=0;$i2<=$i;$i2=$i2+1){
        echo $elemento;
    }
    echo "<br>";
    }
?>
</body>
</html>