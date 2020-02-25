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
$nota1=mt_rand(0,10);
$nota2=mt_rand(0,10);
$nota3=mt_rand(0,10);

$notasuma= $nota1+$nota2+$nota3;
$notatotal=intval($notasuma/3);


if($notatotal<5){
    $notafinal="Suspendido";
}
elseif($notatotal>=5 and $notatotal<6){
    $notafinal="Aprobado";
}
elseif($notatotal>=6 and $notatotal<7){
    $notafinal= "Bien";
}
elseif($notatotal>=7 and $notatotal<9){
    $notafinal="Notable";
}
else{
    $notafinal="Excelente";
}
echo "Tus notas son $nota1, $nota2, $nota3, la media es $notatotal, y tu nota final es $notafinal"
?>
</body>
</html>