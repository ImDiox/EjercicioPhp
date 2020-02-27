<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function discount1($a,$b=0.10){
        return $a-($a*$b);
    }
    function discount2($a,$b=0.15){
        return $a-($a*$b);
    }    
    $total=0;
    $item=$_GET["item"];
    $cantidad=$_GET["cantidad"];
    /*for($i=0;$i<count($item);$i++){
        if(isset($item[$i])){
            $total=$total+$item[$i];
        }
    }*/
    foreach ($item as $i=>$valor){
        echo "<p>Has comprado $i, que vale: $valor</p>";
        $total=$total+$valor;
    }
    if ($total<=50){
        echo "Si quiere un descuento tendra que comprar mas fruta<br>
        El precio le queda igual, serán $total";
    }else if ($total>50 and $total<=100){
        echo "Voy a hacerle un descuento del 10% por haber gastado hasta $total euros<br>
        El precio le queda en: "; 
        echo discount1($total); 
    }else{
        echo "Que compra tan grande! Le aplicaré un 15% por haber gastado hasta $total euros<br>
        El precio le queda en: ";
        echo discount2($total); 
    }
?>
</body>
</html>