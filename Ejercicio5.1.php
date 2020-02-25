<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio5.1.php" method="get">
        <p>Escriba el primer numero: <input type="text" name="num1"></p>
        <p>Escriba el segundo numero: <input type="text" name="num2"></p>
        <select name="operacion">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicacion</option>
            <option value="/">Division</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_GET["num1"])and isset($_GET["num2"])){
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    function multi($num1,$num2){
        return $num1*$num2;
    }
    function suma($num1,$num2){
        return $num1+$num2;
    }
    function resta($num1,$num2){
        return $num1-$num2;
    }
    function div($num1,$num2){
        return $num1/$num2;
    }
    $operacion=$_GET["operacion"];
    if($operacion=="+"){
     echo suma($num1,$num2);
    }
    elseif($operacion=="-"){
        echo resta($num1,$num2);
        echo "<p>La operacio inversa seria: " .resta($num2,$num1)."</p>";
       }
    elseif($operacion=="*"){
        echo multi($num1,$num2);
        }
    elseif($operacion=="/"){
        echo div($num1,$num2);
        echo "<p>La operacio inversa seria: " .div($num2,$num1)."</p>";    
        }
    }
?>
</body>
</html>