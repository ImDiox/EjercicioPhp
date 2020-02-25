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
$codigo=1234;
if (isset($_GET["cont"])){
    $cont=$_GET["cont"];
    $contraseña=$_GET["contraseña"];
    if($contraseña==$codigo){
        echo "La contraseña es correcta";
        $cont=0;
    }
     else{   
        echo "Has fallado la contraseña vuelve a intentarlo";
        $cont=$cont+1;
     }
    if ($cont==4) {
        header("Location: Ejercicio4.5.b.php");
    }
}
else{
    $cont=0;
}
?>
    <form action="Ejercicio4.5.php" method="get">
    <p>Contraseña: <input type="text" name="contraseña" maxlength="4"></p>
    <input type="hidden" value="<?=$cont?>" name="cont">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>



