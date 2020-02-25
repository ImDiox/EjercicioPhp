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


switch($notatotal){
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        $notafinal="Suspendido";
    break;
    case 5:
        $notafinal="Suficiente";
    break;
    case 6:
        $notafinal="Bien";
    break;
    case 7:
        $notafinal="Notable";
    break;
    case 8:
    case 9:
    case 10:
        $notafinal="Sobresaliente";
    break;
    
}
echo "Tus notas son $nota1, $nota2, $nota3, la media es $notatotal, y estas $notafinal"
?>
</body>
</html>