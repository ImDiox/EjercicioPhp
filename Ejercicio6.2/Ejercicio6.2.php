<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="Ejercicio6.2.css">
</head>
<body>
<?php

for($i=1;$i<=12;$i++){
    $dinero=mt_rand(10,30);
}

?>
<form action="Ejercicio6.2.2.php" method="get">
    <div class="fondo">
        <div>
        <img src="img/logofruteria.png" alt="logo" class="logo">
        </div>
    </div>
            
    <div class="row">
        <div class="col-md-4">
            <p>Fruta del Dragon <?=$dinero?>€<input type="checkbox" name="item[Fruta del Dragon]" value="<?=$dinero?>"></p>
            <img src="img/frutadragon.jpeg" alt="Fruta Dragon"><br>
        </div>

        <div class="col-md-4">
            <p>Durián <?=$dinero?>€<input type="checkbox" name="item[Durian]" value="<?=$dinero?>"></p>
            <img src="img/durian.jpeg" alt="Durian"><br>
        </div>

        <div class="col-md-4">
            <p>Rambután <?=$dinero?>€<input type="checkbox" name="item[Rambután]" value="<?=$dinero?>"></p>
            <img src="img/Rambutan.jpg" alt=""><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <p>Arbol de Jack <?=$dinero?>€<input type="checkbox" name="item[Arbol de Jack]" value="<?=$dinero?>"></p>
            <img src="img/ArbolJack.jpg" alt=""><br>
        </div>

        <div class="col-md-4">
            <p>Lichi <?=$dinero?>€<input type="checkbox" name="item[Lichi]" value="<?=$dinero?>"></p>
            <img src="img/lichi.jpg" alt=""><br>
        </div>

        <div class="col-md-4">
            <p>Torombolo <?=$dinero?>€<input type="checkbox" name="item[Torombolo]" value="<?=$dinero?>"></p>
            <img src="img/Torombolo.jpg" alt=""><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <p>Pineberry <?=$dinero?>€<input type="checkbox" name="item[Pineberry]" value="<?=$dinero?>"></p>
            <img src="img/pineberry.jpeg" alt=""><br>
        </div>

        <div class="col-md-4">
            <p>Tuna <?=$dinero?>€<input type="checkbox" name="item[Tuna]" value="<?=$dinero?>"></p>
            <img src="img/tuna.jpg" alt=""><br>
        </div>

        <div class="col-md-4">
            <p>Rábano Sandìa <?=$dinero?>€<input type="checkbox" name="item[Rabano Sandia]" value="<?=$dinero?>"></p>
            <img src="img/rabanosandia.jpg" alt=""><br>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <p>Salak <?=$dinero?>€<input type="checkbox" name="item[Salak]" value="<?=$dinero?>"></p>
        <img src="img/salak.jpg" alt=""><br>
    </div>

    <div class="col-md-4">
        <p>Chirimoya <?=$dinero?><input type="checkbox" name="item[Chirimoya]" value="<?=$dinero?>"></p>
        <img src="img/chirimoya.jpeg" alt=""><br>
    </div>

    <div class="col-md-4">
        <p>Mandarina <?=$dinero?><input type="checkbox" name="item[Mandarina]" value="<?=$dinero?>"></p>
        <img src="img/mandarina.jpg" alt=""><br>
    </div>
    </div>
    <p><input type="submit" value="Compra" class="boton"></p>
</form>
</body>
</html>