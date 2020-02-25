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
    $num=mt_rand(1,100);
    $esprimo=false;
    for($i=2;$i<$num;$i=$i+1){
        if($num%$i==0){   
            $esprimo=true;
        }
    }
    if($esprimo==true){
        echo"$num no es un numero primo";
    }
    else{
        echo "$num es un numero primo";
    }

?>
</body>
</html>