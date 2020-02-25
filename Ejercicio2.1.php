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
    $var=mt_rand(0,1);
if($var==0){
    echo'<img src="img/img1.jpeg">';
}
else{
    echo'<img src="img/img2.jpeg">';
}
?>
</body>
</html>