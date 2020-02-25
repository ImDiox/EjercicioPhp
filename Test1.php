<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    mt_rand
</head>
<body>
<?php
    $aprobados=0;
    $suspendidos=0;
    $nota=5;
    $nota2=4;
    if($nota>5){
        echo "<p>El alumno esta aprobado</p>";
        $aprobados=$aprobados+1;
    }
    elseif($nota==5){
        echo "<p>El alumno esta aprobado por los pelos";
        $aprobados=$aprobados+1;
    }
    else{
        echo "<p>El alumno esta suspendido</p>";
        $suspendidos=$suspendidos+1;
    }
    if($nota2>5){
        echo "<p>El alumno esta aprobado</p>";
        $aprobados=$aprobados+1;
    }
    elseif($nota2==5){
        echo "<p>El alumno esta aprobado por los pelos";
        $aprobados=$aprobados+1;
    }
    else{
        echo "<p>El alumno esta suspendido</p>";
        $suspendidos=$suspendidos+1;
    }
    echo"<p>El numero de aprobados es $aprobados</p>";
    echo"<p>El numero de suspendidos es $suspendidos</p>";  
?>
</body>
</html>