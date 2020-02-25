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

$P1=$_GET["P1"];
$P2=$_GET["P2"];
$P3=$_GET["P3"];
$P4=$_GET["P4"];
$P5=$_GET["P5"];
$P6=$_GET["P6"];
$P7=$_GET["P7"];
$P8=$_GET["P8"];
$P9=$_GET["P9"];
$P10=$_GET["P10"];

$suma= $P1+$P2+$P3+$P4+$P5+$P6+$P7+$P8+$P9+$P10;
echo "$suma";
if($suma<=10){
    echo"<p>Puntuación entre 0 y 10:</p>
    <p>¡Enhorabuena! tu pareja parece ser totalmente fiel.</p>";
}
elseif($suma<=22){
    echo"<p>¡Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.</p>";
}
else{
    echo"<p>Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.</p>";
}
?>
</body>
</html>