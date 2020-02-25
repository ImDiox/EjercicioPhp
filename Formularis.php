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
if (isset($_GET["usuario"]) and isset($_GET["password"])){
  if($_GET["password"]== 123456){
  echo "<p>Bienvenido <strong>".$_GET["usuario"]."</strong></p>";
  }
  else{
    echo'<p>Password incorrecto. <a href="Formularis.php">Siga buscando</a></p>';
  }
}
else{
?>

<form action="Formularis.php" method="get">
<p>Usuario: <input type="text" name="usuario" maxlength="6"></p>

<p>Contraseña: <input type="password" name="password" minlength="6"></p>
<p>Correo para enviarte spam: <input type="email" name="correo" size="40"></p>
<p>Telefono Movil: <input type="tel" name="telefono" size="40"></p>
<input type="color" name="color">
<p><input type="range" name="rango" id=""></p>
<p><input type="file" name="file" id=""></p>
<input type="hidden" name="nombre" value="pepito">
<p><textarea name="texto" cols="20" rows="4" placeholder="Escriba algo"></textarea></p>
<fieldset>
<p><select name="menu">
  <option value="1">Uno</option>
  <option value="2" selected>Dos</option>
  <option value="3">Tres</option>
</select></p>
</fieldset>

    <input type="submit" value="Enviar">
    <button type="button">
    <img src="img/legoyoda.jpeg" alt="Lego Yoda" width="64" height="64" style="vertical-align">
    Este botón no hace nada
    </button>
  </p>
</form>
<?php
}
?>
</body>
</html>