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
$edad=mt_rand(20,60);
$salario=mt_rand(600,3000);
if($salario>=1000 and $salario<=2000){
    if($edad>45){
    $salariofinal= $salario*1.03;
    }
    elseif($edad<=45){
    $salariofinal= $salario*1.10;
    }
}
elseif($salario<1000){
    if($edad<30){
        $salariofinal=1100;
    }
    elseif($edad>=30 and $edad<=45){
        $salariofinal= $salario*1.03;
    }
    elseif($edad>45){
        $salariofinal= $salario*1.15;
    }
}
else{
    $salariofinal=$salario;
}

echo "Usted tiene $edad años y su salario es $salario y el salario final es $salariofinal"
?>
</body>
</html>