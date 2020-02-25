<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div style='left:$x; top:$y; background-color:rgb($colorR,$colorG,$colorB)'></div>
<?php

$x=mt_rand(0,400);
$y=mt_rand(0,400);
$colorR=mt_rand(0,255);
$colorG=mt_rand(0,255);
$colorB=mt_rand(0,255);
?>
</body>
</html>